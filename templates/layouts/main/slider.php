<?php
$slider = $db->rawQuery("select ten_$lang as ten,photo_$lang photo,link,mota_$lang as mota from #_photo where hienthi=1 and type=? order by stt asc,id desc", array('slider'));

$row_setting = $db->rawQueryOne("select * from #_setting limit 0,1");

?>

<section id="slider-top" class="clearfix p-relative">

    <?php if ($row_setting["slider_web"] == 1) { ?>

        <section class="slider-videoupload p-relative">

            <div class="full-slider__video-overflow" id="video__slider">

                <video width="100%" playsinline class="video-slider__index" autoplay muted controls loop>

                    <source src="<?= _upload_hinhanh_l . $row_setting["photo"] ?>" type="video/mp4">

                </video>

            </div>

        </section>

    <?php } else { ?>


        <div class="">



            <div class="  row maxSlider">

                <div class=" l-12 m-12 c-12 box-slider">

                    <div class="slider-left1">

                        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1440px;height:786px;overflow:hidden;visibility:hidden;">

                            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1440px;height:786px;overflow:hidden;">

                                <?php foreach ($slider as $k => $v) {
                                    $stt++; ?>

                                    <div data-idle="<?= $row_setting["time_slider"] ?>">

                                        <a href="<?= $v['link'] != '' ? $v["link"] : 'javascript:void(0)' ?>" title="<?= $v['ten'] ?>" rel="nofollow" target="_blank" role="link" class="ratio-img d-block" img-width="1150" img-height="660"><img width="1150" height="660" class="ratio-img__content img-scale" data-u="image" src="<?= $imgDefault ?>" data-src="<?= _upload_hinhanh_l . $v['photo'] ?>" alt="<?= $v['ten'] ?>" <?= $func->errorImg() ?> /></a>

                                       <div class="boxslider_details d-none-m">

                                            <div class="boxslider_details__des mb20">

                                                <span class="boxslider_details__des-content"><?= htmlspecialchars_decode($v["mota"]) ?></span>

                                            </div>

                                            <?php if (!empty($v["link"])) { ?>

                                                <div class="boxslider-details__btn">

                                                    <a href="lien-he" role="link" rel="dofollow" title="<?=_lienhengay?>" aria-label="<?=_lienhengay?>" class="wrapper-btn-outline__fullpage hover-left">LIÊN HỆ NGAY</a>

                                                    <a href="tel:<?= str_replace(',', '', str_replace(' ', '', str_replace('.', '', $row_setting["hotline"]))) ?>" class="paint-introduce__boxright-btn-contact">

                                                        <div class="paint-introduce__boxright-btn-contact-img">

                                                            <span class="d-block">

                                                                <img width="44" height="44" src="./assets/images/icon/icon-hotline.svg" alt="Icon hotline">

                                                            </span>

                                                        </div>

                                                        <div class="paint-introduce__boxright-btn-contact-info">

                                                            <span class="paint-introduce__boxright-btn-contact-info-title"><?=_lienhengay?></span>

                                                            <span class="paint-introduce__boxright-btn-contact-info-phone"><?= $row_setting["hotline"] ?></span>

                                                        </div>

                                                    </a>
                                                </div>

                                            <?php } ?>

                                        </div>

                                    </div>

                                <?php } ?>

                            </div>

                            <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:16px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                                <div data-u="prototype" class="i" style="width:14px;height:14px;">
                                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                        <circle class="b" cx="8000" cy="8000" r="5000"></circle>
                                    </svg>
                                </div>
                            </div>

                            <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                                    <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                                    <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
                                </svg>
                            </div>
                            <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                                    <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                                    <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
                                </svg>
                            </div>
                        </div>

                    </div>

                </div>

                <script>
                    $(function() {

                        jssor_1_slider_init();

                    });
                </script>
            </div>

        <?php } ?>

</section>