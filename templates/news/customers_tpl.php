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

<section class="section-news mt80 mb20 mt-m-20 mb-m-10 mb-m-10 mb-t-10">

    <div class="grid wide">

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

        <div class="row mt30 mt-m-20">

            <div class="col l-12 m-12 c-12 w-100-m w-100-t">

                <div class="row">

                <?php if(count($tintuc)>0){?>

                    <?php foreach($tintuc as $k => $value){

                        $seoDB = $seo->getSeoDB($value['id'],'baiviet','man',$value["type"]);
   
                        ?>

                        <div class="col l-3 m-4 c-6 mb30 mb-t-16 mb-m-8">

                           <div class="packaging-template__customers">

                              <div class="packaging-template__customers-img">

                                <span class="d-block p-relative">

                                    <img src="<?=_upload_baiviet_l.$value["photo"]?>" alt="<?=$value["ten_$lang"]?>">

                                    <div class="packaging-template__customers-overplay">

                                        <h3 class="packaging-template__customers-overplay-title line-2">

                                            <span><?=$value["ten_$lang"]?></span>

                                        </h3>

                                    </div>

                                </span>

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