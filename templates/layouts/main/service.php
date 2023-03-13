<?php
$services = $db->rawQuery("select mota_$lang as mota,id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,type,photo,ngaytao,ngaysua from #_baiviet_list where hienthi=1 and type=? order by stt desc,id desc", array('dich-vu'));
$service_seo = $db->rawQueryOne("select id,mota_$lang as mota, title_$lang as title from #_seopage where  type=?", array("dich-vu"));
$service_bg = $func->OneDataPhoto(null, 'service-bg', 'limit 0,1', "array");
?>

<?php if (count($services) > 0) { ?>

    <section class="wrapper-news packaging-news packaging-service" <?php if ($service_bg) { ?> style="background:url('<?= _upload_hinhanh_l . $service_bg["photo"] ?>') no-repeat center center/cover;" <?php } ?>>

        <div class="grid wide">

            <div class="row">

                <div class="col l-12 m-12 c-12 mb40 mb20 <?php if ($deviceType == "computer") { ?> wow rollIn <?php } ?>" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">

                    <div class="mt40 packaging-title__allpage--info packaging-title__allpage packaging-title__allpage--small">

                        <a href="javascript:void(0)" title="<?= htmlspecialchars_decode($service_seo["title"]) ?>" aria-label="<?= htmlspecialchars_decode($service_seo["title"]) ?>" role="link" rel="dofollow">

                            <span> <?= htmlspecialchars_decode($service_seo["title"]) ?></span>

                        </a>

                        <div class="_underline"></div>

                    </div>

                    <div class="packaging-des__allpage">

                        <?= htmlspecialchars_decode($service_seo["mota"]) ?>

                    </div>

                </div>

                <div class="col l-12 m-12 c-12">


                    <div class="owl-carousel owl-theme owl-carousel-loop quick-slide slider-flexbox slider-customers owl-loaded owl-drag" data-height="640" data-nav="0" data-loop="0" data-play="1" data-lg-items="3" data-md-items="3" data-sm-items="3" data-xs-items="1" data-dot="1" <?php if ($deviceType == 'computer') { ?> data-margin='12' <?php } else { ?> data-margin='8' <?php } ?> data-deplay="4000">

                        <?php

                        foreach ($services as $key => $value) {
                            $seoDB = $seo->getSeoDB($value['id'], 'baiviet', 'man', $value["type"]);
                            $author = $db->rawQueryOne("select ten_$lang as ten from #_baiviet where hienthi=1 and type=? and id=? limit 1", array('tac-gia', $value["id_tacgia"]));
                        ?>

                            <div class="pt10 pb10 pr5 pl5">

                                <div class="wrapper-news__box ">

                                    <div class="wrapper-news__box-img p-relative">

                                        <a href="<?= $func->slugUrl($value) ?>/<?= $value["tenkhongdau"] ?>" rel="dofollow" role="link" title="<?= $value["ten"] ?>" aria-label="<?= $value["ten"] ?>" img-width="392" img-height="294" class="d-block hover-left ratio-cover ratio-img cubic-img">

                                            <img class="ratio-img__content img-scale" width="392" height="294" src="<?= $imgDefault ?>" data-src="<?= _upload_baiviet_l . $value["photo"] ?>" alt="<?= $value["ten"] ?>">

                                        </a>

                                    </div>

                                    <div class="wrapper-news__box-img-detail">

                                        <h3 class="wrapper-news__box-img-detai-title line-2 mg0 flex-cl-1">

                                            <a href="<?= $func->slugUrl($value) ?>/<?= $value["tenkhongdau"] ?>" rel="dofollow" role="link" title="<?= $value["ten"] ?>" aria-label="<?= $value["ten"] ?>"><?= $value["ten"] ?></a>

                                        </h3>

                                        <div class="wrapper-news__box-img-detail-description line-3">
                                            <?= htmlspecialchars_decode($value["mota"]) ?></div>

                                        <div class="wrapper-news__box-img-detail-view">

                                            <div class="packaging-btn__about">
                                                <a href="<?= $func->slugUrl($value) ?>" class=" btn hover-left" title=" <?= htmlspecialchars_decode($value["ten"]) ?>" aria-label="<?= htmlspecialchars_decode($value["ten"]) ?>" rel="nofollow" role="link">
                                                    <span class=""><?= _timhieuthem ?><span>
                                                </a>
                                            </div>

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