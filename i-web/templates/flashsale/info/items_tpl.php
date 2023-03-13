<style>
.select-w {

    width: 130px;

}
</style>

<script type="text/javascript">
$(document).ready(function() {

    $('.update_stt').keyup(function(event) {

        var id = $(this).attr('rel');

        var table = 'flashsale_info';

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



    $('.box-search button').click(function(event) {

        var keyword = $(this).parent().find('input').val();

        window.location.href =
            "index.html?com=flashsale&act=man_info&type=<?=$_GET['type']?>&keyword=" +

            keyword;

    });



    $("#xoahet").click(function() {

        var listid = $("input[name='chon']:checked").map(function() {

            return this.value

        }).get().join(",");



        if (listid.length > 0) {

            $.confirm({

                title: 'Xác nhận!',

                content: 'Bạn có chắc chắn muốn xóa mục này!',

                buttons: {

                    success: {

                        text: 'Đồng ý!',

                        btnClass: 'btn-blue',

                        action: function() {

                            redirect(
                                "index.html?com=flashsale&act=delete_info&id_flash=<?=$_GET["id_flash"]?>&page=<?=$_GET['page']?>&listid=" +
                                listid);

                        }

                    },

                    cancel: {

                        text: 'Hủy ngay!',

                        btnClass: 'btn-red'

                    }

                }

            });

        }

    });

});
</script>

<div class="box-dashboards">

    <div class="control_frm">

        <div class="bc">

            <ul id="breadcrumbs" class="breadcrumbs">

                <li>
                    <a
                        href="index.html?com=flashsale&act=man_info<?php if($_GET['tbl']!='') echo'&tbl='. $_GET['tbl'];?><?php if($_GET['id_flash']!='') echo'&id_flash='. $_GET['id_flash'];?><?php if($_GET['type']!='') echo'&type='. $_GET['type'];?><?php if($_GET['page']!='') echo'&page='. $_GET['page'];?>"><span>Sản phẩm flash sale</span></a>
                </li>

                <?php if($_GET['keyword']!=''){ ?>

                <li class="current"><a href="#" onclick="return false;">Kết quả tìm kiếm " <?=$_GET['keyword']?> " </a>

                </li>

                <?php }else{ ?>

                <li class="current"><a href="#" onclick="return false;">Tất cả</a></li>

                <?php } ?>

            </ul>

            <div class="clear"></div>

        </div>

    </div>

    <form name="f" id="f" method="post">

        <div class="oneOne">

            <div class="box-admin" style="display:flex; align-items:center;">

                <div class="box-action">
                    <a class="btn btn-sm bg-gradient-primary text-white"
                        href="index.html?com=flashsale&act=add_info<?php if($_GET['tbl']!='') echo'&tbl='. $_GET['tbl'];?><?php if($_GET['id_flash']!='') echo'&id_flash='. $_GET['id_flash'];?><?php if($_GET['id_product']!='') echo'&id_product='. $_GET['id_product'];?><?php if($_GET['type']!='') echo'&type='. $_GET['type'];?><?php if($_GET['page']!='') echo'&page='. $_GET['page'];?>">

                        <i class="fas fa-plus mr-2"></i>Thêm mới

                    </a>
                    <a class="btn btn-sm bg-gradient-danger text-white" id="xoahet">

                        <i class="far fa-trash-alt mr-2"></i>Xóa tất cả

                    </a>
                </div>

                <div class="box-search">

                    <input type="text" value="" placeholder="Nhập từ khóa tìm kiếm ">

                    <button type="button" style="border-radius:0" class="btn btn-navbar text-white" value=""><i
                            class="fas fa-search"></i></button>

                </div>

            </div>

        </div>

        <div class="oneOne">

            <div class="widget mtop0">

                <table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck mTable" id="checkAll">
                    <thead>
                        <tr>
                            <td>
                                <label class="stardust-checkbox">

                                    <input class="stardust-checkbox__input" id="checkAll" type="checkbox" value=""
                                        style="display:none">

                                    <div class="stardust-checkbox__box"></div>
                                </label>
                            </td>
                            <td style="width:40px!important" class="tb_data_small">Stt</td>
                            <td style="width: 70px; text-align: center;">Hình Ảnh</td>
                            <td class="sortCol" style="width:290px">
                                <div>Tên</div>
                            </td>
                            <td class="sortCol" style="width:290px">
                                <div>Giá</div>
                            </td>
                            <td style="width: 60px; text-align: center;">Hiển thị</td>
                            <td style="width: 90px; text-align: center;">Thao Tác</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i=0, $count=count($items); $i<$count; $i++){

                            $pro = $db->rawQueryOne("select id,ten_$lang as ten,photo,giaban from #_baiviet where id=?",array($items[$i]['id_product']));?>
                        <tr>
                            <td>
                                <label class="stardust-checkbox checker">
                                    <input class="stardust-checkbox__input" name="chon" id="check<?=$i?>"
                                        type="checkbox" value="<?=$items[$i]['id']?>" style="display:none">
                                    <div class="stardust-checkbox__box"></div>
                                </label>
                            </td>

                            <td style="width:50px" align="center">

                                <input type="text" value="<?=$items[$i]['stt']?>" name="ordering[]"
                                    onkeypress="return OnlyNumber(event)" class="tipS smallText update_stt"
                                    original-title="Nhập số thứ tự " rel="<?=$items[$i]['id']?>" />

                                <div id="ajaxloader"><img class="numloader" id="ajaxloader<?=$items[$i]['id']?>"
                                        src="images/loader.gif" alt="loader" /></div>

                            </td>

                            <td class="title_name_data">
                                <img class="img-list" src="<?=_upload_baiviet.$pro['photo']?>" alt="" width="70">
                            </td>
                            <td class="title_name_data">
                                <?= $pro['ten']?>
                            </td>
                            <td class="title_name_data">
                                <?=$func->changeMoney($pro['giaban'],'đ')?>
                            </td>

                            <td align="center">

                                <label class="stardust-checkbox checkOnOff">

                                    <input class="stardust-checkbox__input" data-id="<?=$items[$i]['id']?>"
                                        data-table="table_flashsale" data-type="hienthi"
                                        rel="<?=$items[$i]['hienthi']?>"
                                        <?php if($items[$i]['hienthi']==1) echo 'checked'; ?> name="onOff"
                                        type="checkbox" style="display:none">
                                    <div class="stardust-checkbox__box"></div>
                                </label>
                            </td>
                            
                            <td class="actBtns">
                                
                                <a class="text-primary"
                                    href="index.html?com=flashsale&act=edit_info<?php if($_GET['tbl']!='') echo'&tbl='. $_GET['tbl'];?><?php if($_GET['id_flash']!='') echo'&id_flash='. $_GET['id_flash'];?>&id_product=<?=$items[$i]['id_product']?><?php if($_GET['type']!='') echo'&type='. $_GET['type'];?><?php if($_GET['page']!='') echo'&page='. $_GET['page'];?>"
                                    title="" class="smallButton tipS" original-title="Sửa"><i
                                        class="fas fa-edit"></i></a>
                                <a class="text-danger" data-product="<?=$items[$i]['id_product']?>" data-com="<?=$_GET['com']?>"
                                    data-act="delete_info" data-flash="<?=$_GET["id_flash"]?>" data-tbl="<?=$_GET['tbl']?>" data-type="<?=$_GET['type']?>"
                                    data-page="<?=$_GET['page']?>" href="javascript:" data-js-delete-info title=""
                                    class="smallButton tipS" original-title="Xóa ">

                                    <i class="fas fa-trash-alt"></i>

                                </a>
                            </td>
                        </tr>

                        <?php } ?>

                    </tbody>

                </table>

                <div class="paging"><?=$paging?></div>

            </div>



        </div>

    </form>



</div>



<script>
function changeSelect(value, product, type) {

    $.ajax({

        url: 'ajax/loadSelect.php',

        type: 'post',

        data: {
            value: value,
            product: product,
            type: type
        },

        success: function(data) {

            $('select[data-cat-' + product + ']').html(data);

        }

    });

}

function updateSelect(value, product, type, x) {

    $.ajax({

        url: 'ajax/updateSelect.php',

        type: 'post',

        data: {
            value: value,
            product: product,
            type: type,
            loai: x
        },

        success: function(data) {

            // window.location.reload();

        }

    });

}

$(function() {

    $('select[data-view-id]').change(function() {

        var _o = $(this);

        var _v = _o.val();

        var _idp = _o.attr('data-product');

        var _data = _o.data('loai');

        var _type = "<?=$_GET['type']?>";

        $.confirm({

            title: 'Xác nhận!',

            content: 'Bạn có chắc chắn muốn thay đổi danh mục này!',

            buttons: {

                success: {

                    text: 'Đồng ý!',

                    btnClass: 'btn-blue',

                    action: function() {

                        changeSelect(_v, _idp, _type);

                        updateSelect(_v, _idp, '<?=$type?>', _data);

                    }

                },

                cancel: {

                    text: 'Hủy ngay!',

                    btnClass: 'btn-red'

                }

            }

        });

    });

    $('select[data-view-cat]').change(function() {

        var _o = $(this);

        var _v = _o.val();

        var _idp = _o.attr('data-product');

        $.confirm({

            title: 'Xác nhận!',

            content: 'Bạn có chắc chắn muốn thay đổi danh mục này!',

            buttons: {

                success: {

                    text: 'Đồng ý!',

                    btnClass: 'btn-blue',

                    action: function() {

                        updateSelect(_v, _idp, '<?=$type?>', 'idc');

                    }

                },

                cancel: {

                    text: 'Hủy ngay!',

                    btnClass: 'btn-red'

                }

            }

        });



    });

    $('select[data-view-item]').change(function() {

        var _o = $(this);

        var _v = _o.val();

        var _idp = _o.attr('data-product');

        $.confirm({

            title: 'Xác nhận!',

            content: 'Bạn có chắc chắn muốn thay đổi danh mục này!',

            buttons: {

                success: {

                    text: 'Đồng ý!',

                    btnClass: 'btn-blue',

                    action: function() {

                        updateSelect(_v, _idp, '<?=$type?>', 'idi');

                    }

                },

                cancel: {

                    text: 'Hủy ngay!',

                    btnClass: 'btn-red'

                }

            }

        });



    });

});
</script>