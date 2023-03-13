<?php



?>

<section class="wrapper-news">

    <div class="grid wide">

        <div class="row">

            <div class="col l-12 m-12 c-12 mb40">


            </div>

            <div class="col l-12 m-12 c-12">

                <div class="owl-carousel owl-theme owl-carousel-loop quick-slide slider-flexbox" data-height="640" data-nav="0"

                    data-loop="0" data-play="1" data-lg-items="3" data-md-items="4" data-sm-items="4" data-xs-items="2" data-dot="1"

                    <?php if($deviceType=='computer'){ ?> data-margin='12' <?php }else{ ?>  data-margin='8' <?php }?> data-deplay="4000">

                    <?php 

                        foreach($news as $key => $value){

                            $seoDB = $seo->getSeoDB($value['id'],'baiviet','man',$value["type"]);

                            $author = $db->rawQueryOne("select ten_$lang as ten from #_baiviet where hienthi=1 and type=? and id=? limit 1",array('tac-gia',$value["id_tacgia"]));

                    ?>

                    <div class="pt10 pb10">

                        <div class="wrapper-news__box">

                            <div class="wrapper-news__box-img p-relative">

                                <a 
                                    href="<?=$func->slugUrl($value)?>/<?=$value["tenkhongdau"]?>" 
                                    rel="dofollow" 
                                    role="link" 
                                    title="<?=$value["ten"]?>"                              
                                    aria-label="<?=$value["ten"]?>"
                                    img-width="392"
                                    img-height="294"
                                    class="d-block ratio-cover ratio-img">

                                    <img class="ratio-img__content img-scale" width="392" height="294" src="<?=$imgDefault?>" data-src="<?=_upload_baiviet_l.$value["photo"]?>" alt="<?=$value["ten"]?>">

                                </a>

                                <div class="wrapper-news__box-time">

                                    <span class="wrapper-news__box-time-day"><?=($value["ngaysua"]!=0) ? date('d',$value["ngaysua"]):date('d',$value["ngaytao"])?></span>

                                    <span class="wrapper-news__box-time-monthyear"><?=($value["ngaysua"]!=0) ? date('m/Y',$value["ngaysua"]):date('m/Y',$value["ngaytao"])?></span>

                                </div>

                            </div>

                            <div class="wrapper-news__box-img-detail">

                                <div class="wrapper-news__box-img-detail-author">

                                    <ul class="wrapper-news__box-img-detail-author-list">

                                        <li class="wrapper-news__box-img-detail-author-items">

                                            <span class="wrapper-news__box-img-detail-author-detail"><i class="far fa-user"></i></span>

                                        </li>

                                        <li class="wrapper-news__box-img-detail-author-items">

                                            <span class="wrapper-news__box-img-detail-author-detail"><?=$author["ten"]?></span>

                                        </li>

                                        <li class="wrapper-news__box-img-detail-author-items">

                                            <span class="wrapper-news__box-img-detail-author-detail"><i class="fas fa-eye"></i> (<?=$value["luotxem"]?> <?=_luotxem?> )</span>

                                        </li>

                                    </ul>

                                </div>

                                <h3 class="wrapper-news__box-img-detai-title line-2 mg0 flex-cl-1">

                                    <a 
                                    href="<?=$func->slugUrl($value)?>/<?=$value["tenkhongdau"]?>" 
                                    rel="dofollow" 
                                    role="link" 
                                    title="<?=$value["ten"]?>"                              
                                    aria-label="<?=$value["ten"]?>"><?=$value["ten"]?></a>

                                </h3>

                                <div class="wrapper-news__box-img-detail-description line-3"><?=$seoDB["description_$lang"]?></div>

                                <div class="wrapper-news__box-img-detail-view">

                                    <a href="<?=$func->slugUrl($value)?>/<?=$value["tenkhongdau"]?>" 
                                    rel="dofollow" 
                                    role="link" 
                                    title="<?=$value["ten"]?>"           
                                    aria-label="<?=$value["ten"]?>"><?=_timhieuthem?></a>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php }?>

                </div>

            </div>

        </div>

    </div>

</section>