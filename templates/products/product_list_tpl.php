<?php

if ($banner_tpl) { ?>

    <section class="packaging-banner__allpage p-relative" style="background:url('<?= _upload_hinhanh_l . $banner_tpl["photo"] ?>') no-repeat center center/cover;background-attachment: fixed;">
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

    </section>

<?php } ?>

<section class="mt40 mt-m-20">

    <?php if (count($list_c1) > 0) { ?>
        <section class="packaging-product <?php if ($deviceType == "computer") { ?> wow fadeInRight <?php } ?>" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">

            <div class="grid wide">

                <div class="row">

                    <div class="col l-12 m-12 c-12 mb40 mb-m-20 <?php if ($deviceType == "computer") { ?> wow rollIn <?php } ?>" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">

                        <div class="packaging-title__allpage packaging-title__allpage--small packaging-title__allpage--info">

                            <a href="san-pham" title="DANH MỤC SẢN PHẨM" aria-label="DANH MỤC SẢN PHẨM" role="link" rel="dofollow">

                                <span>DANH MỤC SẢN PHẨM</span>

                            </a>
                            <div class="_underline"></div>
                        </div>

                        <div class="packaging-des__allpage"><?= htmlspecialchars_decode($title_new["mota"]) ?></div>

                    </div>

                    <div class="col l-12 m-12 c-12 <?php if ($deviceType == "computer") { ?> wow fadeInRight <?php } ?>" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">

                        <div class=" owl-carousel owl-theme owl-carousel-loop quick-slide slider-flexbox" data-height="640" data-loop="0" data-nav="0" data-play="1" data-lg-items="4" data-md-items="3" data-sm-items="3" data-xs-items="2" data-dot="1" <?php if ($deviceType == 'computer') { ?> data-margin='20' <?php } else { ?> data-margin='8' <?php } ?> data-deplay="<?= $time_slider ?>">

                            <?php foreach ($list_c1 as $key => $value) {
                            ?>

                                <div class="pt10 pb10 d-flex flex-column flex-cl-1 fadeInLeft wow" data-wow-delay="0.<?= $key + 1 ?>s">

                                    <div class="packaging-news__box mb20 d-flex flex-column flex-cl-1">

                                        <div class="packaging-news__box-img">

                                            <a href="<?= $func->slugUrl($value) ?>" class="d-block hover-left cubic-img ratio-img" title="<?= $value["ten"] ?>" aria-label="<?= $value["ten"] ?>" role="link" rel="dofollow" img-width="316" img-height="336">

                                                <img class="ratio-img__content img-scale" width="316" height="336" src="<?= $imgDefault ?>" data-src="<?= _upload_baiviet_l . $value["photo"] ?>" alt="<?= $value["ten"] ?>">

                                            </a>

                                        </div>

                                        <div class="packaging-news__box-detail packaging-catalog__box d-flex flex-column flex-cl-1">

                                            <div class="packaging-news__box-detail-title line-2 mg0 flex-cl-1">

                                                <a href="<?= $func->slugUrl($value) ?>" title="<?= $value["ten"] ?>" aria-label="<?= $value["ten"] ?>" role="link" rel="dofollow"><?= $value["ten"] ?></a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            <?php } ?>



                        </div>
                    </div>

                </div>

            </div>

        </section>
    <?php } ?>

    <div class="grid wide">

        <div class="mt30 mt-m-20">


            <div class="row">

                <div class="col l-12 m-12 c-12 mb40 mb-m-20 <?php if ($deviceType == "computer") { ?> wow rollIn <?php } ?>" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">

                    <div class="packaging-title__allpage packaging-title__allpage--small packaging-title__allpage--info">

                        <a href="san-pham" title="TẤT CẢ SẢN PHẨM" aria-label="TẤT CẢ SẢN PHẨM" role="link" rel="dofollow">

                            <span>TẤT CẢ SẢN PHẨM</span>

                        </a>
                        <div class="_underline"></div>

                    </div>

                </div>

                <div class="col l-12 m-12 c-12 <?php if ($deviceType == "computer") { ?> wow fadeInRight <?php } ?>" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">

                    <section class="packaging-product">
                        <div class="">

                            <div id="view-product-list-1">

                                <script>
                                    $(() => {

                                        _FRAMEWORK.pagingData(1, <?= $row_setting['page_in'] ?>, "ajax_paging.php",

                                            0, 0, 'san-pham', '#view-product-list-1');


                                    });
                                </script>

                            </div>

                        </div>

                    </section>
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