<?php if ($banner_tpl) { ?>

<section class="packaging-banner__allpage p-relative" style="background:url('<?= _upload_hinhanh_l . $banner_tpl["photo"] ?>') no-repeat center center/cover;background-attachment: fixed;">

    <div class="packaging-title__tpl">

        <h1 class="mg0 title">

            <span>

                <?php if ($seo->getSeo('h1') != "") {  ?>
                    <?= $seo->getSeo('h1') ?>
                <?php } else {
                    echo $title_seo;
                } ?>

            </span>

        </h1>

        <div class="mg0">

            <span class="subject-title">

                <?php if ($seo->getSeo('subject') != "") { ?>
                    <?= htmlspecialchars_decode($seo->getSeo('subject')) ?>
                <?php } ?>

            </span>

        </div>

    </div>

    <div class="packaging-banner__breadcumb">

        <div class="grid wide">

            <div class="row">

                <div class="col l-12 m-12 c-12">

                    <div class="breadcumb">

                        <?= $str_breadcrumbs ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<?php } ?>

<section class="section-news mt20 mb20 mt-m-10 mb-m-10 mb-m-10 mb-t-10">

<div class="grid wide">

    <?php /* <div class="row">

        <div class="col l-12 m-12 c-12 mb30 mb-m-20">

            <div class="title-default t-center mb20 mb-m-10 mb-t-10 p-relative">

                <h1>

                    <span>  
                        <?php if($seo->getSeo('h1') != ""){?>
                        <?=$seo->getSeo('h1')?>
                        <?php }else{ echo $title_seo;}?>
                    </span>

                </h1>

            </div>

        </div>
        
    </div> */ ?>

    <div class="col l-12 m-12 c-12 mb40 mb-m-20 <?php if ($deviceType == "computer") { ?> wow rollIn <?php } ?>" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">

        <div class="pb20 packaging-title__allpage packaging-title__allpage--small packaging-title__allpage--info">

            <a title="TẤT CẢ BÀI VIẾT" aria-label="TẤT CẢ BÀI VIẾT" role="link" rel="dofollow">

                <span>TẤT CẢ BÀI VIẾT</span>

            </a>
            <div class="_underline"></div>

        </div>

    </div>

    <div class="row mt30">

        <div class="col l-12 m-12 c-12 w-100-m w-100-t">

            <div class="row">

                <?php if (count($tintuc) > 0) { ?>

                    <?php

                    /**
                     * 
                     * Func gridTemplateService(dữ liệu, class chính, phân chia cột,Thẻ H, ratioW, ratioH, class chỉnh sửa tách css)
                     * 
                     **/

                    ?>

                    <?= $func->gridTemplateService($tintuc, 'packaging', 'col l-4 m-4 c-6 mb20 mb-t-16 mb-m-8 d-flex flex-column', 'div', '420', '316') ?>


                <?php } ?>

            </div>

        </div>

        <?php if (!$func->isAjax()) { ?>

            <div class="col l-12 m-12 c-12 mb20">

                <div id="pagingPage"><?= $paging ?></div>

            </div>

        <?php } ?>

    </div>

    <?php if ($seo->getSeo('subject') != '' || $seo->getSeo('content') != '') { ?>

        <div class="col l-12 m-12 c-12 <?php if ($deviceType == "computer") { ?> wow fadeInRight <?php } ?>" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">

            <div class="wrapper-toc wrapper-content__news-detail mt20">

                <div class="content ul-list-detail original">

                    <?= htmlspecialchars_decode($seo->getSeo('content')) ?>

                </div>

            </div>
        </div>


    <?php } ?>
</div>

</section>

