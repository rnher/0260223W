<?php

	require_once 'ajaxConfig.php';

	$id_city=isset($_POST['id_city']) ? htmlspecialchars($_POST['id_city']): '';

    $id_dist=isset($_POST['id_dist']) ? htmlspecialchars($_POST['id_dist']): '';

    $keywords=isset($_POST['keywords']) ? htmlspecialchars($_POST['keywords']): '';

    $where='';

    if($id_city!=0){

        $where.=' and id_city=' . $id_city;

    }

    if($id_dist!=0){

        $where.=' and id_dist=' . $id_dist;

    }

    if($keywords!=''){

        $where.=" and ten_$lang like '%".$keywords."%'";

    }

    $orderby="order by stt asc, id desc";

    $results=$db->rawQuery("select * from #_map where hienthi=1$where $orderby");
?>

<?php foreach($results as $k => $v){?>
<div class="span6 span-sm-12">
    <div class="res--box--store d-flex">
        <div class="res--thumb--store mr20">
            <img width="160" height="160" src="<?=_upload_hinhanh_l.$v["photo"]?>" alt="<?=$v["ten_$lang"]?>" />
        </div>
        <div class="res--desc--store p-relative">
            <div class="res--name mb10">
                <h3><?=$v["ten_$lang"]?></h3>
            </div>
            <div class="res--location mb15 d-flex">
                <div class="res--thumb mr10">
                    <img src="assets/images/location-1.png" alt="Địa chỉ" />
                </div>
                <div class="res--font"><?=$v["diachi_$lang"]?></div>
            </div>
            <div class="res--phone d-flex">
                <div class="res--thumb mr10">
                    <img src="assets/images/icon-phone-1.png" alt="Số điện thoại" />
                </div>
                <div class="res--font"><?=$v["phone"]?></div>
            </div>
            <div class="res--mask--location">
                <a href="<?=$v["iframe_map"]?>" target="_blank" title="Tọa độ">
                    <img class="mr5" src="assets/images/icon-map-1.png" alt="Địa chỉ" />
                    <span><?= _chiduong ?></span>
                </a>
            </div>
        </div>
    </div>
</div>
<?php } ?>