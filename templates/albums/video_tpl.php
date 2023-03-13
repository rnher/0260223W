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

<section class="section-news mt80 mb20 mt-m-10 mb-m-10 mb-m-10 mb-t-10">

    <div class="grid wide">

        <?php /*<div class="row">

            <div class="col l-12 m-12 c-12 mb30 mb-m-30">

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

        <?php if($seo->getSeo('subject')!='' || $seo->getSeo('content')!=''){ ?>

        <div class="row">

            <div class="col l-12 m-12 c-12">

                <?php if($seo->getSeo('subject')!=''){ ?>

                <div class="box-description mt10">

                    <span><?=htmlspecialchars_decode($seo->getSeo('subject'))?></span>

                </div>
                
                <?php }?>

                <?php if($seo->getSeo('content')!=''){ ?>

                <div class="h__box__subject p-relative pb50">

                    <div class="wrapper-toc mt10 mb20">

                        <div class="content ul-list-detail">

                            <?=htmlspecialchars_decode($seo->getSeo('content'))?>

                        </div>

                    </div>

                </div>

                <?php }?>

            </div>

        </div>

        <?php }?>

        <div class="row mt30">

            <div class="col l-12 m-12 c-12 w-100-m w-100-t">

                <div class="row">

                <?php if(count($tintuc)>0){?>
                
                    <?php foreach($tintuc as $k => $value){ ?>

                        <div class="col l-4 m-6 c-12 mb30 mb-t-16">

                            <div class="packaging-video__box">

                                <?php
                                
                                $duoihinh = $func->getDuoiHinh(_upload_hinhanh_l.$value["photo"]);

                                if($duoihinh=='jpg' || $duoihinh=='jpeg' || $duoihinh=='png' || $duoihinh=='png'){ ?>

                                <div class="packaging-video__box-img">

                                    <a href="<?=$value["links"]?>" 
                                    role="button" 
                                    rel="nofollow" 
                                    title="<?=$value["ten_$lang"]?>" 
                                    aria-label="<?=$value["ten_$lang"]?>" 
                                    data-fancybox="videolist"
                                    class="d-block hover-left ratio-cover ratio-img"
                                    img-width="590"
                                    img-height="345">

                                        <img width="590" height="345" class="ratio-img__content img-scale" src="<?=$imgDefault?>"  data-src="<?=_upload_hinhanh_l.$value["photo"]?>" alt="<?=$value["ten_$lang"]?>">

                                        <span class="packaging-intro__right-img-playvideo">

                                            <i class="fa-regular fa-play-pause"></i>

                                        </span>

                                    </a>

                                </div>

                                <?php }else{ ?>
                                
                                    <div class="packaging-video__box-list">

                                        <video class="packaging-video__box-list-music" autoplay playsinline muted controls >

                                            <source src="<?=_upload_hinhanh_l.$value["photo"]?>" type="video/mp4">

                                        </video>

                                    </div>

                                <?php }?>

                                <div class="packaging-video__box-detail">

                                    <h3 class="packaging-video__box-detail-title line-2 mg0">

                                        <span><?=$value["ten_$lang"]?></span>

                                    </h3>

                                </div>

                            </div>

                        </div>

                    <?php }?>

                <?php }else{ ?>

                    <div class="col l-12 m-12 c-12 mt20 mb20">
                        <p class="t-center">Nội dung đang được cập nhật....</p>
                    </div>
                <?php }?>

                </div>

            </div>

            <?php if(!$func->isAjax()){?>

            <div class="col l-12 m-12 c-12 mb20">

                <div id="pagingPage"><?=$paging?></div>

            </div>

            <?php }?>
            
        </div>
        
    </div>

</section>