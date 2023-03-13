<section class="section-top pt10 pb10 d-none d-block-m clearfix scroll-fixed d-block-tablet" mobile style="box-shadow:2px 2px 7px #ccc;background:#fff;">

    <div class="container">

        <div class="row">
            <div class="item col-12">
                <div class="box__menu__mobile">

                    <div class="logo__center">

                        <div class="menu-bar-res d-none d-block-m">

                            <a id="hamburger" href="#mmenu" title="Menu"><span></span></a>

                            <?php /* <span style="display:inline-block;margin-top:5px">Menu</span> */ ?>

                        </div>

                    </div>

                    <div class="logo__left">

                        <a href="" class="p-relative ratio-img d-block" img-width="106" img-height="80">

                            <img class="ratio-img__content" data-src="<?= _upload_hinhanh_l . $mobile_logo["photo"] ?>" src="<?= _upload_hinhanh_l . $mobile_logo["photo"] ?>" alt="Logo trang chủ">

                            <div class="star-box">

                                <img src="./assets/images/saolaplanh.png" class="saolaplanh star-animate" alt="Sao lấp lánh">

                            </div>

                        </a>

                    </div>

                    <div class="wrapper-header__left p-relative">

                        <?php   /*    include _layouts.'ggtranslate.php'; */ ?>

                        <!-- <span class="search-Click">

                            <i class="fa-light fa-magnifying-glass"></i>

                        </span>

                        <div class="nav-menu__formsearchheader d-flex align-items-center">

                            <input role="text" data-role="search-input" type="text" name="keywords" id="keywords-m" placeholder="Tìm kiếm...">

                            <button class="nav-menu__formsearchheader-button button-search-m" data-btn-search data-target="#keywords"><i class="fa-solid fa-magnifying-glass"></i></button>

                        </div> -->



                        <!-- <div class="logo__right">


                                <a href="carts?src=gio-hang" title="Giỏ hàng" aria-label="Giỏ hàng" rel="nofollow" role="link">

                                    <img width="50" height="50" src="./assets/images/icon-giohang1.png" alt="Giỏ hàng">
                                    <div class="count-cart">
                                        (<span class=" view-cart"><?= $cart->getTotalQuality() ?></span>)
                                    </div>
                                </a>

                        </div> -->

                    </div>

                </div>

            </div>
            <?php /* 
            <div class="item col-12">
                <div class="p-relative mt10">
                    <div class="box-search-mobile  position-relative">
                        <input type="text" name="keywords" id="keywords-m" role="search-input"
                            placeholder="Nhập từ khóa tìm kiếm" data-input-search data-target="desktop"
                            autocomplete="off" />
                        <button type="button" class="button-search-m" data-btn-search data-target="#keywords"><i
                                class="fa-light fa-magnifying-glass"></i></button>
                    </div>
                    <div class="search" data-box="desktop">
                    </div>
                </div>
            </div> */ ?>
        </div>

    </div>

</section>