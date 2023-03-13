<?php
$intro_top = $func->AllDataPhoto("ten_$lang as ten,mota_$lang as mota,number,", 'intro-top', ' limit 0,5', 'array');
$intro_top_bg = $func->OneDataPhoto(null, 'intro-top-bg', 'limit 0,1', "array");
?>

<section class="packaging-introduce packaging-introduce-top" <?php if ($intro_top_bg) { ?> style="background:url('<?= _upload_hinhanh_l . $intro_top_bg["photo"] ?>') no-repeat center center/cover;" <?php } ?>>

    <div class="grid wide">

        <div class="row">

            <div class="col l-12 m-12 c-12">

                <div class="packaging-criteria__about packaging-criteria__about-top">

                    <div class="row justify-content-center">

                        <?php for ($i = 0; $i < count($intro_top); $i++) { ?>

                            <div class="col l-3 m-3 c-6 <?php if ($deviceType == 'computer') { ?> fadeInUp wow <?php } ?>" <?php if ($deviceType == 'computer') { ?> data-wow-delay="0.<?= $i + 1 ?>s" <?php } ?>>

                                <div class="wrapper-introduces__boxbottom d-flex flex-column flex-cl-1 mb20">

                                    <?php
                                    /*
                            <div class="wrapper-introduces__boxbottom-img">

                                    <span class="d-block ratio-img" img-width="114" img-height="86"
                                        style="--data-ratio:calc((78 / 78) * 100%);">

                                        <img class="ratio-img__content" src="<?= $imgDefault ?>"
                                            data-src="<?= _upload_hinhanh_l . $intro_top[$i]["photo"] ?>"
                                            alt="<?= $intro_top[$i]["ten"] ?>">

                                    </span>

                                </div>
                              */
                                    ?>

                                    <div class="wrapper-introduces__boxbottom-detail d-flex flex-column flex-cl-1">

                                        <span class="wrapper-introduces__boxbottom-detail-numb"><span id="count<?= $i ?>">0</span>+</span>

                                        <div class="wrapper-introduces__boxbottom-detail-title line-2 flex-cl-1">

                                            <span><?= $intro_top[$i]["ten"] ?></span>

                                        </div>

                                        <script>
                                            var mydiv<?= $i ?> = document.getElementById("count<?= $i ?>");
                                            var timeCurrent<?= $i ?> = <?= $intro_top[$i]["number"] ?>;
                                            var checkTime<?= $i ?> = 0;
                                            if (timeCurrent<?= $i ?> < 50) {
                                                checkTime<?= $i ?> = 100;
                                            } else {
                                                checkTime<?= $i ?> = 20;
                                            }
                                            var time<?= $i ?> = setInterval(getcounter, checkTime<?= $i ?>);

                                            function getcounter() {
                                                if (mydiv<?= $i ?>.textContent >= timeCurrent<?= $i ?>) {
                                                    clearInterval(time<?= $i ?>);
                                                } else {
                                                    mydiv<?= $i ?>.textContent++;
                                                }
                                            }
                                        </script>

                                    </div>

                                </div>

                            </div>

                        <?php } ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>