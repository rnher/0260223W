<?php 
	require_once 'ajaxConfig.php';
	@$id = (int)$_POST['id'];
	
	$danhmuc_sanpham = $db->rawQuery("select id, name_$lang as name from table_place_dists where id_city=".$id." order by id asc");

	$ch = '<option value="0">Chọn quận huyện</option>';
	foreach ($danhmuc_sanpham as $key => $value) {
		$ch .= '<option value="'.$value['id'].'">'.$value['name'].'</option>';
	}

	echo $ch;
 ?>