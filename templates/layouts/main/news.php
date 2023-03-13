<?php
$news = $db->rawQuery("select mota_$lang as mota,id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,type,id_list,photo,ngaytao,id_tacgia,luotxem,ngaytao,ngaysua from #_baiviet where hienthi=1 and noibat=1 and type=? order by stt desc,id desc", array('tin-tuc'));
$news_seo = $db->rawQueryOne("select id,mota_$lang as mota, title_$lang as title from #_seopage where  type=?", array("tin-tuc"));
$news_bg = $func->OneDataPhoto(null, 'news-bg', 'limit 0,1', "array");

?>

<?php if (count($news) > 0) { ?>

<section class="wrapper-news packaging-news" <?php if ($news_bg) { ?> style="background:url('<?= _upload_hinhanh_l . $news_bg["photo"] ?>') no-repeat center center/cover;" <?php } ?>>

    <div class="grid wide">

        <div class="row">

            <div class="col l-12 m-12 c-12 mb40 mb-m-20 <?php if ($deviceType == "computer") { ?> wow rollIn <?php } ?>" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">

                <div class="packaging-title__allpage--info packaging-title__allpage packaging-title__allpage--small">

                    <a href="javascript:void(0)" title="<?= htmlspecialchars_decode($news_seo["title"]) ?>" aria-label="<?= htmlspecialchars_decode($news_seo["title"]) ?>" role="link" rel="dofollow">

                    <span> <?= htmlspecialchars_decode($news_seo["title"]) ?></span>

                    </a>

                    <div class="_underline"></div>

                </div>

                <div class="packaging-des__allpage"><?= htmlspecialchars_decode($news_seo["mota"]) ?></div>

            </div>

            <div class="col l-12 m-12 c-12">

                <div class="owl-carousel owl-theme owl-carousel-loop quick-slide slider-flexbox" data-width="380" data-height="266" data-nav="0" data-loop="0" data-play="1" data-lg-items="3" data-md-items="3" data-sm-items="3" data-xs-items="1" data-dot="1" <?php if ($deviceType == 'computer') { ?> data-margin='12' <?php } else { ?> data-margin='8' <?php } ?> data-deplay="4000">

                    <?php

                    foreach ($news as $key => $value) {

                        $seoDB = $seo->getSeoDB($value['id'], 'baiviet', 'man', $value["type"]);
                        $author = $db->rawQueryOne("select ten_$lang as ten from #_baiviet where hienthi=1 and type=? and id=? limit 1", array('tac-gia', $value["id_tacgia"]));

                    ?>

                        <div class="pt10 pb10 mr5 ml5">

                            <div class="wrapper-news__box hover-left">

                                <div class="wrapper-news__box-img p-relative">

                                    <a href="<?= $func->slugUrl($value) ?>" rel="dofollow" role="link" title="<?= $value["ten"] ?>" aria-label="<?= $value["ten"] ?>" img-width="380" img-height="266" class="d-block ratio-cover ratio-img">

                                        <img class="ratio-img__content img-scale" width="380" height="266" src="<?= $imgDefault ?>" data-src="<?= _upload_baiviet_l . $value["photo"] ?>" alt="<?= $value["ten"] ?>">

                                    </a>

                                </div>

                                <div class="wrapper-news__box-img-detail">

                                    <div class="wrapper-news__box-img-detail-author">

                                        <ul class="wrapper-news__box-img-detail-author-list">

                                            <li class="wrapper-news__box-img-detail-author-items">

                                                <span class="wrapper-news__box-img-detail-author-detail"><i class="far fa-user"></i> <?= $author["ten"] ?></span>

                                            </li>

                                            <li class="wrapper-news__box-img-detail-author-items">

                                                <span class="wrapper-news__box-img-detail-author-detail"><i class="fas fa-timer"></i> <?= ($value["ngaysua"] != 0) ? date('h:m d/m/Y', $value["ngaysua"]) : date('h:m d/m/Y', $value["ngaytao"]) ?> </span>

                                            </li>

                                        </ul>

                                    </div>

                                    <h3 class="wrapper-news__box-img-detai-title line-2 mg0 flex-cl-1">

                                        <a href="<?= $func->slugUrl($value) ?>" rel="dofollow" role="link" title="<?= $value["ten"] ?>" aria-label="<?= $value["ten"] ?>"><?= $value["ten"] ?></a>

                                    </h3>

                                    <div class="wrapper-news__box-img-detail-description line-3"><?= htmlspecialchars_decode($seoDB["description_$lang"]) ?></div>

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