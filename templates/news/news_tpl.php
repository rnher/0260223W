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

<section class="section-news mt80 mb20 mt-m-20 mb-m-10 mb-m-10 mb-t-10">

    <div class="grid wide">

        <div class="col l-12 m-12 c-12 mb40 mb-m-20 <?php if ($deviceType == "computer") { ?> wow rollIn <?php } ?>" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">

            <div class="pb20 packaging-title__allpage packaging-title__allpage--small packaging-title__allpage--info">

                <a title="TẤT CẢ BÀI VIẾT" aria-label="TẤT CẢ BÀI VIẾT" role="link" rel="dofollow">

                    <span>TẤT CẢ BÀI VIẾT</span>

                </a>
                <div class="_underline"></div>

            </div>

        </div>

        <div class="row mt30 mt-m-20">

            <div class="col l-12 m-12 c-12 w-100-m w-100-t">

                <div class="row">

                    <?php if (count($tintuc) > 0) { ?>

                        <?php foreach ($tintuc as $k => $value) {

                            $seoDB = $seo->getSeoDB($value['id'], 'baiviet', 'man', $value["type"]);

                        ?>

                            <div class="col l-6 m-6 c-6 mb20 mb-t-16 mb-m-8 d-flex flex-column">

                                <div class="packaging-news__box packaging-news__box-custom d-flex flex-cl-1">

                                    <div class="packaging-news__box-img">

                                        <a href="<?= $func->slugUrl($value) ?>" class="d-block hover-left cubic-img ratio-img" title="<?= $value["ten_$lang"] ?>" aria-label="<?= $value["ten_$lang"] ?>" role="link" rel="dofollow" img-width="393" img-height="262">

                                            <img class="ratio-img__content img-scale" width="393" height="262" src="<?= $imgDefault ?>" data-src="<?= _upload_baiviet_l . $value["photo"] ?>" alt="<?= $value["ten_$lang"] ?>">

                                        </a>

                                    </div>

                                    <div class="packaging-news__box-detail d-flex flex-column flex-cl-1">

                                        <div class="packaging-news__box-detail-title line-2 mg0 flex-cl-1">

                                            <a href="<?= $func->slugUrl($value) ?>" title="<?= $value["ten_$lang"] ?>" aria-label="<?= $value["ten_$lang"] ?>" role="link" rel="dofollow"><?= $value["ten_$lang"] ?></a>

                                        </div>

                                        <div class="packaging-news__box-detail-time">

                                            <span class="packaging-news__box-time-detail"><i class="fa-solid fa-calendar-range"></i> <?= ($value["ngaysua"] != 0) ? date('d/m/Y', $value["ngaysua"]) : date('d/m/Y', $value["ngaytao"]) ?></span>

                                            <span class="packaging-news__box-time-view d-none-m"><i class="fa-light fa-eye"></i> <?= $value["luotxem"] ?> Lượt xem</span>

                                        </div>

                                        <div class="packaging-news__box-detail-des line-3 mt10 mb10"><?= $seoDB["description_$lang"] ?></div>



                                    </div>

                                </div>

                            </div>

                        <?php } ?>

                    <?php } else { ?>

                        <div class="col l-12 m-12 c-12 mt20 mb20">
                            <p class="t-center">Nội dung đang được cập nhật....</p>
                        </div>

                    <?php } ?>

                </div>

            </div>

            <?php if (!$func->isAjax()) { ?>

                <div class="col l-12 m-12 c-12 mb20">

                    <div id="pagingPage"><?= $paging ?></div>

                </div>

            <?php } ?>

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