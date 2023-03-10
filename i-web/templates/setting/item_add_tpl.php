<script>
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

});
</script>

<div class="control_frm">

    <div class="bc">

        <ul id="breadcrumbs" class="breadcrumbs">

            <li><a href="index.html?com=setting&act=capnhat"><span><?=_thietlaphethong?></span></a></li>

            <li class="current"><a href="#" onclick="return false;"><?=_cauhinhwebsite?></a></li>

        </ul>

        <div class="clear"></div>

    </div>

</div>



<form name="supplier" class="form" action="index.html?com=setting&act=save" method="post" enctype="multipart/form-data"
    autocomplete="off" accept-charset="utf-8">

    <div class="oneOne">

        <div class="widget mtop0">

            <div class="title chonngonngu" style="border-bottom: 0px solid transparent">

                <ul>

                    <?php  foreach ($config['lang'] as $k => $v){ ?>

                    <li><a href="<?=$k?>" class="<?= ($k == 'vi') ? 'active': '' ?> tipS" title="<?=$v?>"><img
                                src="./images/<?=$k?>.png" alt="" class="<?=$func->changeTitle($v)?>" /><?=$v?></a></li>

                    <?php } ?>

                </ul>

            </div>

        </div>

    </div>

    <div class="colLeft">

        <div class="widget mtop0">

            <div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />

                <h6><?=_thongtinchung?></h6>

            </div>

            <?php  foreach ($config['lang'] as $k => $v){ ?>

            <?php if($GLOBAL[$com]['tieude']==true) {?>

            <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">

                <label><?=_tieude?> [<?=$v?>]</label>

                <div class="formRight">

                    <input data-validation="required" data-validation-error-msg="T??n kh??ng ???????c ????? tr???ng" type="text"
                        name="data[name_<?=$k?>]" title="Nh???p t??n c??ng ty" id="name_<?=$k?>"
                        class="tipS validate[required]" value="<?=@$item['name_'.$k]?>" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>







            <?php if($GLOBAL[$com]['diachi']==true) {?>

            <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">

                <label><?=_diachi?> [<?=$v?>]</label>

                <div class="formRight">

                    <input 
                        type="text" name="data[address_<?=$k?>]" title="Nh???p ?????a ch???" id="address_<?=$k?>"
                        class="tipS validate[required]" value="<?=@$item['address_'.$k]?>" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['chaychu1']==true) {?>

            <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">

                <label>Ch???y ch??? 1 [<?=$v?>]</label>

                <div class="formRight">

                    <input type="text" name="data[scrolltext1_<?=$k?>]" title="Nh???p ch???y ch???" id="scrolltext1_<?=$k?>"
                        class="tipS validate[required]" value="<?=@$item['scrolltext1_'.$k]?>" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['chaychu2']==true) {?>

            <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">

                <label>Ch???y ch??? 2 [<?=$v?>]</label>

                <div class="formRight">

                    <input type="text" name="data[scrolltext2_<?=$k?>]" title="Nh???p ch???y ch???" id="scrolltext2_<?=$k?>"
                        class="tipS validate[required]" value="<?=@$item['scrolltext2_'.$k]?>" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['slogan']==true) {?>

            <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">

                <label>Slogan [<?=$v?>]</label>

                <div>

                    <input type="text" name="data[slogan_<?=$k?>]" title="Nh???p slogan" id="slogan_<?=$k?>"
                        class="tipS validate[required]" value="<?=@$item['slogan_'.$k]?>" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['timework']==true) {?>

            <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">

                <label><?=_timework?> [<?=$v?>]</label>

                <div class="formRight">

                    <input type="text" name="data[timework_<?=$k?>]" title="Nh???p th???i gian l??m vi???c"
                        id="timework_<?=$k?>" class="tipS validate[required]" value="<?=@$item['timework_'.$k]?>" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['copyright']==true) {?>

            <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">

                <label>Copyright [<?=$v?>]</label>

                <div class="formRight">

                    <textarea name="data[copyright_<?=$k?>]" title="Copyright" id="summernote"
                        class="tipS validate[required]"><?=@$item['copyright_'.$k]?></textarea>

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php } ?>

            <?php if($GLOBAL[$com]['email']==true) {?>

            <div class="formRow">

                <label><?=_email?></label>

                <div class="formRight">

                    <input  type="text"
                        value="<?=@$item['email']?>" name="data[email]" title="Nh???p ?????a ch??? email" class="tipS" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['chuky']==true) {?>

            <div class="formRow ">

                <label>Ch??? K??</label>

                <div class="formRight">

                    <input  type="text"
                        name="data[chuky]" title="Nh???p Ch??? K??" id="chuky" class="tipS"
                        value="<?=@$item['chuky']?>" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['hotline']==true) {?>

            <div class="formRow">

                <label>Hotline</label>

                <div class="formRight">

                    <input 
                        type="text" value="<?=@$item['hotline']?>" name="data[hotline]" title="Nh???p hotline"
                        class="tipS" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['dienthoai']==true) {?>

            <div class="formRow">

                <label><?=_dienthoai?></label>

                <div class="formRight">

                    <input 
                        type="text" value="<?=@$item['dienthoai']?>" name="data[dienthoai]" title="Nh???p s??? ??i???n tho???i"
                        class="tipS" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['zalo']==true) {?>

            <div class="formRow">

                <label><?=_sozalo?></label>

                <div class="formRight">

                    <input type="text" value="<?=@$item['sozalo']?>" name="data[sozalo]" title="Nh???p s??? zalo"
                        class="tipS" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['website']==true) {?>

            <div class="formRow">

                <label><?=_website?></label>

                <div class="formRight">

                    <input 
                        type="text" value="<?=@$item['website']?>" name="data[website]" title="Nh???p ?????a ch??? website"
                        class="tipS" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL['setting']['slider']==true) {?>

            <div class="formRow">

                <label>Ch???n slider</label>

                <div class="formRight">

                    <select name="data[slider_web]">

                        <option value="">Ch???n d???ng slider cho web</option>

                        <option value="1" <?php if($item['slider_web']==1) echo 'selected'; ?>>D???ng slider video

                        </option>

                        <option value="2" <?php if($item['slider_web']==2) echo 'selected'; ?>>D???ng slider h??nh ???nh

                        </option>

                    </select>

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL['setting']['links']==true) {?>

            <div class="formRow">

                <label>Link youtube</label>

                <div class="formRight">

                    <input type="text" value="<?=@$item['linksyoutube']?>" name="data[linksyoutube]"
                        title="Links youtube" class="tipS" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['faceid']==true) {?>

            <div class="formRow">

                <label>Facebook id</label>

                <div class="formRight">

                    <input type="text" value="<?=@$item['faceid']?>" name="data[faceid]" title="Nh???p faceid"
                        class="tipS" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['fanpage']==true) {?>

            <div class="formRow">

                <label>FanPage Facebook</label>

                <div class="formRight">

                    <input 
                        type="text" value="<?=@$item['facebook']?>" name="data[facebook]"
                        title="Nh???p link fanpage facebook" class="tipS" />

                </div>

                <div class="clear"></div>

            </div>

            <div class="formRow none">

                <label>FanPage Facebook 2</label>

                <div class="formRight">

                    <input type="text" value="<?=@$item['facebook2']?>" name="data[facebook2]"
                        title="Nh???p link fanpage facebook 2" class="tipS" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['message']==true) {?>

            <div class="formRow">

                <label><?=_linkmessage?></label>

                <div class="formRight">

                    <input type="text" value="<?=@$item['linkmessage']?>" name="data[linkmessage]"
                        title="Nh???p s??? ??i???n tho???i" class="tipS" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['postalcode']==true) {?>

            <div class="formRow">

                <label>M?? khu v???c</label>

                <div class="formRight">

                    <input type="text" value="<?=@$item['postalcode']?>" name="data[postalcode]" title="Nh???p postalcode"
                        class="tipS" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['city']==true) {?>

            <div class="formRow">

                <label>Th??nh ph???</label>

                <div class="formRight">

                    <input type="text" value="<?=@$item['city']?>" name="data[city]" title="Nh???p th??nh ph???"
                        class="tipS" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['district']==true) {?>

            <div class="formRow">

                <label>Qu???n huy???n</label>

                <div class="formRight">

                    <input type="text" value="<?=@$item['district']?>" name="data[district]" title="Nh???p s??? qu???n"
                        class="tipS" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['toado']==true) {?>

            <div class="formRow">

                <label><?=_toadoweb?></label>

                <div class="formRight">

                    <input  type="text"
                        name="data[map_marker]" title="Nh???ng t???a b???n ????? v??o ????y" class="tipS"
                        value="<?=@$item['map_marker']?>">

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['iframe1']==true) {?>

            <div class="formRow">

                <label>Nh??ng b???n ????? map <strong><a href="https://www.google.com/maps" target="_blank"
                            title="L???y m?? nh??ng Google Map">( <i class="fas fa-map-marker-alt" aria-hidden="true"></i>

                            <?=_laymanhung?> )</a></strong></a></label>

                <div class="formRight">

                    <textarea  rows="8"
                        cols="" title="Nh???ng ??o???n code nh??ng b???n ????? v??o ????y" class="tipS"
                        name="data[iframe_map1]"><?=@$item['iframe_map1']?></textarea>

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['iframe']==true) {?>

            <div class="formRow">

                <label><?=_nhungiframe?> <strong><a href="https://www.google.com/maps" target="_blank"
                            title="L???y m?? nh??ng Google Map">( <i class="fas fa-map-marker-alt" aria-hidden="true"></i>

                            <?=_laymanhung?> )</a></strong> | <a href="index.html?com=map&act=man"
                        title="L???y m?? nh??ng Google Map"><?=_hethongcuahang?></a></label>

                <div class="formRight">

                    <textarea  rows="8"
                        cols="" title="Nh???ng ??o???n code nh??ng b???n ????? v??o ????y" class="tipS"
                        name="data[iframe_map]"><?=@$item['iframe_map']?></textarea>

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

        </div>

        <div class="widget mtop10">

            <div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />

                <h6>Ch??n code th??m</h6>

            </div>

            <div class="formRow">

                <label><?=_codehead?> <strong><a
                            href="https://www.google.com/webmasters/verification/verification?hl=en&tid=alternate&siteUrl=<?=$https_config?>"
                            target="_blank" title="L???y m?? nh??ng Google Map">( M?? x??c minh google )</a></strong></label>

                <div class="formRight">

                    <textarea rows="8" cols="" title="Nh???ng ??o???n code kh??ch h??ng mu???n ch??n tr??n header c???a website"
                        class="tipS" name="data[analytics]"><?=@$item['analytics']?></textarea>

                </div>

                <div class="clear"></div>

            </div>



            <div class="formRow">

                <label><?=_codebody?> :</label>

                <div class="formRight">

                    <textarea rows="8" cols="" title="Nh???ng ??o???n code kh??ch h??ng mu???n ch??n tr??n footer c???a website"
                        class="tipS" name="data[vchat]"><?=@$item['vchat']?></textarea>

                </div>

                <div class="clear"></div>

            </div>

        </div>

    </div>

    <div class="colRight">

        <div class="widget mtop0">

            <div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />

                <h6><?=_thuoctinhcauhinh?></h6>

            </div>

            <style>
            .flex-checkbox {

                display: flex;

                align-items: center;

                justify-content: center;

                margin-right: 10px !important;

                padding: 0 !important;

                flex-wrap: wrap;

            }

            .flex-checkbox span {

                display: inline-block;

                margin-left: 5px;

            }

            .mg-label {
                margin-bottom: 10px
            }
            </style>

            <?php 

                $arr_seo=explode(',',$item['seo']);

            ?>

            <div class="formRow">

                <label>C???u tr??c seo ( hi???n th??? th??? <b>HEADING</b> ??? v??? tr?? ???????c ch???n )</label>

                <div class="formRight">

                    <?php foreach($config['seo-debug'] as $key => $value){?>

                    <label class="stardust-checkbox checker flex-checkbox mg-label">

                        <input class="stardust-checkbox__input" <?php if(in_array($key,$arr_seo)) echo 'checked';?>
                            name="seo[]" id="check<?=$key?>" type="checkbox" value="<?=$key?>" style="display:none">

                        <div class="stardust-checkbox__box"></div>

                        <span><?=$value?></span>

                    </label>

                    <?php }?>

                </div>

                <div class="clear"></div>

            </div>

            <?php if($GLOBAL[$com]['background']==true) {?>

            <style>
            .canvas-color-picker .buttons button {

                color: #000;

            }



            .form-mausac input {

                color: <?=$item['mausac']?> !important;

            }
            </style>

            <div class="formRow">

                <label>Ch???n m??u background</label>

                <div class="formRight form-mausac">

                    <input type="text" name="data[color_page]" value="<?=@$item['color_page']?>" class="cp3" />

                </div>

                <div class="clear"></div>

            </div>

            <div class="formRow">

                <label>Ch???n m??u text</label>

                <div class="formRight form-mausac">

                    <input type="text" name="data[color_text]" value="<?=@$item['color_text']?>" class="cp3" />

                </div>

                <div class="clear"></div>

            </div>

            <div class="formRow">

                <label>Ch???n ph???</label>

                <div class="formRight form-mausac">

                    <input type="text" name="data[color_secondary]" value="<?=@$item['color_secondary']?>" class="cp3" />

                </div>

                <div class="clear"></div>

            </div>

            

            <?php } ?>

            <?php if($GLOBAL[$com]['page_in']==true) {?>

            <div class="formRow">

                <label>Ph??n trang trang ch???</label>

                <div class="formRight">

                    <input 
                        type="text" name="data[page_in]" title="Nh???p s??? item s???n ph???m" id="page_in" class="tipS"
                        value="<?=@$item['page_in']?>" />

                </div>

                <div class="clear"></div>

            </div>

            <?php }?>

            <?php if($GLOBAL[$com]['page_sp']==true) {?>

            <div class="formRow">

                <label><?=_soluongphantrang?></label>

                <div class="formRight">

                    <input 
                        type="text" name="data[page_sp]" title="Nh???p s??? item s???n ph???m" id="page_sp" class="tipS"
                        value="<?=@$item['page_sp']?>" />

                </div>

                <div class="clear"></div>

            </div>

            <?php }?>

            <?php if($GLOBAL[$com]['limit_sp']==true) {?>

            <div class="formRow">

                <label>S??? l?????ng s???n ph???m trang ch???</label>

                <div class="formRight">

                    <input 
                        type="text" name="data[limit_sp]" title="Nh???p s??? s???n ph???m ??? trang ch???" id="limit_sp" class="tipS"
                        value="<?=@$item['limit_sp']?>" />

                </div>

                <div class="clear"></div>

            </div>

            <?php }?>

            <?php if($GLOBAL[$com]['page_ne']==true) {?>

            <div class="formRow">

                <label>Ph??n trang b??i vi???t</label>

                <div class="formRight">

                    <input 
                        type="text" name="data[page_ne]" title="Nh???p s??? item s???n ph???m" id="page_ne" class="tipS"
                        value="<?=@$item['page_ne']?>" />

                </div>

                <div class="clear"></div>

            </div>

            <?php }?>

            <?php if($GLOBAL[$com]['page_video']==true) {?>

            <div class="formRow">

                <label>Ph??n trang video:</label>

                <div class="formRight">

                    <input 
                        type="text" name="data[page_video]" title="Nh???p s??? item s???n ph???m" id="page_video" class="tipS"
                        value="<?=@$item['page_video']?>" />

                </div>

                <div class="clear"></div>

            </div>

            <?php }?>

            <?php if($GLOBAL[$com]['page_album']==true) {?>

            <div class="formRow">

                <label>Ph??n trang th?? vi???n ???nh:</label>

                <div class="formRight">

                    <input 
                        type="text" name="data[page_album]" title="Nh???p s??? item s???n ph???m" id="page_album" class="tipS"
                        value="<?=@$item['page_album']?>" />

                </div>

                <div class="clear"></div>

            </div>

            <?php }?>

            <?php if($GLOBAL[$com]['page_service']==true) {?>

            <div class="formRow">

                <label>Ph??n trang d???ch v???:</label>

                <div class="formRight">

                    <input 
                        type="text" name="data[page_service]" title="Nh???p s??? item s???n ph???m" id="page_service" class="tipS"
                        value="<?=@$item['page_service']?>" />

                </div>

                <div class="clear"></div>

            </div>

            <?php }?>



            <?php if($GLOBAL[$com]['counter']==true) {?>

            <div class="formRow">

                <label>Th???i gian b??n h??ng</label>

                <div class="formRight">

                    <input type="text" name="data[counter]" value="<?=@$item['counter']?>" class="date-picker" />

                </div>

                <div class="clear"></div>

            </div>

            <?php }?>

            <?php if($GLOBAL[$com]['nonecopy']==true) {?>

            <div class="formRow">

                <label for="nonecopy"
                    style="float: left; display: inline-block; width: auto !important; margin-right: 10px;">Ch???ng

                    copy</label>

                <input type="checkbox" name="block_copy" style="float: left;" id="nonecopy" value="1"
                    <?=(!isset($item['block_copy']) || $item['block_copy']==1)?'checked="checked"':''?> />

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['block']==true) {?>

            <div class="formRow">

                <label for="check1"
                    style="float: left; display: inline-block; width: auto !important; margin-right: 10px;">Kh??a

                    website</label>

                <input type="checkbox" name="disable_web" style="float: left;" id="check1" value="1"
                    <?=(!isset($item['disable_web']) || $item['disable_web']==1)?'checked="checked"':''?> />

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['phivanchuyen']==true) {?>

            <div class="formRow">

                <label>Ph?? v???n chuy???n</label>

                <div class="formRight">

                    <input type="text" name="data[phivanchuyen]" title="Ph?? v???n chuy???n" id="phivanchuyen"
                        class="conso tipS" value="<?=@$item['phivanchuyen']?>" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['changedola']==true) {?>

            <div class="formRow">

                <label><?=_chuyendoitiente?> (<span style="color:red"><?=_nhapgiatritheogiavietnam?></span>)</label>

                <div class="formRight">

                    <div style="margin-top:10px">

                        <label>USA(DOLA)</label>

                        <input type="text" name="data[dola]" title="Chuy???n ?????i ti???n t???" id="dola" class="conso tipS"
                            value="<?=@$item['dola']?>" />

                    </div>

                    <div style="margin-top:10px">

                        <label><?=_yennhat?>(JPY) (<span style="color:red"><?=_vidu?></span>)</label>

                        <input type="text" name="data[yen]" title="Chuy???n ?????i ti???n t???" id="yen" class="conso tipS"
                            value="<?=@$item['yen']?>" />

                    </div>



                </div>

                <div class="clear"></div>

            </div>

            <?php }?>

            <div class="formRow">

                <label>Favicon :</label>

                <div class="formRight">

                    <input type="file" id="file" name="file1" />

                    <img src="./images/question-button.png" alt="Upload h??nh" class="icon_question tipS"
                        original-title="T???i h??nh ???nh (???nh JPEG, GIF , JPG , PNG)">

                </div>

                <div class="clear"></div>

            </div>

            <div class="formRow">

                <label>Favicon :</label>

                <div class="formRight">

                    <img src="<?=_upload_hinhanh.@$item['bgtop']?>" alt="Upload h??nh" class="icon_question tipS"
                        width="50">

                </div>

                <div class="clear"></div>

            </div>

            <?php if($GLOBAL[$com]['videofile']==true) {?>

            <div class="formRow">

                <label>Upload video :</label>

                <div class="formRight">

                    <input type="file" id="file" name="file" />

                    <img src="./images/question-button.png" alt="Upload h??nh" class="icon_question tipS"
                        original-title="T???i h??nh ???nh (???nh JPEG, GIF , JPG , PNG)">

                </div>

                <div class="clear"></div>

            </div>

            <div class="formRow">

                <label>T???p video hi???n t???i</label>

                <div class="formRight">

                    <div class="mt10 change-photo">

                        <?php $pathImg = _upload_hinhanh.$item["photo"]; ?>

                            <video width="300" height="300" autoplay muted loop controls style="width: 300px;object-fit: cover;height: 300px;aspect-ratio: 16/9;">

                            <source src="<?=$pathImg?>" type="video/mp4">

                        </video>

                        <span style="color:blue;display:block;font-size:16px;" class="mt20"><span style="color:#000;">T??n t???p video: </span> <?=@$item["photo"]?></span>

                    </div>

                </div>

                <div class="clear"></div>

            </div>

            <?php }?>

        </div>
        <?php if($GLOBAL[$com]['watermark']==true) {?>
        <div class="formRow">
            <label>H??nh ????ng d???u :</label>
            <div class="formRight">
                <input type="file" id="file" name="file2" />
                <img src="./images/question-button.png" alt="Upload h??nh" class="icon_question tipS"
                    original-title="T???i h??nh ???nh (???nh JPEG, GIF , JPG , PNG)">
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>H??nh ????ng d???u : <span style="color:#f00">(max-width:216px-max-height:216px)</span></label>
            <div class="formRight" style="background: #333333;">
                <img src="<?=_upload_hinhanh.@$item['bgcontent']?>" alt="Upload h??nh" class="icon_question tipS"
                    width="100">
            </div>
            <div class="clear"></div>
        </div>
        <?php } ?>

        <?php if($GLOBAL[$com]['tag']==true) {?>

        <div class="formRow">

            <label>Tag:</label>

            <div class="formRight">

                <input id="tags_1" type="text" name="data[tags][]" class="tags" value="<?=@$item['tags']?>" />

            </div>

            <div class="clear"></div>

        </div>

        <?php } ?>

        <?php if($GLOBAL[$com]['vat']==true) {?>

        <div class="widget mtop10">

            <div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />

                <h6>Th??ng tin xu???t GTGT</h6>

            </div>



            <?php if($GLOBAL[$com]['tax_code']==true) {?>

            <div class="formRow">

                <label>M?? s??? thu???</label>

                <div class="formRight">

                    <input type="text" value="<?=@$item['tax_code']?>" name="data[tax_code]" title="Nh???p tax code"
                        class="tipS" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['blank']==true) {?>

            <div class="formRow">

                <label>S??? t??i kho???n</label>

                <div class="formRight">

                    <input type="text" value="<?=@$item['blank']?>" name="data[blank]" title="Nh???p tax code"
                        class="tipS" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['denominator']==true) {?>

            <div class="formRow">

                <label>M???u s???</label>

                <div class="formRight">

                    <input type="text" value="<?=@$item['denominator']?>" name="data[denominator]" title="Nh???p tax code"
                        class="tipS" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['symbol']==true) {?>

            <div class="formRow">

                <label>K?? hi???u</label>

                <div class="formRight">

                    <input type="text" value="<?=@$item['symbol']?>" name="data[symbol]" title="Nh???p tax code"
                        class="tipS" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['postalcode']==true) {?>

            <div class="formRow">

                <label>M?? khu v???c</label>

                <div class="formRight">

                    <input type="text" value="<?=@$item['postalcode']?>" name="data[postalcode]" title="Nh???p postalcode"
                        class="tipS" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['city']==true) {?>

            <div class="formRow">

                <label>Th??nh ph???</label>

                <div class="formRight">

                    <input type="text" value="<?=@$item['city']?>" name="data[city]" title="Nh???p th??nh ph???"
                        class="tipS" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

            <?php if($GLOBAL[$com]['district']==true) {?>

            <div class="formRow">

                <label>Qu???n huy???n</label>

                <div class="formRight">

                    <input type="text" value="<?=@$item['district']?>" name="data[district]" title="Nh???p s??? qu???n"
                        class="tipS" />

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>



        </div>

        <?php } ?>

        <?php if(isset($GLOBAL['setting']['seo'])&&$GLOBAL['setting']['seo']==true){

            $seoDB = $seo->getSeoDB(0,'setting','capnhat','');

        ?>

        <div class="widget mtop10">

            <div class="formRow">

                <div class="formRight">

                    <div class="box-seo">



                        <p style="font-size:18px;font-weight:normal;border-bottom:1px solid #ccc;padding-bottom:10px">

                            Hi???n th??? k???t qu??? t??m ki???m google search</p>

                        <h3 style="padding-top:20px;font-size: 20px;line-height: 1.3;color: #1a0dab;margin-bottom: 0px;font-weight:500"
                            class="title_seo" id="title_seo">

                            <?=($seoDB['title_'.$k]!='') ? $seoDB['title_'.$k] : '[SEO Onpage] l?? g??? H?????ng d???n t???i ??u SEO Onpage...' ?>

                        </h3>

                        <p style="padding-top:10px;font-size:14px;line-height: 1.57;word-wrap: break-word;color: #6a6a6a;margin-bottom: 0px;"
                            class="description_seo" id="description_seo">

                            <?=($seoDB['description_'.$k]!='') ? $seoDB['description_'.$k] : ' H?????ng d???n SEO onpage c??n b???n t???i ??u ????? trang web chu???n SEO l??n top Google nhanh v?? b???n v???ng, k??? thu???t t???i ??u SEO onpage ????n gi???n' ?>



                        </p>

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

                    <input data-validation="required" data-validation-error-msg="Title trang kh??ng ???????c ????? tr???ng"
                        type="text" value="<?=@$seoDB['title_'.$k]?>" id="title" name="dataseo[title_<?=$k?>]"
                        title="N???i dung th??? meta Title d??ng ????? SEO" class="tipS input100" />

                </div>

                <div class="clear"></div>

            </div>



            <div class="formRow">

                <label>Keywords [ <?=$v?> ]: </label>

                <div class="formRight">

                    <input type="text" value="<?=@$seoDB['keywords_'.$k]?>" id="keywords"
                        name="dataseo[keywords_<?=$k?>]" title="T??? kh??a ch??nh cho danh m???c" class="tipS input100" />

                </div>

                <div class="clear"></div>

            </div>



            <div class="formRow">

                <label>Description [ <?=$v?> ]:</label>

                <div class="formRight">

                    <textarea data-validation="required"
                        data-validation-error-msg="Description trang kh??ng ???????c ????? tr???ng" rows="4" cols=""
                        title="N???i dung th??? meta Description d??ng ????? SEO" class="tipS input100"
                        name="dataseo[description_<?=$k?>]" id="description"><?=@$seoDB['description_'.$k]?></textarea>

                </div>

                <div class="clear"></div>

            </div>

            <div class="formRow">

                <div class="formRight">

                    <input readonly="readonly" type="text" style="width:45px; margin-top:10px; text-align:center;"
                        name="des_char" id="des_char" value="<?=@$item['des_char']?>" /> <?=_kytu?> <b>(T??? 160-300 k??
                        t???)</b>

                </div>

                <div class="clear"></div>

            </div>

            <?php } ?>

        </div>

        <?php } ?>



    </div>

    <div class="formRow fixedBottom sidebar-bunker" >

        <div class="formRight">

            <input type="hidden" name="data[id]" id="id_this_setting" value="<?=@$item['id']?>" />

            <div class="box-admin" style="display:flex; align-items:center;justify-content:flex-end">

                <div class="box-action">

                    <button type="submit" class="btn btn-sm bg-gradient-primary text-white submit-check">

                        <i class="far fa-save mr-2"></i>L??u

                    </button>

                    <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>L??m

                        l???i</button>

                    <a class="btn btn-sm bg-gradient-danger text-white" href="index.html">

                        <i class="fas fa-sign-out-alt mr-2"></i>Tho??t

                    </a>

                </div>

            </div>

        </div>

        <div class="clear"></div>

    </div>

</form>