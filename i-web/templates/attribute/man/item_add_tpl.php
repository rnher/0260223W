<link href="plugin/sumoselect/sumoselect.css" rel="stylesheet" />

<script src="plugin/sumoselect/jquery.sumoselect.min.js"></script>

<script src="assets/js/star.js"></script>

<?php if($table['seo']==true){ ?>

<script>
var edit = "<?=$_GET['act']?>";



function text_count_changed(textfield_id, counter_id) {

    var v = $(textfield_id).val();

    if (parseInt(v.length) > 300) {

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

    $('select[js-select-city]').change(function() {

        var id = $(this).val();

        $.post('ajax/loadDist.php', {

            'id': id

        }, function(data, st) {

            $('select[data-view-dist]').html(data);

        });

    });

    $('.update_stt').keyup(function(event) {

        var id = $(this).attr('rel');

        var table = 'attribute_photo';

        var value = $(this).val();

        $.ajax({

            type: "POST",

            url: "ajax/update_stt.php",

            data: {

                id: id,

                table: table,

                value: value

            },

            success: function(result) {}

        });

    });



    $('.delete_images').click(function() {

        if (confirm('B???n c?? mu???n x??a h??nh n??y ko ? ')) {

            var id = $(this).attr('title');

            var table = 'attribute_photo';

            $.ajax({

                type: "POST",

                url: "ajax/delete_images.php",

                data: {

                    id: id,

                    table: table

                },

                success: function(result) {}

            });

            $(this).parent().slideUp();

        }

        return false;

    });



    $('.delete').click(function(e) {

        $(this).parent().remove();

    });



});
</script>

<div class="wrapper">

    <div class="control_frm">

        <div class="bc">

            <ul id="breadcrumbs" class="breadcrumbs">

                <li><a
                        href="index.html?com=attribute&act=add<?php if($_GET['type']!='') echo'&type='. $_GET['type'];?><?php if($_GET['page']!='') echo'&page='. $_GET['page'];?>"><span><?=$table['title']?></span></a>

                </li>

                <li class="current"><a href="#" onclick="return false;"><?=($_GET['act']=='edit') ? 'S???a':'Th??m'?></a>

                </li>

            </ul>

            <div class="clear"></div>

        </div>

    </div>



    <form name="supplier" class="form"
        action="index.html?com=attribute&act=save<?php if($_GET['id']!='') echo'&id='. $_GET['id'];?><?php if($_GET['id_product']!='') echo'&id_product='. $_GET['id_product'];?><?php if($_GET['type']!='') echo'&type='. $_GET['type'];?><?php if($_GET['page']!='') echo'&page='. $_GET['page'];?>"
        method="post" enctype="multipart/form-data" autocomplete="off" accept-charset="utf-8">

        <div class="mtop0">

            <div class="oneOne">

                <div class="widget mtop0">

                    <div class="title chonngonngu" style="border-bottom: 0px solid transparent">

                        <ul>

                            <?php  foreach ($config['lang'] as $k => $v){ ?>

                            <li><a href="<?=$k?>" class="<?= ($k == 'vi') ? 'active': '' ?> tipS" title="<?=$v?>"><img
                                        src="./images/<?=$k?>.png" alt=""
                                        class="<?=$func->changeTitle($v)?>" /><?=$v?></a>

                            </li>

                            <?php } ?>

                        </ul>

                    </div>

                </div>

            </div>



            <div class="<?=($table['full']==true) ? 'oneOne':'colLeft' ?>">

                <div class="widget mtop0">

                    <div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />

                        <h6>Th??ng tin chung</h6>

                    </div>

                    <?php  foreach ($config['lang'] as $k => $v){ ?>

                    <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">

                        <label>Ti??u ????? [<?=$v?>]</label>

                        <div class="formRight">

                            <input type="text" data-validation="required"
                                data-validation-error-msg="T??n kh??ng ???????c ????? tr???ng"
                                onkeyup="changeSlug('name_<?=$k?>','alias_<?=$k?>','url_seo_<?=$k?>','title_seo_<?=$k?>','title_<?=$k?>')"
                                name="data[ten_<?=$k?>]" title="Nh???p t??n danh m???c" id="name_<?=$k?>" class="tipS"
                                value="<?=@$item['ten_'.$k]?>" />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php }?>

                    <?php if($table['color-detail']==true){ ?>

                     <div class="formRow">

                        <label>Ch???n m??u s???c</label>

                        <div class="formRight form-mausac">

                            <input type="text" name="data[color_image]" value="<?=@$item['color_image']?>" class="cp3" />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php }?>



                    <?php if($table['alias']==true){ ?>

                    <?php  foreach ($config['lang'] as $k => $v){ ?>

                    <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">

                        <label class="d-block">[<?=$v?>] ???????ng d???n hi???n th??? (B???n c?? th??? thay ?????i ???????ng d???n) :</label>

                        <div class="formRight">

                            <div class="box-alias"
                                style="position: relative;display: -ms-flexbox;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;-ms-flex-align: stretch;align-items: stretch;width: 100%;">

                                <div class="alias-text-disabled">

                                    <b><?=$https_config?></b>

                                </div>

                                <div
                                    style="position: relative;-ms-flex: 1 1 auto;flex: 1 1 auto;width: 1%;margin-bottom: 0;">

                                    <input onblur="changeUrl('alias_<?=$k?>','url_seo_<?=$k?>')"
                                        data-validation="required" data-validation-error-msg="Url kh??ng ???????c ????? tr???ng"
                                        type="text" name="data[tenkhongdau_<?=$k?>]" title="Nh???p t??n kh??ng d???u"
                                        id="alias_<?=$k?>" class="tipS" value="<?=@$item['tenkhongdau_'.$k]?>" />

                                </div>



                                <?php if($_GET['act']=='edit'){ ?>

                                <div class="input-group-append"
                                    style="display:flex;align-items:center;margin-left:10px">

                                    <div class="input-group-text">

                                        <input type="checkbox" id="checkUrl<?=$k?>" data-id="<?=$k?>"
                                            class="change_alias alias_<?=$k?>" checked>

                                        <label style="float:right;padding:0;margin-left:5px;" for="checkUrl<?=$k?>"
                                            class="mb-0 ml-1">Kh??ng ?????i link</label>

                                    </div>

                                </div>

                                <?php } ?>

                            </div>



                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php }?>

                    <?php }?>

                    <?php if($table['link']){?>

                    <div class="formRow">

                        <label>Link youtube</label>

                        <div class="formRight">

                            <input type="text" data-validation="required"
                                data-validation-error-msg="Link kh??ng ???????c ????? tr???ng" name="data[link]" title="Nh???p link"
                                id="link" class="tipS" value="<?=@$item['link']?>" />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php }?>

                    <?php  foreach ($config['lang'] as $k => $v){ ?>

                    <?php if($table['job']==true){ ?>

                    <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">

                        <label>V??? tr?? [<?=$v?>]</label>

                        <div class="formRight">

                            <input type="text" data-validation="required"
                                data-validation-error-msg="Kh??ng ???????c ????? tr???ng" name="data[job_<?=$k?>]"
                                title="Nh???p ?????a ch???" id="job_<?=$k?>" class="tipS" value="<?=@$item['job_'.$k]?>" />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>





                  







                    <?php if($table['mota']==true){ ?>

                    <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">

                        <label>M?? t??? [<?=$v?>]</label>

                        <div class="ck_editor">

                            <textarea title="Nh???p m?? t??? [<?=$v?>]. " data-height="400" id="mota_<?=$k?>"
                                <?=($table['mota-ckeditor']==true) ? 'class="ck_editors"':'rows="8"' ?>
                                name="data[mota_<?=$k?>]"><?=@$item['mota_'.$k]?></textarea>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>

                    <?php if($table['noidung']==true){ ?>

                    <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">

                        <label>N???i dung [<?=$v?>]</label>

                        <div class="ck_editor">

                            <textarea data-validation="required" data-validation-error-msg="Kh??ng ???????c ????? tr???ng"
                                title="Nh???p n???i dung [<?=$v?>]. " data-height="400" id="noidung_<?=$k?>"
                                <?= ($table['noidung-ckeditor']==true) ? 'class="ck_editors"':'rows="8"' ?>
                                name="data[noidung_<?=$k?>]"><?=@$item['noidung_'.$k]?></textarea>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>

                    <?php } ?>

                </div>



            </div>



            <div class="<?=($table['full']==true) ? 'oneOne':'colRight' ?>">

                <div class="widget mtop0">

                    <div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />

                        <h6>H??nh ???nh v?? danh m???c</h6>

                    </div>


                    <?php if($table['xuatxu']){?>

                    <div class="formRow">

                        <label>Xu???t x???</label>

                        <div class="formRight">

                            <input type="text" data-validation="required"
                                data-validation-error-msg="Kh??ng ???????c ????? tr???ng" name="data[xuatxu]"
                                title="Nh???p m?? s???n ph???m" id="xuatxu" class="tipS" value="<?=@$item['xuatxu']?>" />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php }?>

                    <?php if($table['baohanh']){?>

                    <div class="formRow">

                        <label>B???o h??nh</label>

                        <div class="formRight">

                            <input type="text" data-validation="required"
                                data-validation-error-msg="Kh??ng ???????c ????? tr???ng" name="data[baohanh]"
                                title="Nh???p m?? s???n ph???m" id="baohanh" class="tipS" value="<?=@$item['baohanh']?>" />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php }?>
                    <?php if($GLOBAL[$com][$type]['masp']){?>
                    <div class="formRow">
                        <label>M?? sp</label>
                        <div class="formRight">
                            <input type="text" name="data[masp]" title="Nh???p m?? s???n ph???m" id="masp" class="tipS"
                                value="<?=@$item['masp']?>" />
                        </div>
                        <div class="clear"></div>
                    </div>
                    <?php }?>
                    <?php if($table['tenrieng']==true){ ?>

                    <div class="formRow">

                        <label>T??n ri??ng</label>

                        <div class="formRight">
                            <input type="text" name="data[tenrieng]" title="Nh???p t??n ri??ng" id="tenrieng" class="tipS"
                                value="<?=@$item['tenrieng']?>" />
                        </div>
                        <div class="clear"></div>

                    </div>

                    <?php } ?>

                    <?php if($table['dientich']==true){ ?>

                    <div class="formRow">

                        <label>Di???n t??ch</label>

                        <div class="formRight">
                            <input type="text" name="data[dientich]" title="Nh???p Di???n t??ch" id="dientich" class="tipS"
                                value="<?=@$item['dientich']?>" />
                        </div>
                        <div class="clear"></div>

                    </div>

                    <?php } ?>

                    <?php if($table['giabao']==true){ ?>

                    <div class="formRow">

                        <label>Gi?? b??o gi??</label>

                        <div class="formRight">
                            <input type="text" name="data[giabao]" title="Nh???p m?? s???n ph???m" id="giabao" class="tipS"
                                value="<?=@$item['giabao']?>" />
                        </div>
                        <div class="clear"></div>

                    </div>

                    <?php } ?>
                    <style>
                        #star-product a{margin-right: 3px}
                      .selected{color:orange}
                    </style>
                    <?php if($table['rank']==true){ ?>

                    <div class="formRow">

                        <label>S??? sao</label>

                        <div class="formRight">

                           <!--  <input type="range" name="data[rank]" title="Nh???p S??? sao" id="rank" class="conso tipS"
                                value="<?= (@$item['rank'])?$item['rank']:0?>" data-range style="margin-right:5px;" min="0" max="5"/>
                            <span><?= (@$item['rank'])?$item['rank']:0?></span> -->
                            <div id="star-product">
                                <input type="hidden" id="rank" name="data[rank]" value="<?= (@$item['rank'])?$item['rank']:0?>"/>
                            </div>
                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>

                    <?php if($table['gia']==true){ ?>

                    <div class="formRow">

                        <label>Gi?? b??n</label>

                        <div class="formRight">

                            <input type="text" name="data[giaban]" title="Nh???p gi?? b??n" id="giaban" class="conso tipS"
                                value="<?=@$item['giaban']?>" />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>

                    <?php if($table['giacu']==true){ ?>

                    <div class="formRow">

                        <label>Gi?? c?? n???u c??</label>

                        <div class="formRight">

                            <input type="text" name="data[giacu]" title="Nh???p gi?? c?? n???u c??" id="giacu"
                                class="conso tipS" value="<?=@$item['giacu']?>" />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>

                    <?php if($_GET['type']=='san-pham'){ ?>

                    <div class="formRow">

                        <label>Tr???ng th??i</label>

                        <div class="formRight">

                            <select name="data[id_loai]" id="id_loai" class="main_select">

                                <?php foreach($config['loai'] as $key => $value){?>

                                <option value="<?=$key?>" <?=(@$item['id_loai']==$key) ? 'selected':''?>><?=$value?>

                                </option>

                                <?php }?>

                            </select>

                        </div>

                        <div class="clear"></div>

                    </div>



                    <?php }?>

                    <?php if($table['adv']==true){ ?>

                    <div class="formRow">

                        <label>Ch???n album Qu???ng c??o 1</label>

                        <div class="formRight">

                            <select name="data[id_ad1]" id="id_ad1" class="main_select">

                                <option value="0">
                                    Ch???n album qu???ng c??o
                                </option>

                                <?php foreach($ad1 as $key => $value){?>

                                <option value="<?=$value['id']?>" <?=(@$item['id_ad1']==$value['id']) ? 'selected':''?>>
                                    <?=$value['ten']?>

                                </option>

                                <?php }?>

                            </select>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <div class="formRow">

                        <label>Ch???n album Qu???ng c??o 2</label>

                        <div class="formRight">

                            <select name="data[id_ad2]" id="id_ad2" class="main_select">

                                <option value="0">
                                    Ch???n album qu???ng c??o
                                </option>

                                <?php foreach($ad2 as $key => $value){?>

                                <option value="<?=$value['id']?>" <?=(@$item['id_ad2']==$value['id']) ? 'selected':''?>>
                                    <?=$value['ten']?>

                                </option>

                                <?php }?>

                            </select>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <div class="formRow">

                        <label>Ch???n album Qu???ng c??o 3</label>

                        <div class="formRight">

                            <select name="data[id_ad3]" id="id_ad3" class="main_select">

                                <option value="0">
                                    Ch???n album qu???ng c??o
                                </option>

                                <?php foreach($ad3 as $key => $value){?>

                                <option value="<?=$value['id']?>" <?=(@$item['id_ad3']==$value['id']) ? 'selected':''?>>
                                    <?=$value['ten']?>

                                </option>

                                <?php }?>

                            </select>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php }?>

                    <?php if($table['img']==true){ ?>

                    <div class="formRow">

                        <label>T???i h??nh ???nh:</label>

                        <div class="formRight">

                            <?php if($_GET['act']=='edit'){?>

                            <input type="file" id="file" name="file" />

                            <?php }else{?>

                            <input data-validation="required" data-validation-allowing="jpg, png"
                                data-validation-max-size="300kb" data-validation-error-msg-required="B???n ch??a ch???n file"
                                type="file" id="file" name="file" />

                            <?php }?>

                            <img src="./images/question-button.png" alt="Upload h??nh" class="icon_question tipS"
                                original-title="T???i h??nh ???nh (???nh JPEG, GIF , JPG , PNG)">

                            <br />

                            <br />

                            <span style="display: inline-block; line-height: 30px;color:#CCC;">

                                Width: <?=$table['img-width']*$table['img-ratio']?>px -

                                Height:<?=$table['img-height']*$table['img-ratio']?>px

                            </span>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php if($_GET['act']=='edit'){?>

                    <div class="formRow">

                        <label>H??nh Hi???n T???i :</label>

                        <div class="formRight">

                            <div class="mt10"><img src="<?=_upload_baiviet.$item['photo']?>" alt="NO PHOTO"
                                    width="100" /></div>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>
                    <?php if($table['file']==true){ ?>

                    <div class="formRow">

                        <label>T???i file:</label>

                        <div class="formRight">

                            <?php if($_GET['act']=='edit'){?>

                            <input type="file" id="download" name="download" />

                            <?php }else{?>

                            <input data-validation="required" data-validation-allowing="jpg, png"
                                data-validation-max-size="300kb" data-validation-error-msg-required="B???n ch??a ch???n file"
                                type="file" id="download" name="download" />

                            <?php }?>

                            <img src="./images/question-button.png" alt="Upload h??nh" class="icon_question tipS"
                                original-title="T???i file">

                            <br />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php if($_GET['act']=='edit'){?>

                    <div class="formRow">

                        <label>File Hi???n T???i :</label>

                        <div class="formRight">

                            <div class="mt10">
                                <?= $item['download']?>
                            </div>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>
                    <?php } ?>


                    <?php if($table['img-gallery']==true){ ?>

                    <div class="formRow">

                        <label>H??nh ????nh k??m:

                            <span>[Width:<?=$table['img-width']*$table['img-ratio']?>px -

                                Height:

                                <?=$table['img-height']*$table['img-ratio']?>px]</span></label>

                        <div class="formRight">

                            <a class="file_input" data-jfiler-name="files" data-jfiler-extensions="jpg, jpeg, png, gif">

                                <div class="jFiler jFiler-theme-dragdropbox">

                                    <div class="jFiler-input-dragDrop">

                                        <div class="jFiler-input-inner">

                                            <div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div>

                                            <div class="jFiler-input-text">

                                                <h3>Upload files here</h3>

                                            </div><span class="jFiler-input-choose-btn btn-custom blue-light">Browse

                                                Files</span>

                                        </div>

                                    </div>

                                </div>

                            </a>

                        </div>
                        <?php for($i=0;$i<count($ds_photo);$i++){?>

                        <div class="item_trich">

                            <img class="img_trich" src="<?=_upload_baiviet.$ds_photo[$i]['photo']?>" />

                            <input type="text" rel="<?=$ds_photo[$i]['id']?>" value="<?=$ds_photo[$i]['stt']?>"
                                class="update_stt tipS" />
                            <a class="delete_images icon-jfi-trash jFiler-item-trash-action"
                                title="<?=$ds_photo[$i]['id']?>" style="color:#FF0000"></a>

                        </div>

                        <?php } ?>
                        <div class="clear"></div>

                    </div>

                    <?php } ?>

                    <?php } ?>

                    <?php if($table['icon']==true){ ?>

                    <div class="formRow">

                        <label>T???i icon:</label>

                        <div class="formRight">

                            <input type="file" id="file" name="icon" />

                            <img src="./images/question-button.png" alt="Upload h??nh" class="icon_question tipS"
                                original-title="T???i h??nh ???nh (???nh JPEG, GIF , JPG , PNG)">

                            <br />

                            <br />

                            <span style="display: inline-block; line-height: 30px;color:#CCC;">

                                Width: <?=$table['img-width1']*$table['img-ratio']?>px -

                                Height:<?=$table['img-height1']*$table['img-ratio']?>px

                            </span>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php if($_GET['act']=='edit'){?>

                    <div class="formRow">

                        <label>H??nh Hi???n T???i :</label>

                        <div class="formRight">

                            <div class="mt10"><img src="<?=_upload_baiviet.$item['icon']?>" alt="NO PHOTO"
                                    width="100" /></div>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>

                    <?php } ?>

                    <div class="formRow">



                        <div class="formRight">

                            <label>S??? th??? t???: </label>

                            <input type="text" class="tipS"
                                value="<?=isset($item['stt'])?$item['stt']:$func->checkNumb('stt',$com,$type)?>"
                                name="data[stt]" style="width:40px; text-align:center;"
                                onkeypress="return OnlyNumber(event)"
                                original-title="S??? th??? t??? c???a danh m???c, ch??? nh???p s???">

                        </div>

                        <div class="clear"></div>

                    </div>

                    <div class="formRow">

                        <div class="formRight">

                            <label class="stardust-checkbox">

                                Hi???n th???

                                <input class="stardust-checkbox__input"
                                    <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?>
                                    name="hienthi" type="checkbox" value="1" style="display:none">

                                <div class="stardust-checkbox__box"></div>

                            </label>

                        </div>

                    </div>

                </div>



                <?php if($table['seo']==true){ ?>

                <?php if(isset($table['seo'])&&$table['seo']==true){

                        $seoDB = $seo->getSeoDB($id,$com,'man'.$tbl,$type);

                    ?>

                <div class="widget mtop10">

                    <div class="formRow">

                        <div class="formRight">

                            <div class="box-seo">

                                <?php  foreach ($config['seo-lang'] as $k => $v){ ?>

                                <p
                                    style="font-size:18px;font-weight:normal;border-bottom:1px solid #ccc;padding-bottom:10px">

                                    Hi???n th??? k???t qu??? t??m ki???m google search</p>

                                <p style="font-size:14px;font-weight:normal;padding:10px 0px">

                                    <a href="<?=$https_config?><?=$item["tenkhongdau_$k"]?>" target="_blank"
                                        title="<?=$https_config?>"><span><?=$https_config?></span><span
                                            id="url_seo_<?=$k?>"><?=$item["tenkhongdau_$k"]?></span></a>

                                </p>

                                <h3 style="font-size: 20px;line-height: 1.3;color: #1a0dab;margin-bottom: 0px;font-weight:500"
                                    class="title_seo" id="title_seo">

                                    <?=($seoDB['title_'.$k]!='') ? $seoDB['title_'.$k] : '[SEO Onpage] l?? g??? H?????ng d???n t???i ??u SEO Onpage...' ?>

                                </h3>

                                <p style="padding-top:10px;font-size:14px;line-height: 1.57;word-wrap: break-word;color: #6a6a6a;margin-bottom: 0px;"
                                    class="description_seo" id="description_seo">

                                    <?=($seoDB['description_'.$k]!='') ? $seoDB['description_'.$k] : ' H?????ng d???n SEO onpage c??n b???n t???i ??u ????? trang web chu???n SEO l??n top Google nhanh v?? b???n v???ng, k??? thu???t t???i ??u SEO onpage ????n gi???n' ?>



                                </p>

                                <?php }?>

                            </div>

                        </div>

                    </div>

                </div>



                <div class="widget mtop10">

                    <div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />

                        <h6><?=_noidungseo?></h6>

                    </div>



                    <?php  foreach ($config['seo-lang'] as $k => $v){ ?>



                    <div class="formRow">

                        <label>Title [ <?=$v?> ]: </label>

                        <div class="formRight">

                            <input type="text" data-validation="required"
                                data-validation-error-msg="Kh??ng ???????c ????? tr???ng" value="<?=@$seoDB['title_'.$k]?>"
                                id="title" name="dataseo[title_<?=$k?>]" title="N???i dung th??? meta Title d??ng ????? SEO"
                                class="tipS input100" />

                        </div>

                        <div class="clear"></div>

                    </div>



                    <div class="formRow">

                        <label>Keywords [ <?=$v?> ]: </label>

                        <div class="formRight">

                            <input type="text" value="<?=@$seoDB['keywords_'.$k]?>" id="title"
                                name="dataseo[keywords_<?=$k?>]" title="T??? kh??a ch??nh cho danh m???c"
                                class="tipS input100" />

                        </div>

                        <div class="clear"></div>

                    </div>



                    <div class="formRow">

                        <label>Description [ <?=$v?> ]:</label>

                        <div class="formRight">

                            <textarea rows="4" data-validation="required"
                                data-validation-error-msg="Kh??ng ???????c ????? tr???ng" cols=""
                                title="N???i dung th??? meta Description d??ng ????? SEO" class="tipS input100"
                                name="dataseo[description_<?=$k?>]"
                                id="description"><?=@$seoDB['description_'.$k]?></textarea>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <div class="formRow">

                        <div class="formRight">

                            <input readonly="readonly" type="text"
                                style="width:45px; margin-top:10px; text-align:center;" name="des_char" id="des_char"
                                value="<?=@$item['des_char']?>" /> <?=_kytu?> <b>(T??? 160-300 k?? t???)</b>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>

                </div>

                <?php } ?>

                <?php } ?>

                <div class="clear"></div>

            </div>

        </div>



        <div class="formRow fixedBottom">

            <div class="formRight">

                <input type="hidden" name="id_attr" value="<?=$rowId['id']?>" />



                <div class="box-admin" style="display:flex; align-items:center;justify-content:flex-end">

                    <div class="box-action">

                        <button type="submit" class="btn btn-sm bg-gradient-primary text-white">

                            <i class="far fa-save mr-2"></i>L??u

                        </button>

                        <button type="submit" class="btn btn-sm bg-gradient-success" name="save-here"><i
                                class="far fa-save mr-2"></i>L??u t???i trang</button>

                        <button type="reset" class="btn btn-sm bg-gradient-secondary"><i
                                class="fas fa-redo mr-2"></i>L??m l???i</button>

                        <a class="btn btn-sm bg-gradient-danger text-white"
                            href="index.html?com=attribute&act=man<?php if($_GET['type']!='') echo'&type='. $_GET['type'];?><?php if($_GET['id_product']!='') echo'&id_product='. $_GET['id_product'];?>">

                            <i class="fas fa-sign-out-alt mr-2"></i>Tho??t

                        </a>

                    </div>

                </div>



            </div>

        </div>

        <div class="clear"></div>

</div>

</form>

</div>

<script type="text/javascript">
$(document).ready(function() {

    window.asd = $('.multiselect-size').SumoSelect({

        placeholder: 'Ch???n k??ch th?????c',

        csvDispCount: 3,

        captionFormat: '{0} Selected',

        floatWidth: 500,

        forceCustomRendering: false,

        triggerChangeCombined: true,

        selectAll: true,

        search: true,

        searchText: 'Search...',

        noMatch: 'No matches for "{0}"',

        prefix: '',

        locale: ['OK', 'Cancel', 'Select All'],

        up: 'false',

        showTitle: 'true',

    });

});
</script>

<script type="text/javascript">
$(document).ready(function() {

    window.asd = $('.multiselect-info').SumoSelect({

        placeholder: 'Ch???n nh?? cung ???ng',

        csvDispCount: 3,

        captionFormat: '{0} Selected',

        floatWidth: 500,

        forceCustomRendering: false,

        triggerChangeCombined: true,

        selectAll: true,

        search: true,

        searchText: 'Search...',

        noMatch: 'No matches for "{0}"',

        prefix: '',

        locale: ['OK', 'Cancel', 'Select All'],

        up: 'false',

        showTitle: 'true',

    });

});
</script>

<script>
$(document).ready(function() {

    $('#star-product').commentStar({

        countSelected:$('#rank').val(), 

        complete:function(vl){

            $('#rank').val(vl);

        }
        
    });

    $('.file_input').filer({

        limit: 1000,

        maxSize: null,

        extensions: ["jpg", "png", "jpeg", "JPG", "PNG", "JPEG", "Png"],

        changeInput: '<div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>K??o v?? th??? h??nh v??o ????y</h3> <span style="display:inline-block; margin: 15px 0">ho???c</span></div><a class="jFiler-input-choose-btn blue">Ch???n h??nh</a></div></div>',

        theme: "dragdropbox",

        showThumbs: true,

        addMore: true,

        allowDuplicates: false,

        clipBoardPaste: false,

        dragDrop: {

            dragEnter: null,

            dragLeave: null,

            drop: null,

            dragContainer: null

        },

        captions: {

            button: "Th??m h??nh",

            feedback: "Vui l??ng ch???n h??nh ???nh",

            feedback2: "Nh???ng h??nh ???? ???????c ch???n",

            drop: "K??o h??nh v??o ????y ????? upload",

            removeConfirmation: "B???n mu???n lo???i b??? h??nh ???nh n??y ?",

            errors: {

                filesLimit: "Ch??? ???????c upload m???i l???n {{fi-limit}} h??nh ???nh",

                filesType: "Ch??? h??? tr??? t???p tin l?? h??nh ???nh c?? ?????nh d???ng: {{fi-extensions}}",

                filesSize: "H??nh {{fi-name}} c?? k??ch th?????c qu?? l???n. Vui l??ng upload h??nh ???nh c?? k??ch th?????c t???i ??a {{fi-maxSize}} MB.",

                filesSizeAll: "Nh???ng h??nh ???nh b???n ch???n c?? k??ch th?????c qu?? l???n. Vui l??ng ch???n nh???ng h??nh ???nh c?? k??ch th?????c t???i ??a {{fi-maxSize}} MB."

            }

        },

        templates: {

            box: '<ul class="jFiler-item-list"></ul>',

            item: '<li class="jFiler-item">\
                <div class="jFiler-item-container">\
                    <div class="jFiler-item-inner">\
                        <div class="jFiler-item-thumb">\
                            <div class="jFiler-item-status"></div>\
                                <div class="jFiler-item-info">\
                                    <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <li><span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span></li>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\<input type="text" name="stthinh[]" class="stthinh" />\
                                </div>\
                            </div>\
                        </li>',

            itemAppend: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\<input type="text" name="stthinh[]" class="stthinh" />\
                                </div>\
                            </div>\
                        </li>',

            progressBar: '<div class="bar"></div>',

            itemAppendToEnd: true,

            removeConfirmation: true,

            _selectors: {

                list: '.jFiler-item-list',

                item: '.jFiler-item',

                progressBar: '.bar',

                remove: '.jFiler-item-trash-action',

            }

        },

        addMore: true

    });

});
</script>