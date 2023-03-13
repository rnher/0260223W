<?php
$mangxahoi = $db->rawQuery("select photo_$lang as photo,ten_$lang as ten,link from #_photo where hienthi=1 and type=? order by stt asc,id desc", array("mangxahoi-footer"));
$logo_footer = $db->rawQueryOne("select photo_$lang from #_bannerqc where hienthi=1 and type=? limit 0,1", array('logo-footer'));
$row_setting = $db->rawQueryOne("select * from #_setting limit 0,1");

$footer_bg = $func->OneDataPhoto(null, 'footer-bg', 'limit 0,1', "array");

$service_seo = $db->rawQueryOne("select id,mota_$lang as mota, title_$lang as title from #_seopage where  type=?", array("dich-vu"));
$services = $db->rawQuery("select mota_$lang as mota,id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,type,photo,ngaytao,ngaysua from #_baiviet_list where hienthi=1 and type=? order by stt desc,id desc", array('dich-vu'));

?>

<footer class="wrapper-footer" <?php if ($footer_bg) { ?> style="background:url('<?= _upload_hinhanh_l . $footer_bg["photo"] ?>') no-repeat center center/cover;" <?php } ?>>

    <div class="grid wide">

        <div class="row">

            <div class="col l-4 m-6 c-12 mb-m-50">

                <div class="wrapper-footer__box">

                    <div class="wrapper-footer__box-title">

                        <a href="" class="d-block " title="<?= $row_setting["name_$lang"] ?>" aria-label="<?= $row_setting["name_$lang"] ?>" role="link" rel="dofollow">

                            <img class="logo-footer" src="<?= _upload_hinhanh_l . $logo_footer["photo_$lang"] ?>" alt="<?= $row_setting["name_$lang"] ?>">

                        </a>

                    </div>

                    <div class="wrapper-footer__box-detail mt30">

                        <div class="wrapper-footer__box-detail-des"><?= htmlspecialchars_decode($footer["mota"]) ?></div>

                    </div>

                </div>

            </div>

            <div class="col l-3 m-6 c-12 mb-m-50">

                <div class="wrapper-footer__box">

                    <div class="wrapper-footer__box-title">

                        <span><?= _chinhsach ?></span>

                    </div>

                    <div class="wrapper-footer__box-detail mt30">

                        <ul class="wrapper-footer__box-detail-list">

                            <?php foreach ($chinhsach as $key => $value) : ?>

                                <li class="wrapper-footer__box-detait-items">

                                    <a class="wrapper-footer__box-detail-link" href="<?= $func->slugUrl($value) ?>/<?= $value["tenkhongdau"] ?>" title="<?= $value["ten"] ?>" aria-label="<?= $value["ten"] ?>" role="link" rel="dofollow"><?= $value["ten"] ?></a>

                                </li>

                            <?php endforeach ?>

                        </ul>

                    </div>

                </div>

            </div>

            <div class="col l-3 m-6 c-12 mb-m-50">

                <div class="wrapper-footer__box">

                    <div class="wrapper-footer__box-title">

                        <span><?= htmlspecialchars_decode($service_seo["title"]) ?></span>

                    </div>

                    <div class="wrapper-footer__box-detail mt30">

                        <div class="wrapper-footer__box-detail-scrollbar">

                            <ul class="wrapper-footer__box-detail-list">

                                <?php foreach ($services as $key => $value) : ?>

                                    <li class="wrapper-footer__box-detait-items">

                                        <a class="wrapper-footer__box-detail-link" href="<?= $func->slugUrl($value) ?>" title="<?= $value["ten"] ?>" aria-label="<?= $value["ten"] ?>" role="link" rel="dofollow"><?= $value["ten"] ?></a>

                                    </li>

                                <?php endforeach ?>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>



            <div class="col l-2 m-6 c-12">

                <div class="wrapper-footer__box">

                    <div class="wrapper-footer__box-title">

                        <span><?= _about ?></span>

                    </div>

                    <div class="wrapper-footer__box-detail mt30">

                        <div class="wrapper-footer__box-detail-socical">

                            <?php foreach ($mangxahoi as $key => $value) { ?>

                                <a href="<?= $value["link"] ?>" target="_blank" class="wrapper-footer__box-detail-socical-box mb20" title="<?= $value["ten"] ?>">

                                    <div class="wrapper-footer__box-detail-socical-img">

                                        <span class="d-block ratio-scale">

                                            <img src="<?= _upload_hinhanh_l . $value["photo"] ?>" alt="<?= $value["ten"] ?>">

                                        </span>

                                    </div>

                                    <div class="wrapper-footer__box-detail-socical-info">

                                        <div class="box-detail-socical-info__title line-2">

                                            <span><?= $value["ten"] ?></span>

                                        </div>

                                        <div class="box-detail-socical-info__title-sub box-detail-socical-info__title line-2">

                                            <span>Liên kết với chúng tôi</span>

                                        </div>

                                    </div>

                                </a>

                            <?php } ?>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col l-12 m-12 c-12">

                <div class="content-copy pt20 pb20 d-flex justify-content-center flex-wrap align-items-center">

                    <div class="copy-text cl-white">Copyright &copy; 2023 - <b class="copy-text--company"><?= $row_setting['name_' . $lang] ?></b>. All

                        rights reserved.

                        <a href="https://i-web.vn/" class="cl-white" target="_blank" title="">Design

                            by

                            i-web.vn</a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</footer>

<div class="hotline-right hidden-xs show js-active d-none-tablet d-none-m" data-target="#support-content">
    <i class="fab fa-whatsapp fab-hothotline1"></i>
    <p style="font-family:var(--monts-light),Arial, Helvetica, sans-serif;">Hotline</p>
    <div class="support-content" id="support-content">
        <ul class="hotline-group">
            <?php foreach($hotline as $key => $value){?>
                <li>
                    <p><?= $value['ten']?></p>
                    <p class="line"><a href="https://zalo.me/<?=str_replace('.','',str_replace(' ','',$value['phone']))?>"><?= $value['phone']?></a></p>
                </li>
            <?php }?>
        </ul>
    </div>
</div>
