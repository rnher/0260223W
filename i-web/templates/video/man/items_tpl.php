<script type="text/javascript">
    $(document).ready(function() {
        $('.update_stt').keyup(function(event) {
            var id = $(this).attr('rel');
            var table = 'video';
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
            window.location.href = "index.html?com=video&act=man&type=<?= $_GET['type'] ?>&keyword=" +
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
                                    "index.html?com=video&act=delete&type=<?= $_GET['type'] ?>&curPage=<?= $_GET['curPage'] ?>&listid=" +
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


<div class="control_frm">
    <div class="bc">
        <ul id="breadcrumbs" class="breadcrumbs">
            <li><a href="index.html?com=video&act=man<?php if ($_REQUEST['type'] != '') echo '&type=' . $_REQUEST['type']; ?>"><span><?= $GLOBAL['video']['video']['title_main'] ?></span></a>
            </li>
            <?php if ($_GET['keyword'] != '') { ?>
                <li class="current"><a href="#" onclick="return false;"><?= _ketquatimkiem ?> " <?= $_GET['keyword'] ?> " </a>
                </li>
            <?php } else { ?>
                <li class="current"><a href="#" onclick="return false;"><?= _tatca ?></a></li>
            <?php } ?>
        </ul>
        <div class="clear"></div>
    </div>
</div>
<form name="f" id="f" method="post">
    <div class="oneOne">
        <div class="box-admin d-flex d-block-m align-items-center">
            <div class="box-action">
                <a class="btn btn-sm bg-gradient-primary text-white" href="index.html?com=video&act=add<?php if ($_REQUEST['type'] != '') echo '&type=' . $_REQUEST['type']; ?>">
                    <i class="fas fa-plus mr-2"></i>Thêm mới
                </a>
                <a class="btn btn-sm bg-gradient-danger text-white" id="xoahet">
                    <i class="far fa-trash-alt mr-2"></i>Xóa tất cả
                </a>
            </div>
            <div class="box-search mt-m-20">
                <input type="text" class="mg-m-0" value="" placeholder="Nhập từ khóa tìm kiếm ">
                <button type="button" class="btn btn-navbar text-white" value=""><i class="fas fa-search"></i></button>
            </div>
        </div>
    </div>
    <div class="oneOne">

        <div class="title">

            <div class="timkiem">

                <?php if ($GLOBAL[$com][$type]['list'] == true) { ?>

                    <select class="main_select" name="data[id_list]" id="id_list" onChange="window.location.href='index.html?com=<?= $_GET['com'] ?>&act=man&type=<?= $_GET['type'] ?>&id_list='+this.value">

                        <option value="0">Chọn danh mục dịch vụ</option>

                        <?php for ($i = 0; $i < count($items_list); $i++) { ?>

                            <option value="<?= $items_list[$i]['id'] ?>" <?= ($_GET['id_list'] == $items_list[$i]['id']) ? 'selected' : '' ?>><?= $items_list[$i]['ten_vi'] ?></option>

                        <?php } ?>

                    </select>

                <?php } ?>

                <?php if ($GLOBAL[$com][$type]['cat'] == true) { ?>

                    <select class="main_select" name="data[id_cat]" id="id_cat" onChange="window.location.href='index.html?com=<?= $_GET['com'] ?>&act=man&type=<?= $_GET['type'] ?>&id_list=<?= $_GET['id_list'] ?>&id_cat='+this.value">

                        <option value="0">Chọn danh mục cấp 2</option>

                        <?php for ($i = 0; $i < count($items_cat); $i++) { ?>

                            <option value="<?= $items_cat[$i]['id'] ?>" <?= ($_GET['id_cat'] == $items_cat[$i]['id']) ? 'selected' : '' ?>><?= $items_cat[$i]['ten_vi'] ?></option>

                        <?php } ?>

                    </select>

                <?php } ?>

                <?php if ($GLOBAL[$com][$type]['item'] == true) { ?>

                    <select class="main_select" name="data[id_item]" id="id_item" onChange="window.location.href='index.html?com=<?= $_GET['com'] ?>&act=man&type=<?= $_GET['type'] ?>&id_list=<?= $_GET['id_list'] ?>&id_cat=<?= $_GET['id_cat'] ?>&id_item='+this.value">

                        <option value="0">Chọn danh mục cấp 3</option>

                        <?php for ($i = 0; $i < count($items_item); $i++) { ?>

                            <option value="<?= $items_item[$i]['id'] ?>" <?= ($_GET['id_item'] == $items_item[$i]['id']) ? 'selected' : '' ?>><?= $items_item[$i]['ten_vi'] ?></option>

                        <?php } ?>

                    </select>

                <?php } ?>

            </div>

        </div>

    </div>
    <div class="oneOne">
        <div class="widget mtop0">
            <div class="table-responsive">
                <table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck mTable" id="checkAll">
                    <thead>
                        <tr>
                            <td>

                                <label class="stardust-checkbox">
                                    <input class="stardust-checkbox__input" id="checkAll" type="checkbox" value="" style="display:none">
                                    <div class="stardust-checkbox__box"></div>
                                </label>
                            </td>
                            <td class="tb_data_small"><a href="#" class="tipS" style="margin: 5px;"><?= _thutu ?></a></td>
                            <td width="150">Hình ảnh</td>
                            <td class="sortCol">
                                <div><?= _tieude ?><span></span></div>
                            </td>
                            <?php if ($GLOBAL[$com][$type]['list'] == true) { ?>

                                <td align="center" align="left">

                                    <div>Danh mục dịch vụ</div>

                                </td>

                            <?php } ?>
                            <td class="tb_data_small"><?= _anhien ?></td>
                            <td class="tb_data_small">Nổi Bật</td>
                            <td class="tb_data_small"><?= _thaotac ?></td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php for ($i = 0, $count = count($items); $i < $count; $i++) { ?>
                            <tr>
                                <td>
                                    <label class="stardust-checkbox checker">
                                        <input class="stardust-checkbox__input" name="chon" id="check<?= $i ?>" type="checkbox" value="<?= $items[$i]['id'] ?>" style="display:none">
                                        <div class="stardust-checkbox__box"></div>
                                    </label>
                                </td>

                                <td align="center">
                                    <input type="text" value="<?= $items[$i]['stt'] ?>" name="ordering[]" onkeypress="return OnlyNumber(event)" class="tipS smallText update_stt" original-title="Nhập số thứ tự sản phẩm" rel="<?= $items[$i]['id'] ?>" />

                                    <div id="ajaxloader"><img class="numloader" id="ajaxloader<?= $items[$i]['id'] ?>" src="images/loader.gif" alt="loader" /></div>
                                </td>
                                <td align="center">
                                    <img src="<?= _upload_hinhanh . $items[$i]['photo'] ?>" width="100" border="0" />
                                </td>
                                <td class="title_name_data">
                                    <a href="index.html?com=video&act=edit&id=<?= $items[$i]['id'] ?><?php if ($_REQUEST['type'] != '') echo '&type=' . $_REQUEST['type']; ?>" class="tipS SC_bold"><?= $items[$i]['ten_vi'] ?></a>
                                </td>

                                <?php if ($GLOBAL[$com][$type]['list'] == true) { ?>
                                    <td align="center" class="title_name_data">

                                        <?php

                                        $result = $db->rawQueryOne("select ten_vi from table_baiviet where id='" . $items[$i]['id_list'] . "' and type=?", array('dich-vu'));

                                        echo @$result['ten_vi'];

                                        ?>


                                        <?php /* <select select-w data-view-id data-list-<?=$items[$i]['id']?> data-product="<?=$items[$i]['id']?>" class="main_select select-w" name="select_list" id="list">

                                            <option>Chọn DMC 1</option>

                                            <?php foreach($items_list as $k => $v){?>

                                                <option <?php if($v['id']==$items[$i]['id_list']) echo 'selected="selected"'?> value="<?=$v['id']?>"><?=$v["ten_vi"]?></option>

                                            <?php }?>

                                        </select>                             

                                    </td> */ ?>
                                    <?php } ?>
                                    <td align="center">
                                        <label class="stardust-checkbox checkOnOff">
                                            <input class="stardust-checkbox__input" data-id="<?= $items[$i]['id'] ?>" data-table="table_video" data-type="hienthi" rel="<?= $items[$i]['hienthi'] ?>" <?php if ($items[$i]['hienthi'] == 1) echo 'checked'; ?> name="onOff" type="checkbox" style="display:none">
                                            <div class="stardust-checkbox__box"></div>
                                        </label>
                                    </td>

                                    <td align="center">
                                        <label class="stardust-checkbox checkOnOff">
                                            <input class="stardust-checkbox__input" data-id="<?= $items[$i]['id'] ?>" data-table="table_video" data-type="noibat" rel="<?= $items[$i]['noibat'] ?>" <?php if ($items[$i]['noibat'] == 1) echo 'checked'; ?> name="onOff" type="checkbox" style="display:none">
                                            <div class="stardust-checkbox__box"></div>
                                        </label>
                                    </td>

                                    <td class="actBtns">
                                        <a class="text-primary" href="index.html?com=video&act=edit&id=<?= $items[$i]['id'] ?><?php if ($_REQUEST['type'] != '') echo '&type=' . $_REQUEST['type']; ?>" title="" class="smallButton tipS" original-title="Sửa sản phẩm"><i class="fas fa-edit"></i></a>

                                        <a class="text-danger" data-product="<?= $items[$i]['id'] ?>" data-com="<?= $_GET['com'] ?>" data-act="delete" data-tbl="<?= $_GET['tbl'] ?>" data-type="<?= $_GET['type'] ?>" data-page="<?= $_GET['page'] ?>" href="javascript:" data-js-delete title="" class="smallButton tipS" original-title="Xóa "><i class="fas fa-trash-alt"></i></a>
                                    </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</form>
<div class="paging"><?= $paging ?></div>