<header class="wrapper-header d-none-m d-none-tablet d-none-tl <?= ($source != 'index') ? 'box-shadown__tpl' : '' ?>">

    <div class="grid wide inner-header">

        <div class="row align-items-center justify-content-center">

            <div class="col l-3 m-3 c-12 order-col1">

                <div class="wrapper-header__logo p-relative">

                    <a href="" class="d-block p-relative ratio-logo-default">

                        <img width="228" height="50" class="ratio-img__default" src="<?= _upload_hinhanh_l . $logo["photo"] ?>" alt="Logo trang chủ">

                    </a>

                </div>

            </div>

            <div class="col l-8 m-8 c-12">

                <?php include _layouts . 'menu.php'; ?>

            </div>

            <div class="col l-1 m-1 c-12 order-col3-h">

                <!-- <div class="wrapper-header__right">

                    <div class="wrapper-header__topr-search">

                        <input role="text" data-role="search-input" type="text" name="keywords" id="keywordspc" placeholder="Tìm kiếm...">

                        <button class="wrapper-header__topright-search-btn" data-btn-search-pc type="submit"><i class="fa-light fa-magnifying-glass"></i></button>

                    </div>

                </div> -->
                <button class="wrapper-header__topright-search-btn" data-btn-search-pc type="submit"><i class="fa-light fa-magnifying-glass"></i></button>

            </div>

        </div>

    </div>

</header>