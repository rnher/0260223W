<?php

    $policy = $func->AllData('id,id_list,','chinh-sach','',"",'array');

?>

<div class="item col-3 d-none-m d-none-tablet">

    <div class="mt30">

        <div class="header-sidebar">

            <span>Đặc Điểm Sản Phẩm</span>

        </div>

        <div class="body-sidebar pd10 p-relative">

            <div class="des">

                <?=htmlspecialchars_decode($row_detail["mota_$lang"])?>
            
            </div>
           
            <div class="box-under">

                <div style="font-weight:600;" class="t-center">Yêu Cầu Gọi Lại</div>
               
                <div class="letter-form">

                    <input type="number" autocomplete="off" name="txt-phone-detail" class="input-txt txt-input-number"
                        placeholder=" Nhập số điện thoại" />

                        <button type="button" class="btn-newsletter call-back__detail">Gửi</button>
                
                </div>

            </div>


        </div>

        <div class="header-sidebar mt20">

            <span>Chính Sách</span>

        </div>

        <div class="body-sidebar__policy">

            <ul class="giaohang">

                <?php foreach($policy as $key => $value){ ?>

                <li>

                    <a href="<?=$value["type"]?>/<?=$value["tenkhongdau"]?>" title="FREESHIP cho đơn trên 500.000 VNĐ ">

                        <div class="cs-giaohang">

                            <div class="thumb">

                                <img src="<?=_upload_baiviet_l.$value["photo"]?>" width="60" height="60" alt="FREESHIP cho đơn trên 500.000 VNĐ ">
                            </div>

                            <div class="content">

                                <p class="label"><?=$value["ten"]?></p>

                                <div class="desc original">
                                  <?=htmlspecialchars_decode($value["mota"])?>
                                </div>

                            </div>

                        </div>

                    </a>

                </li>

                <?php }?>
                
            </ul>
        </div>

    </div>

</div>