<?php

$row_tacgia = $db->rawQueryOne("select ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,photo,mota_$lang as mota,link_facebook,link_instagram,link_twitter,link_zalo,type,job_$lang as job from #_baiviet where hienthi=1 and type=? and id=? limit 0,1", array('tac-gia', $row_detail["id_tacgia"]));
$service_videos = $db->rawQuery("select * from #_video where hienthi=1 and type=? and id_list=?", array('video', $row_detail["id"]));
$relate_services = $db->rawQuery("select * from #_baiviet where  hienthi=1 and type=? and id_list=? and id_cat=? and id_item!=?", array('dich-vu', $row_detail["id_list"], $row_detail["id_cat"], $row_detail["id_item"]));
?>

<div id="fb-root"></div>

<script async defer src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6"></script>

<?php if ($banner_tpl) { ?>

    <section class="packaging-banner__allpage p-relative" style="background:url('<?= _upload_hinhanh_l . $banner_tpl["photo"] ?>') no-repeat center center/cover;background-attachment: fixed;">

        <div class="packaging-title__tpl">

            <h1 class="mg0">

                <span>

                    <?= $seo->getSeo('h1') ?>

                </span>

            </h1>

            <div class="mg0">

                <span>

                    <?php if ($seo->getSeo('description') != "") { ?>
                        <?= $seo->getSeo('description') ?>
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

<section class="wrapper-news__detail mt40 mt-m-20">

    <div class="grid wide">

        <div class="row view-intro">
            <div class="col l-12 m-12 c-12 ">
                <div class="row">
                    <div class="view-intro_view l-6 m-6 c-12 ">
                        <div class="owl-carousel owl-theme owl-carousel-loop quick-slide slider-flexbox slider-customers" data-height="420" data-nav="0" data-loop="0" data-play="1" data-lg-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-dot="1" <?php if ($deviceType == 'computer') { ?> data-margin='20' <?php } else { ?> data-margin='8' <?php } ?> data-deplay="<?= $time_slider ?>">
                            <?php foreach ($service_videos as $key => $value) {
                            ?>
                                <div class="video-item" data-url="<?= $value["links"] ?>">
                                    <div class="d-block hover-left ratio-cover ratio-img cubic-img">
                                        <img src="<?= _upload_hinhanh_l . $value["photo"] ?>" alt="<?= $value["ten"] ?>">
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col l-6 m-6 c-12 view-intro_des">
                        <?= htmlspecialchars_decode($row_detail["intro_$lang"]) ?>
                    </div>
                </div>
            </div>
        </div>

        <?php if (count($relate_services)) {

        ?>

            <div class="row relate-service-videos">

                <div class="col l-12 m-12 c-12 mb40 mb-m-20 <?php if ($deviceType == "computer") { ?> wow rollIn <?php } ?>" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">

                    <div class="pb20 packaging-title__allpage packaging-title__allpage--small packaging-title__allpage--info">

                        <a title="DỊCH VỤ LIÊN QUAN" aria-label="DỊCH VỤ LIÊN QUAN" role="link" rel="dofollow">

                            <span>DỊCH VỤ LIÊN QUAN</span>

                        </a>
                        <div class="_underline"></div>

                    </div>

                </div>

                <div class="col l-12 m-12 c-12 ">
                    <div class="owl-carousel owl-theme owl-carousel-loop quick-slide slider-flexbox slider-customers" data-height="420" data-nav="0" data-loop="0" data-play="1" data-lg-items="3" data-md-items="3" data-sm-items="2" data-xs-items="2" data-dot="1" <?php if ($deviceType == 'computer') { ?> data-margin='20' <?php } else { ?> data-margin='8' <?php } ?> data-deplay="<?= $time_slider ?>">
                        <?php foreach ($relate_services as $key => $value) {
                            $relate_service_video = $db->rawQueryOne("select * from #_video where  hienthi=1 and  noibat=1 and type=? and id_list=?", array('video', $value["id"]));

                        ?>
                            <div class="row">
                                <div class="col l-12 m-12 c-12 relate-service-videos_title">
                                    <a href="<?= $func->slugUrl($value) . $value["tenkhongdau_$lang"] ?>" rel="dofollow" role="link" title="<?= $value["ten_$lang"] ?>" aria-label="<?= $value["ten_$lang"] ?>">
                                        <?= htmlspecialchars_decode($value["ten_$lang"]) ?>
                                    </a>

                                </div>
                                <div class="col l-12 m-12 c-12 ">
                                    <div class="video-item" data-url="<?= $relate_service_video["links"] ?>">
                                        <div class="d-block hover-left ratio-cover ratio-img cubic-img">
                                            <img src="<?= _upload_hinhanh_l . $relate_service_video["photo"] ?>" alt="<?= $value["ten_$lang"] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>
                    </div>
                </div>
            </div>

        <?php

        }
        ?>

        <div class="row">


            <?php

            // if (count($tintuc) > 0) {

            //     $col = "col l-9 m-8 c-12";
            // } else {

            $col = "col l-12 m-12 c-12";
            // }

            ?>

            <div class="<?= $col ?>">

                <div class="content-detail mt20 clearfix">

                    <div class="other-news-detail font-detail">

                        <div class="detail">

                            <?php /*  <div class="title-default title-default--detail t-center mt-20 p-relative">

                                <h1><span><?=$seo->getSeo('h1')?></span></h1>

                            </div> */ ?>

                            <div class="pucblisher d-flex d-none-m">

                                <p class="mr30"><i class="fa fa-calendar mr5"></i> <?= $func->daysOfTheWeek($row_detail["ngaytao"]) ?>, <?= date('d/m/Y', $row_detail['ngaytao']) ?></p>

                                <p class="mr30"><i class="fa fa-user mr5"></i> <?= $row_tacgia["ten"] != '' ? $row_tacgia["ten"] : 'Administrator' ?></p>

                                <p><i class="fa fa-eye mr5"></i><?= $row_detail['luotxem'] ?></p>

                            </div>


                            <div class="d-none d-block-m">

                                <div class="pucblisher d-flex justify-content-between">

                                    <p class="mr30"><i class="fa fa-calendar mr5"></i> <?= date('d/m/Y', $row_detail['ngaytao']) ?>, <?= $row_tacgia["ten"] != '' ? $row_tacgia["ten"] : 'Administrator' ?></p>

                                    <p><i class="fa fa-eye mr5"></i><?= $row_detail['luotxem'] ?></p>

                                </div>

                            </div>

                            <div class="box-description mt20 original">

                                <span><?= htmlspecialchars_decode($seo->getSeo('content')) ?></span>

                            </div>

                            <div class="wrapper-toc wrapper-content__news-detail mt20">

                                <div class="content ul-list-detail original">

                                    <?= htmlspecialchars_decode($row_detail['noidung_' . $lang]) ?>

                                </div>

                            </div>

                        </div>

                        <div class="detail mt20">

                            <div class="wrap-aside__socical">

                                <span class="wrap-title__socialdetail">Chia sẻ:</span>

                                <div class="socialmediaicons">

                                    <?php include_once _source . 'shareLinks.php' ?>

                                </div>

                            </div>

                        </div>

                        <?php if ($row_tacgia) { ?>

                            <div class="wrappers-news-detail-author__aside mt20">

                                <div class="wrappers-news-detail__author">

                                    <div class="wrappers-news-detail__author-img">

                                        <a href="<?= $row_tacgia["type"] ?>/<?= $row_tacgia["tenkhongdau"] ?>" class="d-block hover-left" rel="dofollow" title="<?= $row_tacgia["ten"] ?>">

                                            <img src="<?= _upload_baiviet_l . $row_tacgia["photo"] ?>" alt="<?= $row_tacgia["ten"] ?>" <?= $func->errorImg() ?>>

                                        </a>

                                    </div>

                                    <div class="wrappers-news-detail__author-content">

                                        <div class="wrappers-news-detail__author-content-title mb10">

                                            <a href="<?= $row_tacgia["type"] ?>/<?= $row_tacgia["tenkhongdau"] ?>" rel="dofollow" title="<?= $row_tacgia["ten"] ?>"><?= $row_tacgia["ten"] ?></a>

                                        </div>

                                        <?php if ($row_tacgia["job"] != '') { ?>

                                            <div class="wrappers-news-detail__author-content-job mb10">
                                                <span><?= $row_tacgia["job"] ?></span>
                                            </div>

                                        <?php } ?>

                                        <div class="wrappers-news-detail__author-content-socical">

                                            <ul class="wrappers-news-detail__author-content-socical-list d-flex align-items-center">

                                                <li>

                                                    <a href="<?= $row_tacgia["link_facebook"] ?>" title="Link facebook" rel="nofollow" target="_blank">

                                                        <img src="./assets/images/socical-facebook.png" alt="<?= $row_setting["name_$lang"] ?>">

                                                    </a>

                                                </li>

                                                <li>

                                                    <a href="<?= $row_tacgia["link_zalo"] ?>" title="Link zalo" rel="nofollow" target="_blank">

                                                        <img src="./assets/images/socical-zalo.png" alt="<?= $row_setting["name_$lang"] ?>">

                                                    </a>

                                                </li>

                                                <li>

                                                    <a href="<?= $row_tacgia["link_instagram"] ?>" title="Link zalo" rel="nofollow" target="_blank">

                                                        <img src="./assets/images/socical-instagram.png" alt="<?= $row_setting["name_$lang"] ?>">

                                                    </a>

                                                </li>

                                                <li>

                                                    <a href="<?= $row_tacgia["link_twitter"] ?>" title="Link zalo" rel="nofollow" target="_blank">

                                                        <img src="./assets/images/socical-twitter.png" alt="<?= $row_setting["name_$lang"] ?>">

                                                    </a>

                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>

                                <div class="wrappers-news-detail__author-des mt20 mb20"><?= htmlspecialchars_decode($row_tacgia["mota"]) ?></div>

                                <div class="wrappers-news-detail__author-view w-100">

                                    <div class="wrappers-news-detail__author-view-btn t-right">

                                        <a href="<?= $row_tacgia["type"] ?>/<?= $row_tacgia["tenkhongdau"] ?>" rel="dofollow" title="<?= $row_tacgia["ten"] ?>">Chi tiết <i class="fa-light fa-chevrons-right ml5"></i></a>

                                    </div>

                                </div>

                            </div>

                        <?php } ?>

                        <div class="box-comment__detail mt20">

                            <div class="wrapper-toc">

                                <div class="fb-comments" data-href="<?= $func->getCurrentPageURL() ?>" data-width="100%" data-numposts="5"></div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <?php include _layouts . "rightdv.php"; ?>

        </div>

    </div>

</section>