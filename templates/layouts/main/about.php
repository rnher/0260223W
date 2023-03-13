<?php
$about_1 = $db->rawQueryOne("select link_direct, mota_$lang as mota, id, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type,icon, photo from #_baiviet_list where hienthi=1   and type=? and tenkhongdau_$lang=? order by stt desc limit 0,1 ", array('gioi-thieu', 've-chung-toi'));
$about_items = $db->rawQuery("select link_direct,mota_$lang as mota, id, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type,icon, photo from #_baiviet where hienthi=1 and noibat=1 and type=? and id_list=? order by stt desc ", array('gioi-thieu', $about_1["id"]));
$home_about_bg = $func->OneDataPhoto(null, 'about-bg', 'limit 0,1', "array");
$home_about_img = $func->OneDataPhoto(null, 'about-sc-bg', 'limit 0,1', "array");
?>

<section class="packaging-introduce packaging-about" <?php if ($home_about_bg) { ?> style="background:url('<?= _upload_hinhanh_l . $home_about_bg["photo"] ?>') no-repeat center center/cover;" <?php } ?>>

    <div class="grid wide">

        <div class="row">
            <div class="col l-6 m-12 c-12">
            </div>
            <div class="col l-6 m-12 c-12">

                <div class="packaging-title__about packaging-title__allpage packaging-title__allpage--info mb40">

                    <a href="javascript:void(0)" rel="dofollow" role="link" aria-label="<?= htmlspecialchars_decode($about_1["ten"]) ?>" title="<?= htmlspecialchars_decode($about_1["ten"]) ?>">

                        <span <?php if ($deviceType == 'computer') { ?> class="wow zoomIn" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.3s" <?php } ?>>
                            <img src="<?= _upload_baiviet_l . $about_1["icon"] ?>" alt="<?= $about_1["ten"] ?>">
                            <?= htmlspecialchars_decode($about_1["ten"]) ?>
                        </span>

                    </a>

                </div>

                <div class="packaging-des__about mb20">
                    <?= htmlspecialchars_decode($about_1["mota"]) ?>

                    <?php if ($about_1["link_direct"]) { ?>
                        <div class="packaging-btn__about">
                            <a href="<?= $func->slugUrl($about_1) ?>" class=" btn hover-left" title=" <?= htmlspecialchars_decode($about_1["ten"]) ?>" aria-label="<?= htmlspecialchars_decode($about_1["ten"]) ?>" rel="nofollow" role="link">
                                <span class=""><?= _timhieuthem ?><span>
                            </a>
                        </div>
                    <?php } ?>

                </div>

                <div class="packaging-criteria__about">

                    <div class="row justify-content-center">


                        <?php foreach ($about_items as $key => $value) { ?>

                            <div class="col l-4 m-4 c-6 <?php if ($deviceType == 'computer') { ?> fadeInUp wow <?php } ?>" <?php if ($deviceType == 'computer') { ?> data-wow-delay="0.<?= $i + 1 ?>s" <?php } ?>>

                                <div class="wrapper-introduces__boxbottom d-flex flex-column flex-cl-1 mb20 ">

                                    <?php
                                    if ($value["link_direct"]) {
                                    ?>
                                        <a href="<?= $func->slugUrl($value) ?>" rel="dofollow" role="link" title="<?= $value["ten"] ?>" aria-label="<?= $value["ten"] ?>">
                                        <?php } ?>

                                        <div class=" wrapper-introduces__boxbottom-img wrapper-about__boxbottom-img">

                                            <span class="d-block ratio-img" img-width="55" img-height="55" style="--data-ratio:calc((55 / 55) * 100%);">

                                                <img class="ratio-img__content" src="<?= $imgDefault ?>" data-src="<?= _upload_baiviet_l . $value["icon"] ?>" alt="<?= $value["ten"] ?>">

                                            </span>

                                        </div>

                                        <div class="wrapper-introduces__boxbottom-detail d-flex flex-column flex-cl-1">

                                            <div class="wrapper-introduces__boxbottom-detail-title line-2 flex-cl-1">

                                                <span><?= $value["ten"] ?></span>

                                            </div>

                                            <span class="mt10"><?= htmlspecialchars_decode($value["mota"]) ?></span>


                                        </div>

                                </div>

                                <?php
                                if ($value["link_direct"]) {
                                ?>
                                    </a>

                                <?php } ?>

                            </div>

                        <?php } ?>

                        <div class="col l-4 m-4 c-6 <?php if ($deviceType == 'computer') { ?> fadeInUp wow <?php } ?>" <?php if ($deviceType == 'computer') { ?> <?php } ?>>

                            <img class="about-sc-bg ratio-img__content" src="<?= $imgDefault ?>" data-src="<?= _upload_hinhanh_l . $home_about_img["photo"] ?>" alt="<?= htmlspecialchars_decode($about_1["ten"]) ?>">

                        </div>

                    </div>

                </div>

            </div>

        </div>

</section>