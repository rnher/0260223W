<?php if($banner_tpl){ ?>

<section class="packaging-banner__allpage p-relative" style="background:url('<?=_upload_hinhanh_l.$banner_tpl["photo"]?>') no-repeat center center/cover;background-attachment: fixed;">

    <div class="packaging-title__tpl">

         <h1 class="mg0">

            <span>

                <?php if($seo->getSeo('h1') != ""){?>
                <?=$seo->getSeo('h1')?>
                <?php }else{ echo $title_seo;}?>

            </span>

        </h1>

    </div>

    <div class="packaging-banner__breadcumb">

        <div class="grid wide">

            <div class="row">

                <div class="col l-12 m-12 c-12">

                    <div class="breadcumb">

                        <?=$str_breadcrumbs?>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<?php }?>

<section class="mt40 mb40 mt-m-20 mb-m-20">

    <div class="container">

        <div class="row">

            <div class="item col-12">

                <div class="content mt10">

                    <div class="other-news">

                        <div class="ul-list-detail font-detail">

                          <?php /* <div class="title-default p-relative mb-10 t-center">

                                <h1>

                                <span><?=$seo->getSeo('h1')?></span>

                                </h1>

                            </div> */ ?>

                            <div class="detail mt-t-0 mt-m-0">

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