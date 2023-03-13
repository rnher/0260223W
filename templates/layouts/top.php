<section class="wrap-top d-none-m d-none-tablet">
    <header class="pt10 pb10 d-none-m d-none-tablet d-none-tl <?= ($source != 'index') ? 'box-shadown__tpl' : '' ?>">

        <div class="grid wide">

            <div class="row align-items-center">

                <div class="col l-2 m-2 c-12 order-col1">

                    <div class="wrapper-header__logo p-relative">

                        <a href="" class="d-block p-relative ratio-logo-default">

                            <img width="118" height="80" class="ratio-img__default" src="<?= _upload_hinhanh_l . $logo["photo"] ?>" alt="Logo trang chủ">

                        </a>

                    </div>

                </div>

                <div class="col l-8 m-7 c-12 brand-group">

                    <div>
                        <p class="brand-name"><?= $row_setting["scrolltext1_$lang"] ?></p>
                    </div>
                    <div class="sub-brand-name d-flex">
                        <div class="sub-brand-name-group sub-brand-name-left d-flex">
                            <img class="i-3" src="assets/images/cup.png" alt="<?= $row_setting["name_$lang"] ?>">
                            <img class="i-2" src="assets/images/cup.png" alt="<?= $row_setting["name_$lang"] ?>">
                            <img class="i-1" src="assets/images/cup.png" alt="<?= $row_setting["name_$lang"] ?>">
                        </div>
                        <span>
                            <?= $row_setting["scrolltext2_$lang"] ?>
                        </span>
                        <div class="sub-brand-name-group sub-brand-name-right d-flex">
                            <img class="i-1" src="assets/images/cup.png" alt="<?= $row_setting["name_$lang"] ?>">
                            <img class="i-2" src="assets/images/cup.png" alt="<?= $row_setting["name_$lang"] ?>">
                            <img class="i-3" src="assets/images/cup.png" alt="<?= $row_setting["name_$lang"] ?>">
                        </div>
                    </div>

                </div>

                <div class="col l-2 m-3 c-12 order-col3-h">

                    <div class="wrapper-header__right">

                        <div class="wrapper-header__right-cart">

                            <a href="carts?src=gio-hang" title="Giỏ hàng" aria-label="Giỏ hàng" rel="nofollow" role="link">

                                <img width="50" height="50" src="./assets/images/icon-giohang1.png" alt="Giỏ hàng">
                                <div class="count-cart">
                                    ( <span class=" view-cart"><?= $cart->getTotalQuality() ?></span> )
                                </div>
                            </a>

                            <div class="cart-info-group">
                                <div class="view-info__price">
                                    <span class="view-price"><?= $cart->numbMoney($cart->getTotalOrder(), ' ₫'); ?></span>
                                </div>

                                <?php /*
                                <div class="view-info__dis">
                                    có <span class="view-cart"><?=$cart->getTotalQuality()?></span> sản phẩm trong giỏ hàng
                                </div>
                            */ ?>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </header>

</section>