<?php

  require_once 'ajaxConfig.php';

  include_once "class_paging_ajax.php";

  if(isset($_REQUEST["id_list"]))

    {
     
        $result = $db->rawQuery("select ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,photo,type,id_list,id from #_baiviet where hienthi=1 and type=? and id_list=? order by stt asc",array('dich-vu',$_REQUEST["id_list"]));
     
    }

?>

<?php if(count($result)>0){ ?>

<div class="p-relative wow fadeInLeft" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">

    <div class="owl-carousel owl-theme owl-carousel-loop quick-slide slider-service" data-height="640" data-nav="0"

    data-loop="1" data-play="1" data-lg-items="2" data-md-items="2" data-sm-items="3" data-xs-items="2" data-dot="1"

    <?php if($deviceType=='computer'){ ?> data-margin='40' <?php }else{ ?>  data-margin='8' <?php }?> data-deplay="4000">

        <?php foreach($result as $key => $value){

            $seoDB = $seo->getSeoDB($value['id'],'baiviet','man',$value["type"]);
            
            ?>

        <div class="pt10 pb10">
            
            <div class="technology-services__box mb20">

                <div class="technology-services__box-img">

                    <a href="<?=$func->slugUrl($value)?>" class="d-block hover-left ratio-img" title="<?=$value["ten"]?>" role="link" rel="dofollow" img-width="426" img-height="318">

                        <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg" data-src="<?=_upload_baiviet_l.$value["photo"]?>" alt="<?=$value["ten"]?>">

                    </a>

                </div>

                <div class="technology-services__box-detail">

                    <div class="technology-services__box-detail-aside p-relative mb30 mb-m-20">

                        <h4 class="technology-services__box-detail-title line-2">

                            <a href="<?=$func->slugUrl($value)?>" title="<?=$value["ten"]?>" role="link" rel="dofollow"><?=$value["ten"]?></a>

                        </h4>

                    </div>

                    <div class="technology-services__box-detail-des line-2">

                        <?=$seoDB["description_$lang"]?>

                    </div>

                </div>

            </div>

        </div>

        <?php }?>

    </div>

</div>  

<?php }else{ ?>

<div class="t-center">

    <p>Nội dung đang được cập nhật...</p>

</div>

<?php }?>

<script>
    $(()=>{
        
        var owlQuick = $('.owl-carousel.quick-slide');

		owlQuick.each( function(){

			var xs_item = $(this).attr('data-xs-items');

			var md_item = $(this).attr('data-md-items');

			var lg_item = $(this).attr('data-lg-items');

			var sm_item = $(this).attr('data-sm-items');	

			var margin=$(this).attr('data-margin');

			var dot=$(this).attr('data-dot');

			var nav=$(this).attr('data-nav');

			var height=$(this).attr('data-height');

			var play=$(this).attr('data-play');

			var loop=$(this).attr('data-loop');

			var delay=$(this).attr('data-delay');

			

			if (typeof margin !== typeof undefined && margin !== false) {    

			} else{

				margin = 30;

			}

			if (typeof xs_item !== typeof undefined && xs_item !== false) {    

			} else{

				xs_item = 1;

			}

			if (typeof sm_item !== typeof undefined && sm_item !== false) {    



			} else{

				sm_item = 3;

			}	

			if (typeof md_item !== typeof undefined && md_item !== false) {    

			} else{

				md_item = 3;

			}

			if (typeof lg_item !== typeof undefined && lg_item !== false) {    

			} else{

				lg_item = 3;

			}



			if (loop == 1) { loop = true; } else{ loop = false; }

			if (dot == 1) { dot = true; } else{ dot = false; }

			if (nav == 1) { nav = true; } else{ nav = false; }

			if (play == 1) { play = true; } else{ play = false; }

			

			$(this).owlCarousel({

				loop: loop,

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,

				navText: ['<span aria-label="Previous"></span>','<span aria-label="Next"></span>'],

				autoplay:play,

				autoplayTimeout: delay,

				smartSpeed: 200,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item),	

					},

					600:{

						items:Number(sm_item),			


					},

					1000:{

						items:Number(md_item)				

					},

					1200:{

						items:Number(lg_item)				

					}

				}

			})

		});
    })
</script>