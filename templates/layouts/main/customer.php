<?php
$customers = $func->AllData("id,noidung_$lang as noidung,rating,mota_$lang as mota,rating,", 'danh-gia-khach-hang', '', '', 'array');
$customer_seo = $db->rawQueryOne("select id,mota_$lang as mota, title_$lang as title from #_seopage where  type=?", array("danh-gia-khach-hang"));
$bg_khachhang = $func->OneDataPhoto(null,'bg-customer','limit 0,1',"array");


?>

<?php if (count($customers) > 0) { ?>

    <section class="packaging-customers" <?php if ($bg_khachhang) { ?> style="background:url('<?= _upload_hinhanh_l . $bg_khachhang["photo"] ?>') no-repeat center center/cover;" <?php } ?>>

        <div class="grid wide">

            <div class="row">

                <div class="col l-12 m-12 c-12">

                    <div class="packaging-title__allpage packaging-title__allpage--info mb40">

                        <a href="javascript:void(0)" rel="dofollow" role="button" aria-label="<?= htmlspecialchars_decode($customer_seo["title"]) ?>" title="Khách hàng nói gì về chúng tôi" class="cursor-default">

                            <span> <?= htmlspecialchars_decode($customer_seo["title"]) ?></span>

                        </a>

                        <div class="_underline"></div>

                    </div>

                    <div class="packaging-des__allpage">

                        <?= htmlspecialchars_decode($customer_seo["mota"]) ?>

                    </div>

                </div>

                <div class="col l-12 m-12 c-12 packaging-customers__aside">

                    <!-- <div class="packaging-customers__aside p-relative"> -->

                    <!-- <span class="packaging-customers__btn packaging-list--next"><i class="fa-regular fa-chevron-right"></i></span> -->

                    <!-- <span class="packaging-customers__btn packaging-list--prev"><i class="fa-regular fa-chevron-left"></i></span> -->

                    <div class="owl-carousel owl-theme owl-carousel-loop quick-slide slider-flexbox slider-customers" data-height="420" data-nav="0" data-loop="0" data-play="1" data-lg-items="2" data-md-items="2" data-sm-items="2" data-xs-items="1" data-dot="1" <?php if ($deviceType == 'computer') { ?> data-margin='20' <?php } else { ?> data-margin='8' <?php } ?> data-deplay="<?= $time_slider ?>">

                        <?php foreach ($customers as $key => $value) { ?>

                            <div class="pt10 pb10">

                                <div class="packaging-customers__box mb20">


                                    <div class="packaging-customers__box-avatar">

                                        <span class="d-block hover-left">

                                            <img src="<?= _upload_baiviet_l . $value["photo"] ?>" alt="<?= $value["ten"] ?>">

                                        </span>

                                    </div>

                                    <div class="packaging-customers_group">


                                        <div class="packaging-customers__box-detail">

                                            <div class="packaging-customers__box-detail-name">

                                                <span><?= $value["ten"] ?></span>

                                            </div>

                                            <div class="packaging-customers__box-detail-position">

                                                <span><?= $value["mota"] ?></span>

                                            </div>

                                            <div class="packaging-customers__box-detail-vote">

                                                <?= $func->getRatingComment($value["rating"]) ?>

                                            </div>

                                        </div>

                                        <div class="packaging-customers__box-review mb40"><?= htmlspecialchars_decode($value["noidung"]) ?></div>

                                    </div>
                                </div>

                            </div>

                        <?php } ?>

                    </div>

                    <!-- </div> -->

                </div>

            </div>

        </div>

    </section>

<?php } ?>