<?php

include_once _source . "defaults.php";


// check url

$func->checkURL();

$func->checkUrlRedirect();

// counter

/* Watermark */

$wtmNews = $db->rawQueryOne("select hienthi, photo_$lang as photo,options from #_bannerqc where type=? limit 0,1", array('watermark'));

/* Router */

$router->setBasePath($config['website']['url']);

$router->map('GET', array('i-web/', 'i-web'), function () {
	global $func, $config;
	$func->redirect($config['website']['url'] . "i-web/index.html");
	exit;
});
$router->map('GET', array('i-web', 'i-web'), function () {
	global $func, $config;
	$func->redirect($config['website']['url'] . "i-web/index.html");
	exit;
});
$router->map('GET|POST', '', 'index', 'home');
$router->map('GET|POST', 'index.php', 'index', 'index');
$router->map('GET|POST', 'sitemap.xml', 'sitemap', 'sitemap');
// $router->map('GET|POST', 'carts.js', 'carts', 'carts');
$router->map('GET|POST', 'users.js', 'users', 'users');
$router->map('GET|POST', '[a:com]', '', '');
// $router->map('GET|POST', '[a:com]/[a:lang]/', '', 'lang');
$router->map('GET|POST', '[a:com]/[a:act]', '', '');
$router->map('GET|POST', '[a:com]/[a:catalogy]/[a:act]', '', '');

$router->map('GET', _thumbs . '/[i:w]x[i:h]x[i:z]/[**:src]', function ($w, $h, $z, $src) {
	global $func;
	$func->createThumb($w, $h, $z, $src, null, _thumbs);
}, 'thumb');

$router->map('GET', _watermark . '/news/[i:w]x[i:h]x[i:z]/[**:src]', function ($w, $h, $z, $src) {
	global $func, $wtmNews;
	$func->createThumb($w, $h, $z, $src, $wtmNews, "news");
}, 'watermark');

$match = $router->match();

if (is_array($match)) {
	if (is_callable($match['target'])) {
		call_user_func_array($match['target'], $match['params']);
	} else {
		$com = (isset($match['params']['com'])) ? htmlspecialchars($match['params']['com']) : htmlspecialchars($match['target']);

		$act = (isset($match['params']['act'])) ? htmlspecialchars($match['params']['act']) : htmlspecialchars($match['target']);
		$page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 1;
	}
} else {
	header('HTTP/1.0 404 Not Found', true, 404);
	$template = "error/404";
}

// rows page

$itemPage = $deviceType != 'phone' ? 8 : 12;

/* SEO Lang */
$seolang = "vi";


$attr_com = array(



	// array("tbl" => "baiviet", "field" => "id", "source" => "news", "com" => "san-pham", "type" => "san-pham"),

	// array("tbl" => "baiviet_list", "field" => "idl", "source" => "news", "com" => "san-pham", "type" => "san-pham"),

	// array("tbl" => "baiviet_cat", "field" => "idc", "source" => "news", "com" => "san-pham", "type" => "san-pham"),

	// array("tbl" => "baiviet", "field" => "id", "source" => "news", "com" => "album", "type" => "album"),


	// array("tbl" => "baiviet", "field" => "id", "source" => "news", "com" => "dieu-khoan", "type" => "dieu-khoan"),

	array("tbl" => "info", "field" => "id", "source" => "info", "com" => "gioi-thieu", "type" => "gioi-thieu"),

	array("tbl" => "baiviet_list", "field" => "idl", "source" => "info", "com" => "gioi-thieu", "type" => "gioi-thieu"),


	array("tbl" => "baiviet", "field" => "id", "source" => "news", "com" => "tin-tuc", "type" => "tin-tuc"),

	array("tbl" => "baiviet_list", "field" => "idl", "source" => "news", "com" => "tin-tuc", "type" => "tin-tuc"),


	array("tbl" => "baiviet", "field" => "id", "source" => "news", "com" => "dich-vu", "type" => "dich-vu"),

	array("tbl" => "baiviet_list", "field" => "idl", "source" => "news", "com" => "dich-vu", "type" => "dich-vu"),

	array("tbl" => "baiviet_cat", "field" => "idc", "source" => "news",  "com" => "dich-vu", "type" => "dich-vu"),


	array("tbl" => "baiviet", "field" => "id", "source" => "news", "com" => "tac-gia", "type" => "tac-gia"),

	array("tbl" => "baiviet", "field" => "id", "source" => "news", "com" => "chinh-sach", "type" => "chinh-sach"),

	array("tbl" => "contact", "field" => "id", "source" => "contact", "com" => "lien-he", "type" => "lien-he"),

	array("tbl" => "baiviet", "field" => "id", "source" => "video", "com" => "video", "type" => "video"),

);


if ($com) {

	foreach ($attr_com as $key => $val) {

		if (isset($com) && $val['tbl'] != 'info' && $val['tbl'] != 'contact' && $com == $val["com"]) {

			$row = $db->rawQueryOne("select id from #_" . $val['tbl'] . " where hienthi=1 and tenkhongdau_$lang='" . $act . "' and type='" . $val['type'] . "'");

			if (!empty($row)) {

				$_GET[$val['field']] = $row['id'];

				$com = $val['com'];
			}
		}
	}
}



switch ($com) {

	case 'lien-he':

		$title_seo = _contact;

		$type = "lien-he";

		$seo->setSeo('type', isset($_GET['id']) ? "article" : "object");

		// $seo->setSeo('type', 'object');

		$source = "contact";

		$template = "contacts/contact";

		break;

	case 'gioi-thieu':

		$title_seo = _gioithieu;

		$type = 'gioi-thieu';

		$seo->setSeo('type', 'article');

		$source = "baiviet";

		$template = "pages/baiviet";

		break;

	case 'tin-tuc':

		$title_seo = 'Tin tức';

		$type = "tin-tuc";

		$seo->setSeo('type', isset($_GET['id']) ? "article" : "object");

		$source = "news";

		$template = isset($_GET['id']) ? "news/news_detail" : "news/news";

		break;

		// case 'van-hoa-an-son':

		// 	$title_seo = 'Văn Hóa An Sơn';

		// 	$type="van-hoa-an-son";

		// 	$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");

		// 	$source = "companySource";

		// 	$template =isset($_GET['id']) ? "news/news_detail" : "albums/vanhoa";

		// 	break;

		// case 'album':

		// 	$title_seo = 'Thư Viện Ảnh';

		// 	$type = "album";

		// 	$seo->setSeo('type', isset($_GET['id']) ? "article" : "object");

		// 	$source = "news";

		// 	$template = isset($_GET['id']) ? "albums/thuvienanh_detail" : "albums/thuvienanh";

		// 	break;

		// case 'dieu-khoan':

		// 	$title_seo = 'Điều khoản';

		// 	$type = "dieu-khoan";

		// 	$seo->setSeo('type', isset($_GET['id']) ? "article" : "object");

		// 	$source = "news";

		// 	$template = isset($_GET['id']) ? "news/news_detail" : "news/news";

		// 	break;

		// case 'tuyen-dai-ly':

		// 	$title_seo = 'Tuyển đại lý';

		// 	$type = "tuyen-dai-ly";

		// 	$seo->setSeo('type', isset($_GET['id']) ? "article" : "object");

		// 	$source = "news";

		// 	$template = isset($_GET['id']) ? "news/news_detail" : "news/news";

		// 	break;

		// case 'tin-cong-ty':

		// 	$title_seo = 'Tin Công Ty';

		// 	$type="tin-cong-ty";

		// 	$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");

		// 	$source = "news";

		// 	$template =isset($_GET['id']) ? "news/news_detail" : "news/news";

		// 	break;

	case 'video':

		$title_seo = 'Video';

		$type = "video";

		$seo->setSeo('type', isset($_GET['id']) ? "article" : "object");

		$source = "video";

		$template = "albums/video";

		break;

	case 'dich-vu':

		$title_seo = 'Dịch vụ';

		$type = "dich-vu";

		$seo->setSeo('type', isset($_GET['id']) ? "article" : "object");

		if (isset($_GET['idl'])) {
			$seo->setSeo('idl', $_GET['idl']);
		}

		if (isset($_GET['idc'])) {
			$seo->setSeo('idc', $_GET['idc']);
		}

		$source = "news";

		// $template = isset($_GET['id']) ? "products/product_detail" : "products/product";

		$template = isset($_GET['id']) ? "news/service_detail" : "news/services";

		break;

	case 'chinh-sach':

		$title_seo = 'Chính sách';

		$type = "chinh-sach";

		$seo->setSeo('type', isset($_GET['id']) ? "article" : "object");

		$source = "news";

		$template = isset($_GET['id']) ? "news/news_static" : "news/news_static";

		break;

	// case 'san-pham':

	// 	$title_seo = 'Sản phẩm';

	// 	$type = "san-pham";

	// 	$seo->setSeo('type', isset($_GET['id']) ? "article" : "object");

	// 	if (isset($_GET['idl'])) {
	// 		$seo->setSeo('idl', $_GET['idl']);
	// 	}

	// 	if (isset($_GET['idc'])) {
	// 		$seo->setSeo('idc', $_GET['idc']);
	// 	}


	// 	$source = "news";

	// 	$template = isset($_GET['id']) ? "products/product_detail" : "products/product";

	// 	break;

	case 'tac-gia':

		$title_seo = 'Tác giả';

		$type = "tac-gia";

		$seo->setSeo('type', isset($_GET['id']) ? "article" : "object");

		$source = "news";

		$template = isset($_GET['id']) ? "news/tacgia" : "news/tacgia";

		break;

		// case 'carts':

		$title_seo = 'Giỏ hàng';

		$type = 'san-pham';

		$source = "carts";

		$seo->setSeo('type', "object");

		if (!$func->isAjax()) {

			$src = isset($_REQUEST['src']) ? $_REQUEST['src'] : '';

			switch ($src) {

				case 'gio-hang':

					$title_seo = 'Giỏ hàng';

					$template = 'carts/giohang';

					break;

				case 'thanh-toan':

					$title_seo = 'Thanh toán';

					$template = 'carts/checkout';

					break;

				case 'thanh-cong':

					$title_seo = 'Thanh toán';

					$template = 'carts/complete';

					break;

				default:

					header($_SERVER['SERVER_PROTOCOL'] . " 404 Not Found", true, 404);

					break;
			}

			$str_breadcrumbs = $breadcrumbs->getUrl('Trang chủ', array(array('alias' => 'carts?src=' . $src, 'name' => $title_seo)));
		} else {

			include _source . 'carts.php';

			die;
		}

		break;

		// case 'users':

		// 	$title_seo = 'user';

		// 	$type = 'user';

		// 	$source = 'users';

		// 	$seo->setSeo('type', "object");


		// 	if (!$func->isAjax()) {

		// 		$src = isset($_REQUEST['src']) ? $_REQUEST['src'] : '';

		// 		switch ($src) {

		// 			case 'account':

		// 				$title_seo = 'Thông tin cá nhân';

		// 				$template = 'users/profile';

		// 				break;

		// 			case 'change-passsword':

		// 				$title_seo = 'Thay đổi mật khẩu';

		// 				$template = 'users/change_passsword';

		// 				break;

		// 			default:

		// 				header($_SERVER['SERVER_PROTOCOL'] . " 404 Not Found", true, 404);

		// 				break;
		// 		}

		// 		$str_breadcrumbs = $breadcrumbs->getUrl('Trang chủ', array(array('alias' => 'users?src=' . $src, 'name' => $title_seo)));
		// 	} else {

		// 		include _source . 'users.php';

		// 		die;
		// 	}


		// 	break;

	case 'tim-kiem':

		$title_seo = _search;

		$type = 'san-pham';

		$seo->setSeo('type', 'object');

		$source = "searchs";

		if (!$func->isAjax()) {

			$template = "products/product";
		} else {

			$type = 'san-pham';

			include _source . 'searchs.php';

			$template = "products/product";

			die;
		}

		break;

	case 'sitemap':

		include_once "sitemap.php";

		exit();

		break;

	case 'lang':


		if (isset($_GET['locale'])) {

			switch ($_GET['locale']) {

				case 'vi':

					$_SESSION['lang'] = 'vi';

					break;

				case 'en':

					$_SESSION['lang'] = 'en';

					break;

				case 'jp':

					$_SESSION['lang'] = 'jp';

					break;

				case 'cn':

					$_SESSION['lang'] = 'cn';

					break;

				default:

					$_SESSION['lang'] = 'vi';

					break;
			}
		} else {

			$_SESSION['lang'] = 'vi';
		}

		$func->redirect($_SERVER['HTTP_REFERER']);



		break;

	case '':

	case 'index':

		$source = 'index';

		$template = 'index';

		$seo->setSeo('type', 'website');

		break;

	default:

		header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found", true, 404);

		$template = "error/404";

		break;
}

include_once _lib . "style.php";

if ($source != "") include _source . $source . ".php";
