<?php

$colors = $db->rawQuery("select id,ten_$lang as ten,photo,color_image from #_attribute where hienthi=1 and id_product=? and type=? order by stt asc,id desc", array($row_detail['id'], 'color'));

$sizes = $db->rawQuery("select id,ten_$lang as ten,giaban from #_attribute where hienthi=1 and type=? and id_product=? order by stt desc,id desc", array('size', $row_detail["id"]));

?>

<style>
    ol#breadcrumb {
        margin: 0;
        margin-bottom: var(--vw-15);
    }
</style>

<section class="product-detail__sc" id="detail-product">

    <div class="container">

        <form method="post" data-role="add-to-cart" enctype="multipart/form-data" onsubmit="return false" name="product-detail-<?= $row_detail['id'] ?>" id="product-detail-<?= $row_detail['id'] ?>">
            <input type="hidden" name="src" value="addCart">

            <input type="hidden" name="pid" value="<?= $row_detail['id'] ?>">

            <div class="d-flex flex-wrap">

                <div class=" col-9 w-100-m w-100-t mb-t-20 mt30">

                    <div class="d-flex flex-wrap">

                        <div class=" col-12">
                            <div class="breadcumb breadcumb--detail">
                                <?= $str_breadcrumbs ?>
                            </div>
                        </div>


                        <div class=" col-5 w-50-t w-100-m">

                            <div class="img-top">

                                <a href="thumbs/600x600x1/<?= _upload_baiviet_l . $row_detail['photo'] ?>" class="MagicZoom" id="Zoom-1" data-options="variableZoom: true;expand: on; hint: always; ">

                                    <img class="col-12" src="thumbs/600x600x1/<?= _upload_baiviet_l . $row_detail['photo'] ?>" alt="<?= $row_detail['ten_' . $lang] ?>" />

                                </a>

                            </div>

                            <?php if (count($photos) > 0) { ?>

                                <div class="img-bottom">

                                    <div class="product-detail-slider owl-carousel owl-theme owl-carousel-loop in-home" data-height="575" data-dot="1" data-nav='0' data-loop='0' data-play='1' data-lg-items='4' data-md-items='4' data-sm-items='4' data-xs-items="4" data-margin='10'>

                                        <div class="items mb20">
                                            <div class="img"><a data-zoom-id="Zoom-1" href="<?= _upload_baiviet_l . $row_detail['photo'] ?>" data-image="thumbs/600x600x1/<?= _upload_baiviet_l . $row_detail['photo'] ?>"><img <?= $func->errorImg() ?> src="<?= _upload_baiviet_l . $row_detail['photo'] ?>" alt="<?= $row_detail['ten_' . $lang] ?>"></a></div>
                                        </div>

                                        <?php
                                        foreach ($photos as $k => $v) {
                                        ?>

                                            <div class="items mb20">
                                                <div class="img"><a data-zoom-id="Zoom-1" href="<?= _upload_baiviet_l . $v['photo'] ?>" data-image="thumbs/600x600x1/<?= _upload_baiviet_l . $v['photo'] ?>"><img src="thumbs/600x600x1/<?= _upload_baiviet_l . $v['photo'] ?>" alt="<?= $row_detail['ten_' . $lang] ?>"></a></div>
                                            </div>

                                        <?php } ?>

                                    </div>

                                </div>

                            <?php } ?>

                        </div>

                        <div class=" col-7 w-50-t w-100-m">

                            <div class="row10">

                                <div class=" col-12">
                                    <div class="box-detail mt20i">
                                        <h1 class="mg0">
                                            <span><?= $row_detail['ten_' . $lang] ?></span>
                                        </h1>
                                        <ul>

                                            <li>
                                                <div class="row10 d-flex">
                                                    <div class="col-12">
                                                        <i class="fa-regular fa-square-check mr5" style="color:var(--html-cl-website);"></i>&nbsp;Mã sản phẩm: <span class="desc-span"><?= ($row_detail['masp'] != '') ? $row_detail['masp'] : 'Đang cập nhật...' ?></span>
                                                    </div>
                                                </div>
                                            </li>


                                            <?php if ($list_detail["ten_$lang"] != '') { ?>
                                                <li>
                                                    <div class="row10 d-flex">
                                                        <div class="col-12">
                                                            <i class="fa-regular fa-square-check mr5" style="color:var(--html-cl-website);"></i>&nbsp;Danh mục: <span class="desc-span"><?= $list_detail["ten_$lang"] ?></span>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php } ?>

                                            <li>
                                                <div class="row10 d-flex">
                                                    <div class=" col-6">
                                                        <i class="fa-regular fa-square-check mr5" style="color:var(--html-cl-website);"></i>&nbsp;Lượt xem: <span class="desc-span"> <?= $row_detail['luotxem'] ?></span>
                                                    </div>
                                                    <div class="col-6">
                                                        <i class="fa-regular fa-square-check mr5" style="color:var(--html-cl-website);"></i>&nbsp;Tình trạng:
                                                        <span class="desc-span"><?= ($row_detail['id_loai'] == 1) ? 'Còn hàng' : 'Tạm hết hàng' ?></span>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="row10 d-flex flex-wrap">

                                                    <div class=" col-6 w-100-m mb-m-10">

                                                        <i class="fa-light fa-money-check-dollar-pen mr5" style="color:var(--html-cl-website);"></i> Giá bán: <span class="price-new-product" id="view-price-detail"><?= ($row_detail['giaban'] != 0) ? $func->changeMoney($row_detail['giaban'], $lang) : 'Liên hệ' ?></span>

                                                    </div>

                                                    <?php if ($row_detail['giacu'] != 0) { ?>

                                                        <div class=" col-6 w-100-m">

                                                            <i class="fa-light fa-money-check-dollar-pen mr5" style="color:var(--html-cl-website);"></i> Giá cũ: <span class="price-old-product "> <?= $func->changeMoney($row_detail['giacu'], $lang) ?></span>

                                                        </div>

                                                    <?php } ?>
                                                </div>
                                            </li>

                                            <?php /* <li>
                                                <div class="row10 d-flex">
                                                    <div class="item10 col-12">
                                                        <div class="contact-phone">
                                                            <ul>
                                                                <li class="w-100-m">
                                                                    <a target="_blank" href="https://zalo.me/<?=($row_detail['sodienthoai']!='') ? str_replace(' ','',$row_detail['sodienthoai']) : str_replace(' ','',$row_setting['hotline'])?>">
                                                                        <p class="mb0"> <i class="fa fa-comment" style="color:#fff"></i> Chat zalo</p>
                                                                        <p>Giải đáp hỗ trợ ngay tức thì</p> 
                                                                    </a>
                                                                </li>
                                                                <li class="mt10i w-100-m">
                                                                    <a target="_blank" href="https://m.me/<?=$row_setting['linkmessage']?>">
                                                                        <p class="mb0"> <i class="fa-brands fa-facebook" style="color:#fff;"></i> Chat facebook</p>
                                                                        <p>Giải đáp hỗ trợ ngay tức thì</p> 
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li> */ ?>

                                            <?php if (count($colors) > 0) : ?>
                                                <li class="attribute d-flex align-items-center" style="padding:0">
                                                    <span class="label__productdetails">Màu sắc:</span>
                                                    <ul class="color">
                                                        <?php foreach ($colors as $key => $value) { ?>
                                                            <li>
                                                                <a data-zoom-id="Zoom-1" href="<?= _upload_baiviet_l . $value['photo'] ?>" data-image="thumbs/600x600x1/<?= _upload_baiviet_l . $value['photo'] ?>" class="js-color tooltip p-relative" data-target="#color" data-value="<?= $value['id'] ?>" data-tooltip="<?= $value["ten"] ?>">
                                                                    <span style="background:<?= $value["color_image"] ?>"></span>
                                                                </a>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                    <?php if ($colors) { ?>
                                                        <input type="hidden" name="color" value="0" id="color" />
                                                    <?php } ?>
                                                </li>
                                            <?php endif ?>

                                            <?php if (count($sizes) > 0) : ?>

                                                <li class="attribute">

                                                    <span class="label__productdetails">Gói hàng: <span id="size-name"></span></span>

                                                    <div class="wrapper-size mt10">

                                                        <div class="row">

                                                            <?php foreach ($sizes as $key => $value) { ?>

                                                                <div class="col l-3 m-4 c-6 mb20">

                                                                    <div class="size__aside js-size" data-target="#size" data-type="size" data-value="<?= $value['id'] ?>" data-text="<?= $value["ten"] ?>">

                                                                        <div class="size__aside-header">

                                                                            <a href="javascript:void(0)">
                                                                                <?= $value['ten'] ?>
                                                                            </a>

                                                                        </div>

                                                                        <div class="size__aside-body">

                                                                            <span><?= ($value["giaban"] != 0) ? $func->changeMoney($value["giaban"], $lang) : 'Liên hệ'; ?></span>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            <?php } ?>

                                                        </div>

                                                    </div>

                                                    <?php if ($sizes) { ?>
                                                        <input type="hidden" name="size" value="0" id="size" />
                                                    <?php } ?>
                                                </li>
                                            <?php endif ?>

                                            <?php if ($config['cart-advance']) { ?>
                                                <li style="border:0">
                                                    <div class="bg-cart-fix d-flex justify-content-center align-items-center mt10 mb10 center">
                                                        <div class="d-flex justify-content-center align-items-center wrapper-qtycart">
                                                            <div class="mr5">Số lượng: </div>
                                                            <div class="mr10">
                                                                <span>
                                                                    <div class="wrap_qty">
                                                                        <span class="down" onclick="var result=document.getElementById('qty'); var qty=result.value; if(!isNaN(qty) && qty>1){result.value--}else{return false;}">-</span>
                                                                        <input type="text" class="input-text qty" name="quality" id="qty" value="1" title="Số lượng" maxlength="6" min="1">
                                                                        <span class="up" onclick="var result=document.getElementById('qty'); var qty=result.value; if(!isNaN(qty)){result.value++}else{return false;}">+</span>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <button type="button" data-el="#product-detail-<?= $row_detail['id'] ?>" class="btn-cart-css btn-addcart cs-pointer w-100i mt10i" data-qty="1" data-id="<?= $row_detail["id"] ?>">Thêm vào giỏ</button>
                                                        <button type="button" data-el="#product-detail-<?= $row_detail['id'] ?>" class="btn-cart-css btn-buynow cs-pointer w-100i mt10i">Mua ngay</button>

                                                    </div>
                                                </li>
                                            <?php } ?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="box-desc-detail mt20">

                        <div class="">

                            <div class="col-12">

                                <div class="page-product__content border d-flex justify-content-between d-block-m mt15">

                                    <div class="page-product__content-left bg-white col-12">

                                        <div class="page-product__detail">

                                            <div class="product-detail pd0i">

                                                <div class="title-content font-weight-bold">
                                                    Chi Tiết Sản Phẩm
                                                </div>

                                                <div class="box-detail-content p-relative">

                                                    <div class="wrapper-toc wrapper-content__news-detail mt20">

                                                        <div class="content ul-list-detail original" id="view-desc-detail">

                                                            <?= ($row_detail["noidung_$lang"] != '') ? htmlspecialchars_decode($row_detail["noidung_$lang"]) : '<p class="t-center">Nội dung đang được cập nhật....</p>' ?>

                                                            <?php if ($row_detail["noidung_$lang"] != '') { ?>

                                                                <div class="mt10">
                                                                    <?php include_once _source . 'shareLinks.php' ?>
                                                                </div>

                                                            <?php } ?>

                                                        </div>

                                                    </div>

                                                    <!-- <div class="bg-article nobackground"></div>

                                                    <div class="box-detail-content-btnview d-none">

                                                        <button id="click-viewdesc" data-target="#view-desc-detail">Xem thêm <i class="fa-sharp fa-solid fa-caret-down"></i></button>

                                                    </div> -->

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <?php include_once _layouts . 'left.php'; ?>

            </div>

        </form>

    </div>

</section>

<?php if (count($tintuc) > 0) { ?>

    <section class="wrapper-related-detail">

        <div class="grid wide">

            <div class="row">

                <div class="col l-12 m-12 c-12 mb20">


                    <div class="packaging-title__allpage packaging-title__allpage--small packaging-title__allpage--info">

                        <a href="san-pham" title="DANH MỤC SẢN PHẨM" aria-label="DANH MỤC SẢN PHẨM" role="link" rel="dofollow">

                            <span>Sản Phẩm Cùng Loại</span>

                        </a>
                        <div class="_underline"></div>
                    </div>


                </div>

                <div class=" owl-carousel owl-theme owl-carousel-loop quick-slide slider-product__detail col slider-flexbox" data-height="640" data-nav="0" data-loop="0" data-play="1" data-lg-items="4" data-md-items="3" data-sm-items="3" data-xs-items="2" data-dot="1" <?php if ($deviceType == 'computer') { ?> data-margin='20' <?php } else { ?> data-margin='8' <?php } ?> data-deplay="4000">


                    <?= $func->gridTemplateProduct($tintuc, 'packaging', 'pt10 pb10 d-flex flex-column flex-cl-1 mb20', 'h3', '291', '291') ?>


                </div>

            </div>

        </div>

    </section>

<?php } ?>

<script>
    _FRAMEWORK.magicZoomplus();
</script>