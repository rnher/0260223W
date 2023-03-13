<?php
$videos = $db->rawQuery("select id,ten_$lang as ten,photo,links from #_video where hienthi=1 and noibat=1 order by stt asc");
$video_seo = $db->rawQueryOne("select id,mota_$lang as mota, title_$lang as title from #_seopage where  type=?", array("video"));
$video_bg = $func->OneDataPhoto(null, 'video-bg', 'limit 0,1', "array");
?>

<?php if (count($procedures) > 0) { ?>

    <section class="wrapper-video" <?php if ($service_bg) { ?> style="background:url('<?= _upload_hinhanh_l . $service_bg["photo"] ?>') no-repeat center center/cover;" <?php } ?>>

        <div class="grid wide">

            <div class="row">

                <div class="col l-12 m-12 c-12 mb40 mb-m-20 <?php if ($deviceType == "computer") { ?> wow rollIn <?php } ?>" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">

                    <div class="packaging-title__allpage--info packaging-title__allpage packaging-title__allpage--small">

                        <a href="javascript:void(0)" title=" <?= htmlspecialchars_decode($procedure["ten"]) ?>" aria-label=" <?= htmlspecialchars_decode($procedure["ten"]) ?>" role="link" rel="dofollow">

                            <span> <?= htmlspecialchars_decode($video_seo["title"]) ?></span>

                        </a>

                        <div class="_underline"></div>

                    </div>

                    <div class="packaging-des__allpage">

                        <?= htmlspecialchars_decode($video_seo["mota"]) ?>

                    </div>

                </div>

                <div class="col l-12 m-12 c-12 packaging-services">
                    <div class="row">
                        <?php
                        foreach ($videos as $key => $value) {
                        ?>
                            <div class="col l-4 m-4 c-6 video-item" data-url="<?= $value["links"] ?>">
                                <div class="d-block hover-left ratio-cover ratio-img cubic-img">
                                    <img src="<?= _upload_hinhanh_l . $value["photo"] ?>" alt="<?= $value["ten"] ?>">
                                </div>
                            </div>

                        <?php } ?>
                    </div>
                </div>

            </div>

        </div>

    </section>

<?php } ?>