<link href="plugin/sumoselect/sumoselect.css" rel="stylesheet" />

<script src="plugin/sumoselect/jquery.sumoselect.min.js"></script>

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

            success: function(result) {}

        });

    });



    $('.delete_images').click(function() {

        if (confirm('B???n c?? mu???n x??a h??nh n??y ko ? ')) {

            var id = $(this).attr('title');

            var table = 'baiviet_photo';

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
                        href="index.html?com=baiviet&act=add<?php if($_GET['type']!='') echo'&type='. $_GET['type'];?><?php if($_GET['page']!='') echo'&page='. $_GET['page'];?>"><span><?=$table['title']?></span></a>

                </li>

                <li class="current"><a href="#" onclick="return false;"><?=($_GET['act']=='edit') ? 'S???a':'Th??m'?></a>

                </li>

            </ul>

            <div class="clear"></div>

        </div>

    </div>



    <form name="supplier" class="form"
        action="index.html?com=baiviet&act=<?=($_GET["act"]=='copy') ? 'save_copy' : 'save'?><?php if($_GET['id_copy']!='') echo'&id_copy='. $_GET['id_copy'];?><?php if($_GET['id']!='') echo'&id='. $_GET['id'];?><?php if($_GET['id_list']!='') echo'&id_list='. $_GET['id_list'];?><?php if($_GET['id_cat']!='') echo'&id_cat='. $_GET['id_cat'];?><?php if($_GET['id_item']!='') echo'&id_item='. $_GET['id_item'];?><?php if($_GET['id_sub']!='') echo'&id_sub='. $_GET['id_sub'];?><?php if($_GET['id_product']!='') echo'&id_product='. $_GET['id_product'];?><?php if($_GET['type']!='') echo'&type='. $_GET['type'];?><?php if($_GET['page']!='') echo'&page='. $_GET['page'];?>"
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

                    <?php if($table['numb']==true){ ?>

                    <div class="formRow">

                        <label>Con s???</label>

                        <div class="formRight">

                            <input type="text" name="data[numb]" title="Nh???p con s???" id="numb" class="tipS"
                                value="<?=@$item['numb']?>" />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>

                    <?php if($table['alias']==true){ ?>

                    <?php  foreach ($config['lang'] as $k => $v){ ?>

                    <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">

                        <label class="d-block">[<?=$v?>] ???????ng d???n hi???n th??? (B???n c?? th??? thay ?????i ???????ng d???n) :</label>

                        <div class="formRight">

                            <div class="box-alias"
                                style="position: relative;display: -ms-flexbox;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;-ms-flex-align: stretch;align-items: stretch;width: 100%;">

                                <div class="alias-text-disabled">

                                    <b><?=$https_config?><?=@$_GET['type']?>/</b>

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
                    <?php if($table['link_cano']==true){ ?>
                    <?php  foreach ($config['lang'] as $k => $v){ ?>

                    <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">

                        <label>Link canonical [<?=$v?>]</label>

                        <div class="formRight">

                            <input type="text" name="data[cano_<?=$k?>]" title="Nh???p link canonical" id="cano_<?=$k?>"
                                class="tipS" value="<?=@$item['cano_'.$k]?>" />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php }?>
                    <?php }?>

                    
                    <?php if($table['link_direct']==true){ ?>

                    <div class="formRow lang_hidden active">

                        <label>N??t xem th??m 0(???n) 1(hi???n)</label>

                        <div class="formRight">

                            <input type="text" name="data[link_direct]" title="Nh???p 0 ho???c 1" id="link_direct"
                                class="tipS" value="<?=@$item["link_direct"]?>" />

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

                    <?php if($table['intro']==true){ ?>

<div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">

    <label>Gi???i thi???u d???ch v??? [<?=$v?>]</label>

    <div class="ck_editor">

        <textarea title="Nh???p gi???i thi???u d???ch v??? [<?=$v?>]. " data-height="400" id="intro_<?=$k?>"
            <?=($table['intro-ckeditor']==true) ? 'class="ck_editors"':'rows="8"' ?>
            name="data[intro_<?=$k?>]"><?=@$item['intro_'.$k]?></textarea>

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

                    <?php if($table['hinhanhvideo']==true){ ?>

                    <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">

                        <label>H??nh ???nh video [<?=$v?>]</label>

                        <div class="ck_editor">

                            <textarea title="Nh???p m?? t??? [<?=$v?>]. " data-height="400" id="hinhanhvideo_<?=$k?>"
                                <?=($table['hinhanhvideo-ckeditor']==true) ? 'class="ck_editors"':'rows="8"' ?>
                                name="data[hinhanhvideo_<?=$k?>]"><?=@$item['hinhanhvideo_'.$k]?></textarea>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>

                    <?php if($table['mota-baohanh']==true){ ?>

                    <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">

                        <label>B???o h??nh [<?=$v?>]</label>

                        <div class="ck_editor">

                            <textarea title="Nh???p m?? t??? b???o h??nh [<?=$v?>]. " data-height="400" id="baohanh_<?=$k?>"
                                <?=($table['mota-baohanh-ckeditor']==true) ? 'class="ck_editors"':'rows="8"' ?>
                                name="data[baohanh_<?=$k?>]"><?=@$item['baohanh_'.$k]?></textarea>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>

                    <?php if($table['huongdansudung']==true){ ?>

                    <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">

                        <label>H?????ng d???n s??? d???ng [<?=$v?>]</label>

                        <div class="ck_editor">

                            <textarea title="Nh???p h?????ng d???n s??? d???ng [<?=$v?>]. " data-height="400"
                                id="huongdansudung_<?=$k?>"
                                <?=($table['huongdansudung-ckeditor']==true) ? 'class="ck_editors"':'rows="8"' ?>
                                name="data[huongdansudung_<?=$k?>]"><?=@$item['huongdansudung_'.$k]?></textarea>

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

                    <?php if($table['tacgia']==true){
                        
                        $row_tacgia = $db->rawQuery("select id,ten_$lang as ten from #_baiviet where hienthi=1 and type=? order by stt asc",array('tac-gia'));
                        
                        ?>

                    <div class="formRow">

                        <label>T??c gi???</label>

                        <div class="formRight">

                            <select name="data[id_tacgia]" id="id_tacgia" class="main_select">

                                <option value="">Ch???n t??c gi???</option>

                                <?php foreach($row_tacgia as $key => $value){ ?>

                                <option <?php if($item["id_tacgia"]==$value["id"]){echo "selected";}else{'';} ?>
                                    value="<?=$value["id"]?>"><?=$value["ten"]?></option>

                                <?php }?>

                            </select>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php }?>

                    <?php if($table['index_robots']==true){

                    $robots_array = [
                        "noindex,nofollow",
                        "index,follow"
                    ];

                    ?>

                    <div class="formRow">

                        <label>T??y ch???n index</label>

                        <div class="formRight">

                            <select name="data[index_robots]" id="index_robots" class="main_select">

                                <option value="">Ch???n t??y ch???n</option>

                                <?php foreach($robots_array as $key => $value){ ?>

                                <option <?php if($item["index_robots"]==$value){echo "selected";}else{'';} ?>
                                    value="<?=$value?>"><?=$value?></option>

                                <?php }?>

                            </select>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php }?>

                    <?php if($table['link_facebook']){?>

                    <div class="formRow">

                        <label>Link facebook</label>

                        <div class="formRight">

                            <input type="text" data-validation="required"
                                data-validation-error-msg="Link kh??ng ???????c ????? tr???ng" name="data[link_facebook]"
                                title="Nh???p link" id="link_facebook" class="tipS"
                                value="<?=@$item['link_facebook']?>" />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php }?>

                    <?php if($table['link_zalo']){?>

                    <div class="formRow">

                        <label>Link zalo</label>

                        <div class="formRight">

                            <input type="text" data-validation="required"
                                data-validation-error-msg="Link kh??ng ???????c ????? tr???ng" name="data[link_zalo]"
                                title="Nh???p link" id="link_zalo" class="tipS" value="<?=@$item['link_zalo']?>" />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php }?>

                    <?php if($table['link_twitter']){?>

                    <div class="formRow">

                        <label>Link twitter</label>

                        <div class="formRight">

                            <input type="text" data-validation="required"
                                data-validation-error-msg="Link kh??ng ???????c ????? tr???ng" name="data[link_twitter]"
                                title="Nh???p link" id="link_twitter" class="tipS" value="<?=@$item['link_twitter']?>" />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php }?>

                    <?php if($table['link_instagram']){?>

                    <div class="formRow">

                        <label>Link instagram</label>

                        <div class="formRight">

                            <input type="text" data-validation="required"
                                data-validation-error-msg="Link kh??ng ???????c ????? tr???ng" name="data[link_instagram]"
                                title="Nh???p link" id="link_instagram" class="tipS"
                                value="<?=@$item['link_instagram']?>" />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php }?>

                    <?php if($table['list']==true){ ?>

                    <div class="formRow">

                        <label>Danh m???c c???p 1</label>

                        <div class="formRight">

                            <select class="main_select"
                                onchange="onChangePage(this.value,'baiviet_cat','<?=$_GET['type']?>','id_cat','id_list')"
                                name="data[id_list]" id="id_list">

                                <option value="0">Ch???n danh m???c c???p 1</option>

                                <?php for($i=0;$i<count($items_list);$i++){ ?>

                                <option value="<?=$items_list[$i]['id']?>"
                                    <?=($item['id_list']==$items_list[$i]['id']) ? 'selected':''?>>
                                    <?=$items_list[$i]['ten_vi']?></option>

                                <?php } ?>

                            </select>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>

                    <?php if($table['cat']==true){ ?>

                    <div class="formRow">

                        <label>Danh m???c c???p 2</label>

                        <div class="formRight">

                            <select class="main_select"
                                onchange="onChangePage(this.value,'baiviet_item','<?=$_GET['type']?>','id_item','id_cat')"
                                name="data[id_cat]" id="id_cat">

                                <option value="0">Ch???n danh m???c c???p 2</option>

                                <?php for($i=0;$i<count($items_cat);$i++){ ?>

                                <option value="<?=$items_cat[$i]['id']?>"
                                    <?=($item['id_cat']==$items_cat[$i]['id']) ? 'selected':''?>>
                                    <?=$items_cat[$i]['ten_vi']?></option>

                                <?php } ?>

                            </select>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>

                    <?php if($table['item']==true){ ?>

                    <div class="formRow">

                        <label>Danh m???c c???p 3</label>

                        <div class="formRight">

                            <select class="main_select"
                                onchange="onChangePage(this.value,'baiviet_sub','<?=$_GET['type']?>','id_sub','id_item')"
                                name="data[id_item]" id="id_item">

                                <option value="0">Ch???n danh m???c c???p 3</option>

                                <?php for($i=0;$i<count($items_item);$i++){ ?>

                                <option value="<?=$items_item[$i]['id']?>"
                                    <?=($item['id_item']==$items_item[$i]['id']) ? 'selected':''?>>
                                    <?=$items_item[$i]['ten_vi']?></option>

                                <?php } ?>

                            </select>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>



                    <style>
                    .flex-checkbox {

                        display: flex;

                        align-items: center;

                        justify-content: center;

                        margin-right: 10px !important;

                    }

                    .flex-checkbox span {

                        display: inline-block;

                        margin-left: 5px;

                    }
                    </style>

                    <?php if($table["tragop"]==true){ ?>

                    <div class="formRow">

                        <div class="formRight">

                            <label class="stardust-checkbox checker flex-checkbox">

                                <input class="stardust-checkbox__input" <?php if($item["tragop"]==1) echo 'checked';?>
                                    name="tragop" id="tragop" type="checkbox" value="<?=$item["tragop"]?>"
                                    style="display:none">

                                <div class="stardust-checkbox__box"></div>

                                <span>Free ship</span>

                            </label>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php }?>

                    <?php if($table["quatang"]==true){
                        
                            $quatang = $db->rawQuery("select * from table_baiviet where type='qua-tang' order by stt asc, id desc");
                        ?>

                    <div class="formRow">

                        <label>Qu?? t???ng</label>

                        <div class="formRight">

                            <select class="main_select" name="data[id_quatang]" id="id_quatang">

                                <option value="0">Ch???n qu?? t???ng</option>

                                <?php for($i=0;$i<count($quatang);$i++){ ?>

                                <option value="<?=$quatang[$i]['id']?>"
                                    <?=($item['id_quatang']==$quatang[$i]['id']) ? 'selected':''?>>
                                    <?=$quatang[$i]['ten_vi']?></option>

                                <?php } ?>

                            </select>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php }?>

                    <?php 
                        if($GLOBAL[$com][$type]['khuyenmai']==true){
                        $data_khuyenmai = $db->rawQuery("select id,ten_vi from #_baiviet where type=? and hienthi=1 order by stt asc,id desc",array('khuyen-mai'));
                        $ex_tags = json_decode($item['khuyenmai'],true);  
                    ?>

                    <div class="formRow">

                        <label>Ch???n khuy???n m??i <?=$GLOBAL[$com][$type]['title_main']?></label>

                        <div class="formRight">

                            <select multiple="multiple" name="data[khuyenmai][]" class="select2">

                                <?php foreach ($data_khuyenmai as $k => $v) { ?>
                                <option value="<?=$v['id']?>"
                                    <?=(isset($ex_tags) && count($ex_tags)>0) ? ((in_array($v['id'],$ex_tags)) ? 'selected':''):''?>>
                                    <?=$v['ten_vi']?></option>
                                <?php } ?>

                            </select>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <?php }?>

                    <?php 
                        if($GLOBAL[$com][$type]['size-product']==true){
                        $data_size = $db->rawQuery("select id,ten_vi from #_baiviet where type=? and hienthi=1 order by stt asc,id desc",array('size'));
                        $ex_tags = explode(',',$item['id_size']);  
                    ?>

                    <div class="formRow">

                        <label>Ch???n size</label>

                        <div class="formRight">

                            <select multiple="multiple" name="data[id_size][]" class="select-size">

                                <?php foreach ($data_size as $k => $v) { ?>
                                <option value="<?=$v['id']?>" <?=(in_array($v['id'],$ex_tags)) ? 'selected':''?>>
                                    <?=$v['ten_vi']?></option>
                                <?php } ?>

                            </select>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <?php }?>

                    <?php if($table['masp']==true){ ?>

                    <div class="formRow">

                        <label>M?? s???n ph???m</label>

                        <div class="formRight">

                            <input type="text" data-validation="required"
                                data-validation-error-msg="Kh??ng ???????c ????? tr???ng" name="data[masp]"
                                title="Nh???p m?? s???n ph???m" id="masp" class="tipS" value="<?=@$item['masp']?>" />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>

                    <?php if($table['slogan']==true){ ?>

                    <div class="formRow">

                        <label>C??u slogan:</label>

                        <div class="formRight">

                            <input type="text" name="data[slogan]"
                                title="Nh???p m?? s???n ph???m" id="slogan" class="tipS" value="<?=@$item['slogan']?>" />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>

                    

                    <?php if($GLOBAL[$com][$type]['dungtich']){?>

                    <div class="formRow">

                        <label>Dung t??ch</label>

                        <div class="formRight">

                            <input type="text" name="data[dungtich]" title="Nh???p dung t??ch" id="dungtich" class="tipS"
                                value="<?=@$item['dungtich']?>" />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php }?>

                    <?php if($GLOBAL[$com][$type]['trangthai']){?>

                    <div class="formRow">

                        <label>Tr???ng th??i</label>

                        <div class="formRight">

                            <input type="text" name="data[trangthai]" title="Nh???p tr???ng th??i" id="trangthai"
                                class="tipS" value="<?=@$item['trangthai']?>" />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php }?>

                    <?php if($GLOBAL[$com][$type]['rating']){?>

                    <div class="formRow">

                        <label>????nh gi?? sao</label>

                        <div class="formRight">

                            <input type="text" name="data[rating]" title="Nh???p s??? sao c???n ????nh gi??" id="rating"
                                class="tipS" value="<?=@$item['rating']?>" />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php }?>

                    <?php if($GLOBAL[$com][$type]['baohanh']){?>

                    <div class="formRow">

                        <label>B???o h??nh</label>

                        <div class="formRight">

                            <input type="text" name="data[baohanh]" title="Nh???p m?? s???n ph???m" id="baohanh" class="tipS"
                                value="<?=@$item['baohanh']?>" />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php }?>

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

                    <?php if($table['soluongban']==true){ ?>

                    <div class="formRow">

                        <label>S??? l?????ng b??n</label>

                        <div class="formRight">

                            <input type="text" name="data[soluongban]" title="Nh???p gi?? b??n" id="soluongban"
                                class="conso tipS" value="<?=@$item['soluongban']?>" />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>

                    <?php if($table['donvitinh']==true){ ?>

                    <div class="formRow">

                        <label>Tr???ng l?????ng</label>

                        <div class="formRight">

                            <input type="text" name="data[donvitinh]" title="Nh???p ????n v??? t??nh" id="donvitinh"
                                class="tipS" value="<?=@$item['donvitinh']?>" />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>

                    <?php if($table['tinhtrang']==true){ ?>

                    <div class="formRow">

                        <label>Tr???ng th??i</label>

                        <div class="formRight">

                            <select name="data[id_loai]" id="id_loai" class="main_select">

                                <option value="1" <?=(@$item['id_loai']==1) ? 'selected':''?>>C??n h??ng

                                </option>

                                <option value="2" <?=(@$item['id_loai']==2) ? 'selected':''?>>T???m h???t h??ng

                                </option>

                            </select>

                        </div>

                        <div class="clear"></div>

                    </div>



                    <?php }?>

                    <?php 
                        if($GLOBAL[$com][$type]['tags']==true){
                        $data_tags = $db->rawQuery("select id,ten_vi from #_tags where type=? and hienthi=1 order by stt asc,id desc",array('tags-san-pham'));
                        $ex_tags = json_decode($item['tags'],true);  
                    ?>
                    <div class="formRow">
                        <label>Ch???n tags <?=$GLOBAL[$com][$type]['title_main']?></label>
                        <div class="formRight">
                            <select multiple="multiple" name="data[tags][]" class="selectTags">
                                <?php foreach ($data_tags as $k => $v) { ?>
                                <option value="<?=$v['id']?>"
                                    <?=(isset($ex_tags) && count($ex_tags)>0) ? ((in_array($v['id'],$ex_tags)) ? 'selected':''):''?>>
                                    <?=$v['ten_vi']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <?php }?>

                    <?php if($table['img']==true){ ?>

                    <div class="formRow">

                        <label>T???i h??nh ???nh:</label>

                        <div class="formRight">

                            <?php if($_GET['act']=='edit' || $_GET['act']=='copy'){?>

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
                    <?php if($table['link']){?>

                    <div class="formRow">

                        <label>Link video / li??n k???t s???n ph???m</label>

                        <div class="formRight">

                            <input type="text" name="data[link]" title="Nh???p link" id="link" class="tipS"
                                value="<?=@$item['link']?>" />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php }?>

                    <?php if($_GET['act']=='edit' || $_GET['act']=='copy'){?>

                    <div class="formRow">

                        <label>H??nh Hi???n T???i :</label>

                        <div class="formRight">

                            <div class="mt10"><img style="max-width:100%" src="<?=_upload_baiviet.$item['photo']?>"
                                    alt="NO PHOTO" width="<?=$table['img-width']?>"
                                    height="<?=$table['img-height']?>" /></div>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>
                    <?php } ?>






                    <!--============================= IMG PH??? ========================-->

                    <?php if($table['imgphu']==true){ ?>

                    <div class="formRow">

                        <label>T???i h??nh ???nh PH???:</label>

                        <div class="formRight">

                            <input type="file" id="filephu" name="filephu" />

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

                    <?php if($_GET['act']=='edit' || $_GET['act']=='copy'){?>

                    <div class="formRow">

                        <label>H??nh Hi???n T???i :</label>

                        <div class="formRight">

                            <div class="mt10"><img style="max-width:100%" src="<?=_upload_baiviet.$item['photo1']?>"
                                    alt="NO PHOTO" width="<?=$table['img-width']?>"
                                    height="<?=$table['img-height']?>" /></div>

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

                                <?php if($act=='edit'){?>

                                <?php 

                                    if(count($ds_photo)!=0){

                                ?>

                                <?php for($i=0;$i<count($ds_photo);$i++){?>

                                <div class="item_trich">

                                    <img class="img_trich" src="<?=_upload_baiviet.$ds_photo[$i]['photo']?>" />

                                    <input type="text" rel="<?=$ds_photo[$i]['id']?>" value="<?=$ds_photo[$i]['stt']?>"

                                        class="update_stt tipS" />

                                    <a class="delete_images icon-jfi-trash jFiler-item-trash-action"

                                        title="<?=$ds_photo[$i]['id']?>" style="color:#FF0000"></a>

                                </div>

                                <?php } ?>

                                <?php }?>

                                <?php }?>

                            </div>

                            <div class="clear"></div>

                        </div>

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
                    <?php
                        if($table["iframe_map"] == true){
                    ?>
                    <div class="formRow">

                        <label>Iframe map <strong><a href="https://www.google.com/maps" target="_blank"
                                    title="L???y m?? nh??ng Google Map">( <i class="fas fa-map-marker-alt"
                                        aria-hidden="true"></i> L???y m?? nh??ng )</a></strong></label>

                        <div>

                            <textarea data-validation="required"
                                data-validation-error-msg="Iframe map kh??ng ???????c ????? tr???ng" title="Nh???p iframe. "
                                id="iframe_map" rows="7" name="data[iframe_map]"><?=@$item['iframe_map']?></textarea>

                        </div>

                        <div class="clear"></div>

                    </div>
                    <?php }?>
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

                                    <a href="<?=$https_config?><?=@$item['type']?>/<?=$item["tenkhongdau_$k"]?>"
                                        target="_blank"
                                        title="<?=$https_config?>"><span><?=$https_config?><?=$item['type']?>/</span><span
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



                    <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">

                        <label>Title [ <?=$v?> ]: </label>

                        <div class="formRight">

                            <input type="text" data-validation="required"
                                data-validation-error-msg="Kh??ng ???????c ????? tr???ng" value="<?=@$seoDB['title_'.$k]?>"
                                id="title" name="dataseo[title_<?=$k?>]" title="N???i dung th??? meta Title d??ng ????? SEO"
                                class="tipS input100" />

                        </div>

                        <div class="clear"></div>

                    </div>



                    <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">

                        <label>Keywords [ <?=$v?> ]: </label>

                        <div class="formRight">

                            <input type="text" value="<?=@$seoDB['keywords_'.$k]?>" id="title"
                                name="dataseo[keywords_<?=$k?>]" title="T??? kh??a ch??nh cho danh m???c"
                                class="tipS input100" />

                        </div>

                        <div class="clear"></div>

                    </div>



                    <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">

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

                    
                    <?php if($table["schema"]==true){ ?>

                        <div class="formRow">

                                <label>Schema</label>

                                <div class="formRight">

                                    <textarea rows="8" cols="" title="Nh???ng ??o???n code kh??ch h??ng mu???n ch??n tr??n header c???a website"

                                        class="tipS" name="dataseo[schema]"><?=@$seoDB['schema']?></textarea>

                                </div>

                                <div class="clear"></div>

                        </div>

                    <?php }?>

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



        <div class="formRow fixedBottom sidebar-bunker">

            <div class="formRight">

                <input type="hidden" name="id_attr" value="<?=$rowId['id']?>" />



                <div class="box-admin" style="display:flex; align-items:center;justify-content:flex-end">

                    <div class="box-action">

                        <button type="submit" class="btn btn-sm bg-gradient-primary text-white">

                            <i class="far fa-save mr-2"></i><?=($_GET["act"]=='copy') ? 'L??u copy' : 'L??u'?>

                        </button>

                        <button type="submit" class="btn btn-sm bg-gradient-success" name="save-here"><i
                                class="far fa-save mr-2"></i>L??u t???i trang</button>

                        <button type="reset" class="btn btn-sm bg-gradient-secondary"><i
                                class="fas fa-redo mr-2"></i>L??m l???i</button>

                        <a class="btn btn-sm bg-gradient-danger text-white"
                            href="index.html?com=baiviet&act=man<?php if($_GET['type']!='') echo'&type='. $_GET['type'];?>">

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

    window.asd = $('.select2').SumoSelect({
        placeholder: 'Ch???n khuy???n m??i',
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

    window.asd = $('.select-size').SumoSelect({
        placeholder: 'Ch???n size',
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

    window.asd = $('.selectTags').SumoSelect({
        placeholder: 'Ch???n tags s???n ph???m',
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