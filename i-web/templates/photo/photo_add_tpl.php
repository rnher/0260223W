<script type="text/javascript">
function TreeFilterChanged2() {
    $('#validate').submit();
}
$(document).ready(function() {
    $('.chonngonngu li a').click(function(event) {
        var lang = $(this).attr('href');
        $('.chonngonngu li a').removeClass('active');
        $(this).addClass('active');
        $('.lang_hidden').removeClass('active');
        $('.lang_' + lang).addClass('active');
        return false;
    });
});
</script>
<div class="control_frm">
    <div class="bc">
        <ul id="breadcrumbs" class="breadcrumbs">
            <li><a
                    href="index.html?com=photo&act=man<?php if($_GET['type']!='') echo'&type='. $_GET['type'];?><?php if($_GET['page']!='') echo'&page='. $_GET['page'];?>"><span><?=$GLOBAL[$com][$type]['title']?></span></a>
            </li>
            <li class="current"><a href="#" onclick="return false;"><?=_them?>
                    <?=$GLOBAL[$com][$type]['title_main']?></a></li>
        </ul>
        <div class="clear"></div>
    </div>
</div>
<form name="supplier" class="form form-validate"
    action="index.html?com=photo&act=save<?php if($_GET['type']!='') echo'&type='. $_GET['type'];?><?php if($_GET['page']!='') echo'&page='. $_GET['page'];?>"
    method="post" enctype="multipart/form-data" autocomplete="off" accept-charset="utf-8">
    <div class="mtop0">
        <div class="oneOne">
            <div class="widget mtop0">
                <div class="title chonngonngu" style="border-bottom: 0px solid transparent">
                    <ul>
                        <?php  foreach ($config['lang'] as $k => $v){ ?>
                        <li><a href="<?=$k?>" class="<?= ($k == 'vi') ? 'active': '' ?> tipS" title="<?=$v?>"><img
                                    src="./images/<?=$k?>.png" alt="" class="<?=$func->changeTitle($v)?>" /><?=$v?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="oneOne">
            <div class="widget mtop0">
                <?php  foreach ($config['lang'] as $k => $v){ ?>
                <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">
                    <label><?=_tieude?> [<?=$v?>]</label>
                    <div class="formRight">
                        <input type="text" name="data[ten_<?=$k?>]" title="Nh???p t??n danh m???c" id="ten_<?=$k?>"
                            class="tipS validate[required]" value="<?=@$item['ten_'.$k]?>" />
                    </div>
                    <div class="clear"></div>
                </div>
                <?php if($GLOBAL[$com][$type]['img']==true){ ?>
                <div class="formRow lang_hidden lang_<?=$k?>  <?= ($k == 'vi') ? 'active': '' ?>">
                    <label><?=_uploadhinhanh?>:</label>
                    <div class="formRight">
                        <input data-validation="required"
                             data-validation-allowing="jpg, png" 
                             data-validation-max-size="300kb" 
                             data-validation-error-msg-required="B???n ch??a ch???n file" type="file" id="file_<?=$k?>" name="file_<?=$k?>" />
                        <img src="./images/question-button.png" alt="Upload h??nh" class="icon_question tipS"
                            original-title="T???i h??nh ???nh (???nh JPEG, GIF , JPG , PNG)">
                        <br />
                        <br />
                        <span style="display: inline-block; line-height: 30px;color:#CCC;">
                            Width: <?=$GLOBAL[$com][$type]['img-width']*$GLOBAL[$com][$type]['img-ratio']?>px - Height:
                            <?=$GLOBAL[$com][$type]['img-height']*$GLOBAL[$com][$type]['img-ratio']?>px
                        </span>
                        <?php if($_GET["type"]=='catalogy'){?>
                            <span style="color:#f00">(N???u ch???n slider danh m???c chi???u cao v?? chi???u r???ng ????? auto)</span>
                        <?php }?>
                    </div>
                    <div class="clear"></div>
                </div>
                <?php } ?>
                <?php } ?>
                <?php if($GLOBAL[$com][$type]['numb']==true){ ?>
                <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">
                    <label><?= _number ?></label>
                    <div class="formRight">
                        <input type="text" data-validation="required" data-validation-error-msg="S??? kh??ng ???????c b??? tr???ng" name="data[number]" title="Nh???p t??n danh m???c" id="number"
                            class="conso tipS validate[required]" value="<?=@$item['number']?>" />
                    </div>
                    <div class="clear"></div>
                </div>
                <?php }?>
                <?php if($GLOBAL[$com][$type]['linhvuc']==true){ ?>
                <div class="formRow">
                    <label>L??nh v???c:</label>
                    <div class="formRight">
                        <input  type="text" id="code_pro" name="data[linh_vuc]" value=""
                            title="Nh???p link li??n k???t cho h??nh ???nh" class="tipS" />
                    </div>
                    <div class="clear"></div>
                </div>
                <?php } ?>
                <?php if($GLOBAL[$com][$type]['nam']==true){ ?>
                <div class="formRow">
                    <label>N??m:</label>
                    <div class="formRight">
                        <input type="text" id="code_pro" name="data[nam]" value=""
                            title="Nh???p link li??n k???t cho h??nh ???nh" class="tipS" />
                    </div>
                    <div class="clear"></div>
                </div>
                <?php } ?>
                <?php if($GLOBAL[$com][$type]['phone']==true){ ?>
                <div class="formRow">
                    <label>??i???n tho???i:</label>
                    <div class="formRight">
                        <input data-validation="required" data-validation-error-msg="??i???n tho???i kh??ng ???????c ????? tr???ng" type="text" id="code_pro" name="data[phone]" value=""
                            title="Nh???p s??? ??i???n tho???i" class="tipS" />
                    </div>
                    <div class="clear"></div>
                </div>
                <?php } ?>
                <?php if($GLOBAL[$com][$type]['link']==true){ ?>
                <div class="formRow">
                    <label>N??t li??n h??? 0(???n) 1(hi???n): </label>
                    <div class="formRight">
                        <input type="text" id="code_pro" name="data[link]" value=""
                            title="Nh???p 0 ho???c 1" class="tipS" />
                    </div>
                    <div class="clear"></div>
                </div>
                <?php } ?>

                <?php  foreach ($config['lang'] as $k => $v){ ?>
                <?php if($GLOBAL[$com][$type]['mota']==true){ ?>
                <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">
                    <label>M?? t??? [<?=$v?>]</label>
                    <div class="ck_editor">
                        <textarea title="Nh???p m?? t??? [<?=$v?>]. " data-height="400" id="mota_<?=$k?>"
                            <?=($GLOBAL[$com][$type]['mota-ckeditor']==true) ? 'class="ck_editors"':'rows="8"' ?>
                            name="data[mota_<?=$k?>]"><?=@$item['mota_'.$k]?></textarea>
                    </div>
                    <div class="clear"></div>
                </div>
                <?php } ?>
                <?php } ?>

                <div class="formRow">
                    <div class="formRight">
                        <label>S??? th??? t???: </label>
                        <input type="text" class="tipS" value="<?=isset($item['stt'])?$item['stt']:$func->checkNumb('stt',$com,$type)?>" name="data[stt]"
                            style="width:40px; text-align:center;" onkeypress="return OnlyNumber(event)"
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
        </div>
    </div>
    <div class="formRow fixedBottom sidebar-bunker">
        <div class="formRight">
            <div class="box-admin" style="display:flex; align-items:center;justify-content:flex-end">
                <div class="box-action">
                    <button type="submit" class="btn btn-sm bg-gradient-primary text-white submit-check">
                        <i class="far fa-save mr-2"></i>L??u
                    </button>
                     <button type="submit" class="btn btn-sm bg-gradient-success" name="save-here"><i class="far fa-save mr-2"></i>L??u t???i trang</button>
                    <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>L??m
                        l???i</button>
                    <a class="btn btn-sm bg-gradient-danger text-white"
                        href="index.html?com=photo&act=man<?php if($_GET['type']!='') echo'&type='. $_GET['type'];?><?php if($_GET['page']!='') echo'&page='. $_GET['page'];?>">
                        <i class="fas fa-sign-out-alt mr-2"></i>Tho??t
                    </a>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>

</form>