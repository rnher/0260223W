<?php

  require_once 'ajaxConfig.php';

  include_once "class_paging_ajax.php";

  if(isset($_REQUEST["page"]))

    {
      $idcat = "";
      
      $cond = [];

      $idlist = "";
      if($_REQUEST["id_list"]>0){
        $idlist = " and id_list= ?";
        array_push($cond,$_REQUEST["id_list"]);
      }
      if($_REQUEST["id_cat"]>0){
        $idcat = " and id_cat = ? ";
        array_push($cond,$_REQUEST["id_cat"]);
      }

      $type = $_REQUEST['type'];

      array_push($cond,$type);

      $str_van = "select *,tenkhongdau_$lang as tenkhongdau from #_baiviet where hienthi=1 ".$idlist." ".$idcat." and noibat=1 and type=? order by stt asc,noibat asc,id desc";
  
      $paging = new paging_ajax();

      $paging->class_pagination = "pagination";

      $paging->class_active = "active";

      $paging->class_inactive = "inactive";

      $paging->class_go_button = "go_button";

      $paging->class_text_total = "total";

      $paging->class_txt_goto = "txt_go_button";

      $paging->cond = $cond;

        $paging->per_page = $_REQUEST['per_page'];   

        $sotrang=$_REQUEST['per_page'];

        $paging->page = $_REQUEST["page"];

      $paging->text_sql = $str_van;

        $result_pag_data = $paging->GetResult();

        $hotlineDetail = str_replace(' ','',str_replace(',','',$row_setting["hotline"]));

    }

?>


<?php
if($_REQUEST["page"] !="1"){
  
    echo $func->gridTemplateService($result_pag_data,'packaging','col l-3 m-4 c-6 mb20 mb-t-16 mb-m-8 d-flex flex-column fadeInDown wow','h5','291','291');
?> 
 
    <?php if($paging->getRow()>$_REQUEST['per_page']){?>
      <div class="col l-12 c-12 m-12 t-center">
        <?= $paging->Load()?>
      </div>
    <?php }else{?>
        <!-- <div class="col l-12 c-12 m-12 t-center">
            <p style="Arial, Helvetica, sans-serif;">Nội dung đang được cập nhật...</p>
        </div> -->
    <?php }?>
<?php
 
  }else {

?> 




<div class="row mt-m-30 view-list">

<?php

    if(count($result_pag_data)>0){

      
      // echo $func->gridTemplateService($items, 'packaging', 'col l-4 m-4 c-6 mb20 mb-t-16 mb-m-8 d-flex flex-column', 'div', '420', '316');
      
      echo $func->gridTemplateService($result_pag_data,'packaging','col l-3 m-4 c-6 mb20 mb-t-16 mb-m-8 d-flex flex-column fadeInDown wow','h5','291','291');
      // echo $func->gridTemplateProduct($result_pag_data,'packaging','col l-3 m-4 c-6 mb20 mb-t-16 mb-m-8 d-flex flex-column fadeInDown wow','h5','291','291');

      /*foreach ($result_pag_data as $key => $value){ ?>
  
    <div class="col l-3 m-4 c-6 mb20 mb-t-16 mb-m-8 d-flex flex-column fadeInDown wow" data-wow-delay="0.<?=$key+1?>s">
                        
        <div class="refrigeration-product__box d-flex flex-column flex-cl-1">

            <div class="refrigeration-product__box-img">

                <a href="<?=$func->slugUrl($value)?>"
                    title="<?=$value["ten_$lang"]?>"
                    aria-label="<?=$value["ten_$lang"]?>"
                    role="link"
                    rel="dofollow"
                    class="d-block hover-left ratio-cover ratio-img cubic-img"
                    img-width="291"
                    img-height="291">

                    <img 
                    class="ratio-img__content img-scale" 
                    width="291"
                    height="291"
                    src="<?=$imgDefault?>" 
                    data-src="<?=_upload_baiviet_l.$value["photo"]?>" 
                    alt="<?=$value["ten"]?>">

                </a>

            </div>

            <div class="refrigeration-product__box-detail d-flex flex-column flex-cl-1">

                <h5 class="refrigeration-product__box-detail-title line-2 mg0 flex-cl-1">

                    <a 
                    href="<?=$func->slugUrl($value)?>"
                    title="<?=$value["ten_$lang"]?>"
                    aria-label="<?=$value["ten_$lang"]?>"
                    role="link"
                    rel="dofollow"><?=$value["ten_$lang"]?></a>

                </h5>

                <div class="refrigeration-product__box-detail-slogan line-1">
                  <span><?=$value["slogan"]?></span>
                </div>

                <div class="refrigeration-product__box-detail-price">

                    <span class="refrigeration-product__box-detail-price-new"><?=($value["giaban"]!=0) ? $func->changeMoney($value["giaban"],$lang):'<a href="tel:'.$hotlineDetail.'" title="Liên hệ: '.$row_setting["hotline"].'"><span class="price-title__line">Liên hệ: </span> <strong class="price-title__phone">'.$row_setting["hotline"].'</strong></a>';?></span>

                </div>

            </div>

        </div>

    </div>

    

  <?php } */ ?>

  <?php if($paging->getRow()>$_REQUEST['per_page']){?>
    <div class="col l-12 c-12 m-12 t-center">
      <?= $paging->Load()?>
    </div>
  <?php }}else{?>
      <!-- <div class="col l-12 c-12 m-12 t-center">
          <p style="Arial, Helvetica, sans-serif;">Nội dung đang được cập nhật...</p>
      </div> -->
  <?php }?>

</div>





<?php

  }

?>
