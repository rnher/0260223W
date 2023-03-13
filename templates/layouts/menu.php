<nav class="wrapper-nav__menu d-none-m d-none-tablet">

    <ul class="nav-menu d-flex align-items-center">

        <li class="<?php if ($com == '' || $com == 'index') echo ' active'; ?>">
            <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>
            <?php } ?>
            <a href="" title="Trang chủ" aria-label="Trang chủ" role="link" rel="dofollow">
                <div>TRANG CHỦ</div>
            </a>
            <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>
                </h2>
            <?php } ?>
        </li>

        <?php if (count($list_c1_dv) > 0) { ?>
            <?php foreach ($list_c1_dv as $key => $vc1) {  ?>
                <li class="<?php if ($com == $func->slugUrl($vc1)) echo ' active'; ?> p-relative">
                    <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>
                        <h2>
                        <?php } ?>
                        <a href="<?= $func->slugUrl($vc1) ?>" title="<?= $vc1["ten"] ?>" rel="dofollow" aria-label="<?= $vc1["ten"] ?>" role="link">
                            <div><?= $vc1["ten"] ?></div>
                        </a>
                        <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>
                        </h2>
                    <?php } ?>

                    <ul class="">

                        <?php
                        $list_c2_dv = $db->rawQuery("select *,id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_cat where hienthi=1 and id_list=? order by stt asc,id desc", array($vc1['id']));
                        if (count($list_c2_dv) > 0) {
                        ?>
                            <?php foreach ($list_c2_dv as $key2 => $vc2) { ?>
                                <li class="p-relative">

                                    <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>

                                        <h3 class="mg0">

                                        <?php } ?>

                                        <a href="<?= $func->slugUrl($vc2) ?>" role="link" rel="dofollow" aria-label="<?= $vc2["ten"] ?>" title="<?= $vc2['ten'] ?>"><?= $vc2['ten'] ?></a>

                                        <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>

                                        </h3>

                                    <?php } ?>

                                    <?php
                                    $list_c3_dv = $db->rawQuery("select *,id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_item where hienthi=1 and id_list=? order by stt asc,id desc", array($vc2['id_list']));
                                    if (count($list_c3_dv) > 0) {
                                    ?>
                                        <ul>
                                            <?php
                                            foreach ($list_c3_dv as $key3 => $vc3) {
                                            ?>
                                                <li class="p-relative">

                                                    <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>

                                                        <h4 class="mg0">

                                                        <?php } ?>

                                                        <a href="<?= $func->slugUrl($vc3) ?>" rel="dofollow" title="<?= $vc3['ten'] ?>"><?= $vc3['ten'] ?></a>

                                                        <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>

                                                        </h4>

                                                    <?php } ?>
                                                </li>

                                            <?php } ?>

                                        </ul>

                                    <?php } ?>

                                </li>

                            <?php } ?>

                        <?php } ?>

                    </ul>

                </li>

            <?php } ?>
        <?php } ?>

        <li class="<?php if ($com == 'tin-tuc') echo ' active'; ?>">

            <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>

                <h2>

                <?php } ?>

                <a href="tin-tuc" title="Tin tức" rel="dofollow" aria-label="Tin tức" role="link">
                    <div>TIN TỨC</div>
                </a>

                <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>

                </h2>

            <?php } ?>

            <?php if (count($list_c1_tt) > 0) { ?>

                <ul class="">

                    <?php foreach ($list_c1_tt as $k => $v) {

                        $c2 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_cat where hienthi=1 and id_list=? order by stt asc,id desc", array($v['id']));

                    ?>
                        <li class="p-relative">

                            <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>

                                <h3 class="mg0">

                                <?php } ?>

                                <a href="<?= $v['type'] ?>/<?= $v['tenkhongdau'] ?>" role="link" rel="dofollow" aria-label="<?= $v["ten"] ?>" title="<?= $v['ten'] ?>"><?= $v['ten'] ?></a>

                                <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>

                                </h3>

                            <?php } ?>

                            <?php if (count($c2) > 0) { ?>

                                <ul>

                                    <?php

                                    foreach ($c2 as $key => $vc2) {

                                        $c3 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_item where hienthi=1 and id_cat=? order by stt asc,id desc", array($vc2['id']));

                                    ?>
                                        <li class="p-relative">

                                            <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>

                                                <h4 class="mg0">

                                                <?php } ?>

                                                <a href="<?= $v['type'] ?>/<?= $v['tenkhongdau'] ?>/<?= $vc2['tenkhongdau'] ?>" rel="dofollow" title="<?= $vc2['ten'] ?>"><?= $vc2['ten'] ?></a>

                                                <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>

                                                </h4>

                                            <?php } ?>

                                            <?php if (count($c3) > 0) { ?>

                                                <ul>

                                                    <?php
                                                    foreach ($c3 as $key => $vc3) {
                                                    ?>
                                                        <li>

                                                            <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>

                                                                <h5>

                                                                <?php } ?>

                                                                <a href="<?= $v['type'] ?>/<?= $v['tenkhongdau'] ?>/<?= $vc3['tenkhongdau'] ?>" role="link" rel="dofollow" title="<?= $vc3['ten'] ?>"><?= $vc3['ten'] ?></a>

                                                                <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>

                                                                </h5>

                                                            <?php } ?>

                                                        </li>

                                                    <?php } ?>

                                                </ul>

                                            <?php } ?>

                                        </li>

                                    <?php } ?>

                                </ul>

                            <?php } ?>

                        </li>

                    <?php } ?>

                </ul>

            <?php } ?>

        </li>

        <li class="<?php if ($com == 'lien-he') echo ' active'; ?> p-relative">

            <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>

                <h2>

                <?php } ?>

                <a href="lien-he" title="Liên hệ" rel="dofollow" aria-label="Liên hệ" role="link">
                    <div>LIÊN HỆ</div>
                </a>

                <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>

                </h2>

            <?php } ?>

        </li>

        <?php /*

        <li class="p-relative items-lastchild">

            <span class="search-Click">

                <i class="fa-light fa-magnifying-glass"></i>

            </span>

            <div class="nav-menu__formsearchheader d-flex align-items-center">

                <input role="text" data-role="search-input" type="text" name="keywords" id="keywordspc" placeholder="Tìm kiếm...">

                <button class="nav-menu__formsearchheader-button" data-btn-search-pc type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>

            </div>

        </li> 
        */ ?>

    </ul>

</nav>