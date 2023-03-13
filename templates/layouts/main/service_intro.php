<?php
$service_intro = $db->rawQueryOne("select mota_$lang as mota, id, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau, type, icon, photo from #_baiviet_list where hienthi=1  and type=? and tenkhongdau_$lang=? order by stt desc limit 0,1 ", array('gioi-thieu', 'gioi-thieu-dich-vu'));
$service_intro_items = $db->rawQuery("select link_direct,link, mota_$lang as mota, id, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau, type, icon, photo from #_baiviet where hienthi=1 and noibat=1 and type=? and id_list=? order by stt asc ", array('gioi-thieu', $service_intro["id"]));
$service_into_bg = null;

?>

<section class="packaging-introduce packaging-introduce_service" <?php if ($service_into_bg) { ?> style="background:url('<?= _upload_hinhanh_l . $service_into_bg["photo"] ?>') no-repeat center center/cover;" <?php } ?>>

    <div class="grid wide">

        <?php
        $i = false;
        foreach ($service_intro_items as $index => $value) {
        ?>
            <div class="packaging-introduce_service-item row index<?=$i?>">
                <?php if ($i) { ?>
                    <div class="col l-6 m-6 c-12 packaging-introduce_service-item_img hover-left">
                        <?php if ($value["link"]) { ?>
                            <object>
                                <param name="movie" value="//www.youtube.com/v/<?= $func->getYoutube($value['link']) ?>?version=3&amp;hl=vi_VN&amp;rel=0">
                                </param>
                                <param name="allowFullScreen" value="true">
                                </param>
                                <param name="allowscriptaccess" value="always">
                                </param><embed src="//www.youtube.com/v/<?= $func->getYoutube($value['link']) ?>?version=3&amp;hl=vi_VN&amp;rel=0" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" wmode="transparent"></embed>
                            </object>
                        <?php } else { ?>
                            <img class="ratio-img__content " width="291" height="291" src="<?= $imgDefault ?>" data-src="<?= _upload_baiviet_l . $value["photo"] ?>" alt="<?= $value["ten"] ?>">
                        <?php } ?>

                    </div>
                    <div class="col l-6 m-6 c-12 packaging-introduce_service-item_group">
                        <div class="">

                            <div class="packaging-introduce_service-item_title">
                                <img src="<?= _upload_baiviet_l . $value["icon"] ?>" alt="<?= $value["ten"] ?>">
                                <h3><?= htmlspecialchars_decode($value["ten"]) ?></h3>
                            </div>
                            <div class="packaging-introduce_service-item_des">
                                <?= htmlspecialchars_decode($value["mota"]) ?>
                            </div>

                            <?php if ($value["link_direct"]) { ?>
                                <div class="packaging-btn__about">
                                    <a href="<?= $func->slugUrl($value) ?>" class=" btn hover-left" title=" <?= htmlspecialchars_decode($value["ten"]) ?>" aria-label="<?= htmlspecialchars_decode($value["ten"]) ?>" rel="nofollow" role="link">
                                        <span class=""><?= _timhieuthem ?><span>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>

                    </div>
                <?php } else { ?>

                    <div class="col l-6 m-6 c-12 packaging-introduce_service-item_group">
                        <div class="">

                            <div class="packaging-introduce_service-item_title">
                                <img src="<?= _upload_baiviet_l . $value["icon"] ?>" alt="<?= $value["ten"] ?>">
                                <h3><?= htmlspecialchars_decode($value["ten"]) ?></h3>
                            </div>
                            <div class="packaging-introduce_service-item_des">
                                <?= htmlspecialchars_decode($value["mota"]) ?>
                            </div>

                            <?php if ($value["link_direct"]) { ?>
                                <div class="packaging-btn__about">
                                    <a href="<?= $func->slugUrl($value) ?>" class=" btn hover-left" title=" <?= htmlspecialchars_decode($value["ten"]) ?>" aria-label="<?= htmlspecialchars_decode($value["ten"]) ?>" rel="nofollow" role="link">
                                        <span class=""><?= _timhieuthem ?><span>
                                    </a>
                                </div>
                            <?php } ?>

                        </div>

                    </div>

                    <div class="col l-6 m-6 c-12 packaging-introduce_service-item_img hover-left">
                        <?php if ($value["link"]) { ?>

                            <object>
                                <param name="movie" value="//www.youtube.com/v/<?= $func->getYoutube($value['link']) ?>?version=3&amp;hl=vi_VN&amp;rel=0">
                                </param>
                                <param name="allowFullScreen" value="true">
                                </param>
                                <param name="allowscriptaccess" value="always">
                                </param><embed src="//www.youtube.com/v/<?= $func->getYoutube($value['link']) ?>?version=3&amp;hl=vi_VN&amp;rel=0" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" wmode="transparent"></embed>
                            </object>

                        <?php } else { ?>
                            <img class="ratio-img__content " width="291" height="291" src="<?= $imgDefault ?>" data-src="<?= _upload_baiviet_l . $value["photo"] ?>" alt="<?= $value["ten"] ?>">
                        <?php } ?>
                    </div>
                <?php } ?>

            </div>
        <?php $i = !$i;
        } ?>
    </div>
</section>