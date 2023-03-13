<section class="section-news mt20 mb20 mt-m-10 mb-m-10 mb-m-10 mb-t-10">

    <div class="grid wide">

        <div class="row">

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
            
        </div>

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

                    <?php foreach($tintuc as $k => $v){

                        $seoDB = $seo->getSeoDB($v['id'],'baiviet','man',$v["type"]);
   
                        ?>    

                        <div class='col l-6 m-6 c-12 mb30 mb-m-0'>

                            <div class="wrappers-news__border">

                                <?php if($deviceType!='computer'){ ?>

                                <div class="d-none d-block-m mb10">

                                    <h3 class="wrappers-new__boxright-detail-title line-2 mg0">

                                        <a href="<?=$func->slugUrl($v)?>" role="link" aria-label="<?=$v["ten_$lang"]?>" rel="dofollow" title="<?=$v["ten_$lang"]?>"><?=$v["ten_$lang"]?></a>

                                    </h3>

                                </div>    

                                <?php }?>
            
                                <div class="wrappers-new__boxleft-detail-time mb10 d-none d-block-m">

                                    <span>

                                        <i class="fa-thin fa-timer"></i> <?=date('h:i A',$v["ngaytao"])?> - <?=date('d/m/Y',$v["ngaytao"])?>

                                    </span>

                                </div>

                                <div class="wrappers-new__boxright">

                                    <div class="wrappers-new__boxright-img">

                                        <a href="<?=$func->slugUrl($v)?>" role="link" aria-label="<?=$v["ten"]?>" rel="dofollow" class="d-block hover-left ratio-img"  img-width="257" img-height="187" title="<?=$v["ten"]?>">

                                            <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg" data-src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?= $row_setting["name_$lang"] ?>" <?=$func->errorImg()?>>

                                        </a>

                                    </div>
                                    
                                    <div class="wrappers-new__boxright-detail">

                                        <?php if($deviceType=='computer'){ ?>

                                        <h3 class="wrappers-new__boxright-detail-title line-2 mg0 d-none-m">

                                            <a href="<?=$func->slugUrl($v)?>" role="link" aria-label="<?=$v["ten_$lang"]?>" rel="dofollow" title="<?=$v["ten_$lang"]?>"><?=$v["ten_$lang"]?></a>

                                        </h3>

                                        <?php }?>

                                        <div class="wrappers-new__boxleft-detail-time mt10 d-none-m">

                                            <span>

                                                <i class="fa-thin fa-timer"></i> <?=date('h:i A',$v["ngaytao"])?> - <?=date('d/m/Y',$v["ngaytao"])?>

                                            </span>

                                        </div>

                                        <div class="wrappers-new__boxright-detail-des line-4"><?=$seoDB["description_$lang"]?></div>

                                        <div class="wrappers-new__boxleft-detail-view mt10">

                                            <a href="<?=$func->slugUrl($v)?>" rel="dofollow" role="link" aria-label="Tìm hiểu thêm" title="Tìm hiểu thêm"><?= _timhieuthem ?> <i class="fa-regular fa-arrow-right ml5"></i></a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    <?php }?>

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