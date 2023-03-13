<?php	if(!defined('_source')) die("Error");
$folder=_upload_avatar;
switch($act){
	case "man":
		$apiProduct->getMans();
		$template = "flashsale/man/items";
		break;
	case "add":
		$template = "flashsale/man/item_add";
		break;
	case "edit":
		$apiProduct->getMan();
		$template = "flashsale/man/item_add";
		break;
	case "save":
		$apiProduct->saveMan();
		break;
	case "delete":
		$apiProduct->deleteManFlashsale();
		break;
	case "man_info":
		$apiProduct->getMans();
		$template = "flashsale/info/items";
		break;
	case "add_info":
		$template = "flashsale/info/item_add";
		break;
	case "edit_info":
		$apiProduct->getMan();
		$template = "flashsale/info/item_add";
		break;
	case "save_info":
		$apiProduct->saveMan();
		break;
	case "delete_info":
		$apiProduct->deleteManFlashInfo();
		break;
	default:
		$template = "index";
}
?>