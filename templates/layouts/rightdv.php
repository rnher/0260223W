<?php

    $products = $func->AllData('id,id_list,','san-pham',' and noibat=1','','array');

?>

<div class="col l-3 m-4 c-12">

    <div class="wrapper-featured__news mt30">

        <?php if(count($tintuc)>0){ ?>

        <div class="sidebar__head">

            <span><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;Dịch Vụ Khác</span>
            <div class="_underline"></div>
            
        </div>

        <ul class="wrapper-packaging__menuright-list mt20">

            <?php foreach($tintuc as $key => $value){ ?>
                
            <li class="wrapper-packaging__menuright-item">

                <a href="<?=$value["type"]?>/<?=$value["tenkhongdau"]?>" title="<?=$value["ten_$lang"]?>" aria-label="<?=$value["ten_$lang"]?>" role="link" rel="dofollow"><?=$value["ten_$lang"]?>  <i class="fa-light fa-chevron-right"></i></a>

            </li>

            <?php }?>
                                        
        </ul>

        <?php }?>

        <?php if(count($products)>0){ ?>

        <div class="sidebar__head mt30">

            <span><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;Sản Phẩm Nổi Bật</span>
            <div class="_underline"></div>
        
        </div>

        <div class="wrapper-packaging__productmenu mt20">

            <div class="row">

                <?php foreach($products as $key => $value){ ?>

                <div class="col l-4 m-4 c-6 mb10">

                    <div class="wrapper-packaging__productmenu-box">

                        <a  href="<?=$func->slugUrl($value)?>"
                            title="<?=$value["ten"]?>"
                            aria-label="<?=$value["ten"]?>"
                            img-width="291"
                            img-height="291"
                            class="d-block hover-left ratio-cover ratio-img cubic-img">

                            <img 
                                class="ratio-img__content img-scale"
                                width="291" 
                                height="291" 
                                src="<?=$imgDefault?>" 
                                data-src="<?=_upload_baiviet_l.$value["photo"]?>" 
                                alt="<?=$value["ten"]?>">

                        </a>

                    </div>

                </div>

                <?php }?>

            </div>

        </div>

        <?php }?>

    </div>

</div>