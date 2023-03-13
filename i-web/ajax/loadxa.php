<?php 
	require_once 'ajaxConfig.php';
	@$id = (int)$_POST['id'];
	
	$danhmuc_sanpham = $d->rawQuery("select id, name_$lang as name from table_place_wards where id_dist=".$id."  order by id asc");

	$ch = '<option value="0">Chọn phường xã</option>';
	foreach ($danhmuc_sanpham as $key => $value) {
		$ch .= '<option value="'.$value['id'].'">'.$value['name'].'</option>';
	}

	echo $ch;
 ?>