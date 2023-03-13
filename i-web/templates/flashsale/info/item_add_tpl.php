<link href="plugin/sumoselect/sumoselect.css" rel="stylesheet" />

<script src="plugin/sumoselect/jquery.sumoselect.min.js"></script>

<script src="assets/js/star.js"></script>


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

<div class="wrapper">
    <div class="control_frm">
        <div class="bc">
            <ul id="breadcrumbs" class="breadcrumbs">
                <li><a
                        href="index.html?com=flashsale&act=add_info<?php if($_GET['tbl']!='') echo'&tbl='. $_GET['tbl'];?><?php if($_GET['id_flash']!='') echo'&id_flash='. $_GET['id_flash'];?><?php if($_GET['type']!='') echo'&type='. $_GET['type'];?><?php if($_GET['page']!='') echo'&page='. $_GET['page'];?>"><span>Sản phẩm flash sale</span></a>
                </li>
                <li class="current"><a href="#" onclick="return false;"><?=($_GET['act']=='edit') ? 'Sửa':'Thêm'?></a>
                </li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>

    <form name="supplier" class="form"
        action="index.html?com=flashsale&act=save_info<?php if($_GET['tbl']!='') echo'&tbl='. $_GET['tbl'];?><?php if($_GET['id_flash']!='') echo'&id_flash='. $_GET['id_flash'];?><?php if($_GET['id']!='') echo'&id='. $_GET['id'];?><?php if($_GET['type']!='') echo'&type='. $_GET['type'];?><?php if($_GET['page']!='') echo'&page='. $_GET['page'];?>"
        method="post" enctype="multipart/form-data" autocomplete="off" accept-charset="utf-8">

        <div class="mtop0">
            <div class="oneOne">
                <div class="widget mtop0">
                    <div class="title chonngonngu" style="border-bottom: 0px solid transparent">
                        <ul>
                            <?php  foreach ($config['lang'] as $k => $v){ ?>
                            <li><a href="<?=$k?>" class="<?= ($k == $config['lang-default']) ? 'active': '' ?> tipS"
                                    title="<?=$v?>"><img src="./images/<?=$k?>.png" alt=""
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
                        <h6>Thông tin chung</h6>
                    </div>

                    <div class="formRow">
                        <label>Chọn sản phẩm</label>
                        <div class="formRight">
                            <div class="p-relative box-search">
                                <input type="text" class="tipS js-focusSearch" placeholder="Nhập tên sản phẩm cần tìm..."
                                    data-type="san-pham" data-box="#sanpham" data-view="#sanphamview"
                                    data-id="#id_product" />
                                <div id="sanpham" class="resultbox"></div>
                            </div>
                        </div>
                    </div>
                    <div class="formRow">
                        <label>Sản phẩm hiện tại</label>
                        <div class="formRight">
                            <div class="p-relative box-search">
                                <div id="sanphamview" class="viewbox">
                                    <span
                                        <?= (isset($item['id_product']) & $item['id_product'] != 0) ? 'style="display:none"' : ''?>>Chưa
                                        có sản phẩm</span>
                                    <?php if(isset($item['id_product']) & $item['id_product'] != 0){
                                        $pro = $db->rawQueryOne("select id,ten_$lang as ten,giaban,photo from #_baiviet where id=? order by id desc",array($item['id_product']));?>
                                    <div class="bvlq">
                                        <div class="thumb">
                                            <img src="<?= _upload_baiviet.$pro['photo']?>" alt="<?= $pro['ten']?>" />
                                        </div>
                                        <div class="content">
                                            <p class="title"><?= $pro['ten']?></p>
                                            <p class="price"><?= $func->moneyDot($pro['giaban'],'đ')?></p>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                                <input type="hidden" value="<?= $item['id_product']?>" name="data[id_product]" id="id_product" />
                                <input type="hidden" value="<?= $_GET['id_flash']?>" name="data[id_flash]" id="id_flash" />
                            </div>
                        </div>
                    </div>

                </div>



            </div>



            <div class="<?=($table['full']==true) ? 'oneOne':'colRight' ?>">

                <div class="widget mtop0">

                    <div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />

                        <h6>Thuộc tính</h6>

                    </div>

                    <div class="formRow">



                        <div class="formRight">

                            <label>Số thứ tự: </label>

                            <input type="text" class="tipS"
                                value="<?=isset($item['stt'])?$item['stt']:$func->checkNumb('stt',$com,$type)?>"
                                name="data[stt]" style="width:40px; text-align:center;"
                                onkeypress="return OnlyNumber(event)"
                                original-title="Số thứ tự của danh mục, chỉ nhập số">

                        </div>

                        <div class="clear"></div>

                    </div>

                    <div class="formRow">

                        <div class="formRight">

                            <label class="stardust-checkbox">

                                Hiển thị

                                <input class="stardust-checkbox__input"
                                    <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?>
                                    name="hienthi" type="checkbox" value="1" style="display:none">

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

                <input type="hidden" name="id_attr" value="<?=$rowId['id']?>" />



                <div class="box-admin" style="display:flex; align-items:center;justify-content:flex-end">

                    <div class="box-action">

                        <button type="submit" class="btn btn-sm bg-gradient-primary text-white">

                            <i class="far fa-save mr-2"></i>Lưu

                        </button>

                        <button type="submit" class="btn btn-sm bg-gradient-success" name="save-here"><i
                                class="far fa-save mr-2"></i>Lưu tại trang</button>

                        <button type="reset" class="btn btn-sm bg-gradient-secondary"><i
                                class="fas fa-redo mr-2"></i>Làm lại</button>

                        <a class="btn btn-sm bg-gradient-danger text-white"
                            href="index.html?com=flashsale&act=man_info<?php if($_GET['tbl']!='') echo'&tbl='. $_GET['tbl'];?><?php if($_GET['id_flash']!='') echo'&id_flash='. $_GET['id_flash'];?><?php if($_GET['type']!='') echo'&type='. $_GET['type'];?>">

                            <i class="fas fa-sign-out-alt mr-2"></i>Thoát

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

        placeholder: 'Chọn kích thước',

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

        placeholder: 'Chọn nhà cung ứng',

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

        countSelected: $('#rank').val(),

        complete: function(vl) {

            $('#rank').val(vl);

        }

    });

    $('.file_input').filer({

        limit: 1000,

        maxSize: null,

        extensions: ["jpg", "png", "jpeg", "JPG", "PNG", "JPEG", "Png"],

        changeInput: '<div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>Kéo và thả hình vào đây</h3> <span style="display:inline-block; margin: 15px 0">hoặc</span></div><a class="jFiler-input-choose-btn blue">Chọn hình</a></div></div>',

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

            button: "Thêm hình",

            feedback: "Vui lòng chọn hình ảnh",

            feedback2: "Những hình đã được chọn",

            drop: "Kéo hình vào đây để upload",

            removeConfirmation: "Bạn muốn loại bỏ hình ảnh này ?",

            errors: {

                filesLimit: "Chỉ được upload mỗi lần {{fi-limit}} hình ảnh",

                filesType: "Chỉ hỗ trợ tập tin là hình ảnh có định dạng: {{fi-extensions}}",

                filesSize: "Hình {{fi-name}} có kích thước quá lớn. Vui lòng upload hình ảnh có kích thước tối đa {{fi-maxSize}} MB.",

                filesSizeAll: "Những hình ảnh bạn chọn có kích thước quá lớn. Vui lòng chọn những hình ảnh có kích thước tối đa {{fi-maxSize}} MB."

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