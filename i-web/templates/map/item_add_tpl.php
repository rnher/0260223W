<?php

$city_place = $db->rawQuery("select id, name_$lang as name from #_place_citys");
$dataDist = $db->rawQuery("select id, name_$lang as name ,id from #_place_dists");
?>

<?php if ($config_pr['seo'] == true) { ?>

    <script>
        function text_count_changed(textfield_id, counter_id) {

            var v = $(textfield_id).val();

            if (parseInt(v.length) > 170) {

                $(textfield_id).css('border', '1px solid #D90000');

                $(textfield_id).css('background', '#e5e5e5');

                $(counter_id).val(parseInt(v.length));

            } else {

                $(textfield_id).css('border', '1px solid #DDDDDD');

                $(textfield_id).css('background', '#FFF');

                $(counter_id).val(parseInt(v.length));

            }

        }

        $(document).ready(function() {

            text_count_changed("#description", "#des_char");

            $('#description').blur(function(event) {

                text_count_changed($(this), "#des_char");

            });

            $('#description').keypress(function(event) {

                text_count_changed($(this), "#des_char");

            });

        });
    </script>

<?php } ?>

<script type="text/javascript">
    $(document).ready(function() {

        $('.chonngonngu li a').click(function(event) {

            var lang = $(this).attr('href');

            $('.chonngonngu li a').removeClass('active');

            $(this).addClass('active');

            $('.lang_hidden').removeClass('active');

            $('.lang_' + lang).addClass('active');

            return false;

        });

        $('.update_stt').keyup(function(event) {

            var id = $(this).attr('rel');

            var table = 'baiviet_photo';

            var value = $(this).val();

            $.ajax({

                type: "POST",

                url: "ajax/update_stt.php",

                data: {
                    id: id,
                    table: table,
                    value: value
                },

                success: function(result) {

                }

            });

        });



        $('.delete').click(function(e) {

            $(this).parent().remove();

        });



    });
</script>

<div class="wrapper">

    <?php
    $com = $_GET['com'];
    $type = $_GET['type'];
    $table = $GLOBAL[$com][$type];
    ?>

    <div class="control_frm">

        <div class="bc">

            <ul id="breadcrumbs" class="breadcrumbs">

                <li><a href="index.html?com=map&act=add"><span>Chi nh??nh</span></a></li>

                <li class="current"><a href="#" onclick="return false;"><?= ($_GET['act'] == 'edit') ? 'S???a' : 'Th??m' ?></a>
                </li>

            </ul>

            <div class="clear"></div>

        </div>

    </div>



    <form name="supplier" id="form-validate" class="form" action="index.html?com=map&act=save<?= (!empty($_GET['id']) ? '&id=' . $_GET['id'] : '') ?><?= (!empty($_GET['type']) ? '&type=' . $_GET['type'] : '') ?>" method="post" enctype="multipart/form-data" autocomplete="off" accept-charset="utf-8">

        <div class="mtop0">

            <div class="oneOne">

                <div class="widget mtop0">

                    <div class="title chonngonngu" style="border-bottom: 0px solid transparent">

                        <ul>

                            <?php foreach ($config['lang'] as $k => $v) { ?>

                                <li><a href="<?= $k ?>" class="<?= ($k == 'vi') ? 'active' : '' ?> tipS" title="<?= $v ?>"><img src="./images/<?= $k ?>.png" alt="" class="<?= $func->changeTitle($v) ?>" /><?= $v ?></a></li>

                            <?php } ?>

                        </ul>

                    </div>

                </div>

            </div>



            <div class="<?= ($config_pr['full'] == true) ? 'oneOne' : 'colLeft' ?>">

                <div class="widget mtop0">

                    <div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />

                        <h6>Th??ng tin chung</h6>

                    </div>



                    <?php foreach ($config['lang'] as $k => $v) { ?>

                        <div class="formRow lang_hidden lang_<?= $k ?> <?= ($k == 'vi') ? 'active' : '' ?>">

                            <label>T??n [<?= $v ?>]</label>

                            <div class="formRight">

                                <input type="text" data-validation="required" data-validation-error-msg="T??n kh??ng ???????c ????? tr???ng" name="data[ten_<?= $k ?>]" title="Nh???p t??n danh m???c" id="ten_<?= $k ?>" class="tipS validate[required]" value="<?= @$item['ten_' . $k] ?>" />

                            </div>

                            <div class="clear"></div>

                        </div>


                        <?php if ($table['place']) { ?>
                            <div class="formRow">
                                <label>T???nh/th??nh ph??? :</label>
                                <div class="formRight">
                                    <select name="data[id_city]" id="acc-city">
                                        <option value="0">T???nh/Th??nh ph???<span style="color:#f00">(*)</span></option>
                                        <?php foreach ($city_place as $key => $value) { 
                                           
                                            ?>
                                            <option value="<?= $value['id'] ?>" <?php if ($item['id_city'] == $value['id']) echo 'selected'; ?>><?= $value['name'] ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>Qu???n/huy???n :</label>
                                <div class="formRight">
                                    <select name="data[id_dist]" id="acc-dist">
                                        <option value="0">Qu???n/huy???n:<span style="color:#f00">(*)</span></option>
                                        <?php
                                        foreach ($dataDist as $key => $value)
                                        {
                                        ?>
                                            <?php if ($item['id_dist'] == $value['id']) { ?>
                                                <option value="<?= $value['id'] ?>" <?php if ($item['id_dist'] == $value['id']) echo 'selected'; ?>><?= $value['name'] ?>
                                                </option>
                                            <?php } ?>
                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="clear"></div>
                            </div>
                        <?php } ?>




                        <?php if ($GLOBAL[$com][$type]['diachi']) { ?>
                            <div class="formRow lang_hidden lang_<?= $k ?> <?= ($k == 'vi') ? 'active' : '' ?>">

                                <label>?????a ch??? [<?= $v ?>]</label>

                                <div class="ck_editor">

                                    <textarea data-validation="required" data-validation-error-msg="?????a ch??? kh??ng ???????c ????? tr???ng" title="Nh???p ?????a ch??? [<?= $v ?>]. " id="diachi_<?= $k ?>" rows="3" name="data[diachi_<?= $k ?>]"><?= @$item['diachi_' . $k] ?></textarea>

                                </div>

                                <div class="clear"></div>

                            </div>
                        <?php } ?>
                        <?php if ($GLOBAL[$com][$type]['mota']) { ?>
                            <div class="formRow lang_hidden lang_<?= $k ?> <?= ($k == 'vi') ? 'active' : '' ?>">

                                <label>M?? t??? [<?= $v ?>]</label>

                                <div class="ck_editor">

                                    <textarea title="Nh???p m?? t??? [<?= $v ?>]. " data-height="400" id="mota_<?= $k ?>" rows="3" <?= ($table['mota-ckeditor'] == true) ? 'class="ck_editors"' : 'rows="8"' ?> name="data[mota_<?= $k ?>]"><?= @$item['mota_' . $k] ?></textarea>

                                </div>

                                <div class="clear"></div>

                            </div>
                        <?php } ?>
                        <?php if ($GLOBAL[$com][$type]['noidung']) { ?>
                            <div class="formRow lang_hidden lang_<?= $k ?> <?= ($k == 'vi') ? 'active' : '' ?>">

                                <label>N???i dung [<?= $v ?>]</label>

                                <div class="ck_editor">

                                    <textarea title="Nh???p n???i dung [<?= $v ?>]. " data-height="400" id="noidung_<?= $k ?>" rows="8" <?= ($table['noidung-ckeditor'] == true) ? 'class="ck_editors"' : 'rows="8"' ?> name="data[noidung_<?= $k ?>]"><?= @$item['noidung_' . $k] ?></textarea>

                                </div>

                                <div class="clear"></div>

                            </div>
                        <?php } ?>
                    <?php } ?>

                </div>

                <div class="clear"></div>

            </div>



            <div class="<?= ($config_pr['full'] == true) ? 'oneOne' : 'colRight' ?>">

                <div class="widget mtop0">

                    <div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />

                        <h6>H??nh ???nh v?? iframe</h6>

                    </div>
                    <div class="formRow">

                        <label>Phone</label>

                        <div class="formRight">

                            <input type="text" data-validation="required" data-validation-error-msg="??i???n tho???i kh??ng ???????c ????? tr???ng" name="data[phone]" title="Nh???p phone" id="phone" class="tipS" value="<?= @$item['phone'] ?>" />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php if ($GLOBAL[$com][$type]['diachi']) { ?>

                        <div class="formRow">

                            <label>Email</label>

                            <div class="formRight">

                                <input type="text" name="data[email]" title="Nh???p email" id="email" class="tipS" value="<?= @$item['email'] ?>" />

                            </div>

                            <div class="clear"></div>

                        </div>

                    <?php } ?>

                    <?php if ($GLOBAL[$com][$type]['email']) { ?>
                        <div class="formRow">

                            <label>Email</label>

                            <div class="formRight">

                                <input data-validation="required" data-validation-error-msg="Email kh??ng ???????c ????? tr???ng" type="text" name="data[email]" title="Nh???p email" id="email" class="tipS" value="<?= @$item['email'] ?>" />

                            </div>

                            <div class="clear"></div>

                        </div>
                    <?php } ?>
                    <?php if ($GLOBAL[$com][$type]['toado']) { ?>
                        <div class="formRow">

                            <label>T???a ?????</label>

                            <div class="formRight">

                                <input type="text" data-validation="required" data-validation-error-msg="T???a ????? kh??ng ???????c ????? tr???ng" name="data[toado]" title="Nh???p t???a ?????" id="toado" class="tipS" value="<?= @$item['toado'] ?>" />

                            </div>

                            <div class="clear"></div>

                        </div>
                    <?php } ?>
                    <?php if ($table['website']) { ?>
                        <div class="formRow">

                            <label>Website</label>

                            <div class="formRight">

                                <input type="text" data-validation="required" data-validation-error-msg="website kh??ng ???????c ????? tr???ng" name="data[website]" title="Nh???p web" id="website" class="tipS" value="<?= @$item['website'] ?>" />

                            </div>

                            <div class="clear"></div>

                        </div>
                    <?php } ?>
                    <?php if ($_GET["type"] != 'hotline') { ?>
                        <div class="formRow">

                            <label>Iframe map <strong><a href="https://www.google.com/maps" target="_blank" title="L???y m?? nh??ng Google Map">( <i class="fas fa-map-marker-alt" aria-hidden="true"></i> L???y m?? nh??ng )</a></strong></label>

                            <div>

                                <textarea data-validation="required" data-validation-error-msg="Iframe map kh??ng ???????c ????? tr???ng" title="Nh???p iframe. " id="iframe_map" rows="7" name="data[iframe_map]"><?= @$item['iframe_map'] ?></textarea>

                            </div>

                            <div class="clear"></div>

                        </div>
                    <?php } ?>
                    <?php if ($table['img']) { ?>
                        <div class="formRow">

                            <label>T???i h??nh ???nh:</label>

                            <div class="formRight">

                                <input type="file" id="file" name="file" />

                                <img src="./images/question-button.png" alt="Upload h??nh" class="icon_question tipS" original-title="T???i h??nh ???nh (???nh JPEG, GIF , JPG , PNG)">

                                <br />

                                <br />

                                <span style="display: inline-block; line-height: 30px;color:#CCC;">

                                Width: <?=$GLOBAL[$com][$type]['img-width']*$GLOBAL[$com][$type]['img-ratio']?>px -
                                <?=$GLOBAL[$com][$type]['img-height']*$GLOBAL[$com][$type]['img-ratio']?>px

                                </span>

                            </div>

                            <div class="clear"></div>

                        </div>

                        <?php if ($_GET['act'] == 'edit') { ?>

                            <div class="formRow">

                                <label>H??nh Hi???n T???i :</label>

                                <div class="formRight">

                                    <div class="mt10"><img src="<?= _upload_hinhanh . $item['photo'] ?>" alt="NO PHOTO" width="100" /></div>

                                </div>

                                <div class="clear"></div>

                            </div>

                        <?php } ?>
                    <?php } ?>
                    <div class="formRow">

                        <div class="formRight">

                            <label>S??? th??? t???: </label>

                            <input type="text" class="tipS" value="<?= isset($item['stt']) ? $item['stt'] : $func->checkNumb('stt', $com, '') ?>" name="stt" style="width:40px; text-align:center;" onkeypress="return OnlyNumber(event)" original-title="S??? th??? t??? c???a danh m???c, ch??? nh???p s???">

                        </div>

                        <div class="clear"></div>

                    </div>

                    <div class="formRow">

                        <div class="formRight">

                            <label class="stardust-checkbox">

                                Hi???n th???

                                <input class="stardust-checkbox__input" <?= (!isset($item['hienthi']) || $item['hienthi'] == 1) ? 'checked="checked"' : '' ?> name="hienthi" type="checkbox" value="1" style="display:none">

                                <div class="stardust-checkbox__box"></div>

                            </label>

                        </div>

                    </div>

                </div>

                <div class="clear"></div>

            </div>

        </div>



        <div class="formRow fixedBottom">

            <div class="formRight">

                <input type="hidden" name="id" value="<?= $_GET['id'] ?>" />

                <div class="box-admin" style="display:flex; align-items:center;justify-content:flex-end">

                    <div class="box-action">

                        <button type="submit" class="btn btn-sm bg-gradient-primary text-white">

                            <i class="far fa-save mr-2"></i>L??u

                        </button>

                        <button type="submit" class="btn btn-sm bg-gradient-success" name="save-here"><i class="far fa-save mr-2"></i>L??u t???i trang</button>

                        <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>L??m l???i</button>

                        <a class="btn btn-sm bg-gradient-danger text-white" href="index.html?com=map&act=man">

                            <i class="fas fa-sign-out-alt mr-2"></i>Tho??t

                        </a>

                    </div>

                </div>



            </div>

        </div>

    </form>

</div>
<script language="javascript">
    $(function() {
        $('#acc-city').change(function() {
            var id = $(this).val();

            $.ajax({
                url: 'ajax/loadquan.php',
                type: 'POST',
                data: {
                    id: id
                },
                success: function(data) {
                    $('#acc-dist').html(data);
                }
            })
        });
        $('#acc-dist').change(function() {
            var id = $(this).val();
            $.ajax({
                url: 'ajax/loadxa.php',
                type: 'POST',
                data: {
                    id: id
                },
                success: function(data) {
                    $('#acc-ward').html(data);
                }
            })
        });
    })
    </script>