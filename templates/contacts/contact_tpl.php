<?php

$contact_bg = $func->OneDataPhoto(null, 'contact-bg', 'limit 0,1', "object");                        // Hình ảnh liên hệ
?>

<?php if ($banner_tpl) { ?>

    <section class="packaging-banner__allpage p-relative" style="background:url('<?= _upload_hinhanh_l . $banner_tpl["photo"] ?>') no-repeat center center/cover;background-attachment: fixed;">

        <div class="packaging-title__tpl">

            <h1 class="mg0 title">
                <span>

                    <?php if ($seo->getSeo('h1') != "") { ?>
                        <?= $seo->getSeo('h1') ?>
                    <?php } else {
                        echo $title_seo;
                    } ?>

                </span>

            </h1>

            <div class="mg0">

                <span class="subject-title">

                    <?php if ($seo->getSeo('subject') != "") { ?>
                        <?= htmlspecialchars_decode($seo->getSeo('subject')) ?>
                    <?php } ?>

                </span>

            </div>

        </div>

        <div class="packaging-banner__breadcumb">

            <div class="grid wide">

                <div class="row">

                    <div class="col l-12 m-12 c-12">

                        <div class="breadcumb">

                            <?= $str_breadcrumbs ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

<?php } ?>

<section class="mt40 mb40 mt-t-40 mt-m-20 mb-m-20">

    <div class="container">

        <div class="contact-main-page bg-white mt10 clearfix">

            <div class="wrapper-contact__aside-top mb20">

                <div class="row d-flex flex-wrap">

                    <div class="item col-6 w-100-m">

                        <div class="contact__top-img">

                            <span class="d-block hover-left ratio-img" img-width="570" img-height="300">

                                <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg" data-src="<?= _upload_hinhanh_l . $contact_bg->photo ?>" alt="Hình ảnh liên hệ" <?= $func->errorImg() ?>>

                            </span>

                        </div>

                    </div>


                    <div class="item col-6 w-100-m">

                        <div class="contact-page-side-content">

                            <h3 class="packaging-title__allpage--info packaging-title__allpage packaging-title__allpage--small contact-page-title t-uppercase"><?= _thongtinlienhe ?>

                                <div class="_underline"></div>
                            </h3>

                            <div class="contact-page-message mt30">

                                <?= htmlspecialchars_decode($row_contact['mota_' . $lang]) ?>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="box-contact pd10 clearfix">

                <div class="row d-flex flex-wrap">

                    <div class="item col-6 w-100-m w-100-t">

                        <div class="contact-form-content pt-sm-55 pt-xs-55">

                            <h3 class="packaging-title__allpage--info packaging-title__allpage packaging-title__allpage--small contact-page-title mg-0 t-uppercase">Gửi thư đến chúng tôi

                                <div class="_underline"></div>
                            </h3>

                            <div class="contact-form mt30">

                                <div class="row d-flex flex-wrap">

                                    <div class="item col-6 w-100-m">

                                        <div class="form-group">

                                            <input type="text" name="data[fullname]" class="css-input" id="customername" placeholder="Họ tên">

                                        </div>

                                        <div class="form-group">

                                            <input type="email" name="data[email]" class="css-input" id="customerEmail" required placeholder="Email">

                                        </div>

                                        <div class="form-group">

                                            <input type="number" name="data[phone]" class="txt-input-number css-input" id="customerPhone" required placeholder="Số điện thoại">

                                        </div>

                                        <div class="form-group">

                                            <input type="text" name="data[address]" class="customerAddress css-input" id="contactSubject" required placeholder="Địa chỉ">

                                        </div>

                                        <div class="form-group mt-30">

                                            <div class="box">

                                                <div class="row d-flex">

                                                    <div class="item col-5">

                                                        <img height="40" class="cs-pointer" src="img.php" onclick="$(this).attr('src', 'img.php?rand=' + Math.random())" alt="Mã capcha" />

                                                    </div>

                                                    <div class="item col-7">

                                                        <input type="text" name="data[capcha]" class="capcha css-input" id="contactCapcha" required placeholder="Nhập mã bảo mật">

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="item col-6 w-100-m">

                                        <div class="form-group">

                                            <textarea name="data[content]" id="contactMessage" class="css-input" placeholder="Nội dung"></textarea>

                                        </div>

                                        <div class="form-group">

                                            <button type="button" id="submit-contact" class="li-btn-3"><?= _guithongtin ?></button>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="item col-6 w-100-m w-100-t">

                        <div class="">

                            <div class="bg-white clearfix">

                                <div class="">

                                    <div id="google-map" class="mb10 o-hidden clearfix">

                                        <?= htmlspecialchars_decode($row_setting['iframe_map']) ?>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <?php if ($seo->getSeo('subject') != '' || $seo->getSeo('content') != '') { ?>

            <div class="col l-12 m-12 c-12 <?php if ($deviceType == "computer") { ?> wow fadeInRight <?php } ?>" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">

                <div class="wrapper-toc wrapper-content__news-detail mt20">

                    <div class="content ul-list-detail original">

                        <?= htmlspecialchars_decode($seo->getSeo('content')) ?>

                    </div>

                </div>
            </div>


        <?php } ?>

    </div>

</section>