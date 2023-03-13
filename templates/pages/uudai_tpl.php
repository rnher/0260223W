<?php if($row_detail["photo"]!=''){ ?>

<section class="section-endow-banner">

    <div class="section-endow-banner__img">

        <span class="d-block hover-left ratio-img" img-width="1519" img-height="350">

            <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg" data-src="<?=_upload_hinhanh_l.$row_detail["photo"]?>" alt="<?=$row_detail["ten_$lang"]?>" <?=$func->errorImg()?>>

        </span>

    </div>

</section>

<?php }?>

<section class="section-endow">

    <div class="container">

        <div class="row">

            <div class="item col-12">

                <div class="breadcumb">

                    <?=$str_breadcrumbs?>

                </div>

            </div>

            <div class="item col-12">

                <div class="content mt10">

                    <div class="other-news">

                        <div class="ul-list-detail font-detail">

                            <div class="title-default p-relative mb-10 t-center">

                                <h1>

                                <span><?=$seo->getSeo('h1')?></span>

                                </h1>

                            </div>

                            <div class="detail mt50">

                                <?=htmlspecialchars_decode($row_detail['noidung_'.$lang])?>

                            </div>

                        </div>
                        
                        <div class="detail mt20">

                            <?php include_once _source.'shareLinks.php'?>
                            
                        </div>

                    </div>

                </div>

            </div>

        </div>
        
    </div>

</section>