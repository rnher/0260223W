<?php
$title_regis = $func->OneDataDes('title-regis', 'array');
$bg_regis = $func->OneDataPhoto(null, 'regis-bg', 'limit 0,1', "array");
$logo_regis = $func->OneDataPhoto(null, 'regis-logo', 'limit 0,1', "array");
?>

<section class="wrapper-formregis" <?php if ($bg_regis) { ?> style="background:url('<?= _upload_hinhanh_l . $bg_regis["photo"] ?>') no-repeat center center/cover;" <?php } ?>>

    <div class="grid wide">

        <div class="row">
            <div class="col l-6 m-6 c-12 mb-m-20">
                <div class="wrapper-formregis__info-group">

                </div>

            </div>

            <div class="col l-6 m-6 c-12 mb-m-20">

                <div class="wrapper-formregis__aside">

                    <div class="wrapper-formregis__description mb20"><?= htmlspecialchars_decode($title_regis["mota"]) ?></div>
                    <div class="wrapper-formregis__title">

                        <span><?= $title_regis["ten"] ?></span>

                    </div>
                    <div class="row">

                        <div class="col l-12 m-12 c-12 mb20">

                            <div class="wrapper-formregis__group">

                                <input type="text" name="regis-index-fullname" placeholder="Họ và Tên">

                            </div>

                        </div>

                        <div class="col l-12 m-12 c-12 mb20">

                            <div class="wrapper-formregis__group">

                                <input type="text" name="regis-index-phone" placeholder="Số điện thoại">

                            </div>

                        </div>

                        <div class="col l-12 m-12 c-12 mb30">

                            <div class="wrapper-formregis__group">

                                <input type="text" name="regis-index-email" placeholder="Email">

                            </div>

                        </div>

                        <!-- <div class="col l-12 m-12 c-12 mb20">

                            <div class="wrapper-formregis__group">

                                <select class="" name="regis-index-khuvuc">
                                    <option value=""><?= _tinhthanhpho ?></option>
                                    <?php foreach ($citys as $k => $v) { ?>
                                        <option value="<?= $v["id"] ?>"><?= $v["name"] ?></option>
                                    <?php } ?>
                                </select>

                            </div>

                        </div> -->



                        <div class="col l-12 m-12 c-12 mb20">

                            <div class="wrapper-formregis__group">

                                <textarea name="regis-index-content" id="" cols="30" rows="10" placeholder="Nội dung"></textarea>

                            </div>

                        </div>

                        <div class="col l-12 m-12 c-12 mb20">

                            <div class="wrapper-formregis__group wrapper-formregis__group-capcha row d-flex">

                                <div class=" col-12">

                                    <input type="text" name="regis-index-capcha" class="capcha css-input" id="contactCapcha" required placeholder="Nhập mã capcha">

                                </div>

                                <div class=" wrapper-formregis_capcha-image">

                                    <img height="40" class="cs-pointer" src="img.php" onclick="$(this).attr('src', 'img.php?rand=' + Math.random())" alt="Mã capcha" />

                                </div>

                            </div>

                        </div>


                        <div class="col l-12 m-12 c-12 mb20">

                            <div class="wrapper-formregis__group text-align-center">

                                <button class="btn hover-left" aria-label="Đăng ký ngay" id="submit_register" role="button">ĐĂNG KÝ NGAY</button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>