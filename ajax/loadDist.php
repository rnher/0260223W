<?php
	require_once 'ajaxConfig.php';
		
	@$id = (int)$_POST['id'];

	$lists = $db->rawQuery("select id, name_$lang as name from table_place_dists where id_city=".$id." order by id asc");

	$ch = '<option value="0">Chọn Quận/Huyện</option>';
	foreach ($lists as $key => $value) {

		$ch .= '<option value="'.$value['id'].'">'.$value['name'].'</option>';
		
	}

	echo $ch;
?>