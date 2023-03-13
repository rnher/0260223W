<?php

#=================check per===============

$GLOBAL_LANG = false;

$GLOBAL_PERMISSION = false;

#=================check user===============

$GLOBAL_USER = true;

$GLOBAL_USER_ADMIN = true;

$GLOBAL_USER_CLIENT = true;

#================check member================

$ORDER = false;

$MEMBER = false;

$CONTACT = true;

$NEWSLETTER = false;

$BOOKING = true;

// =======================seo page======================
$setting['seopage']['page'] = array(

	'gioi-thieu' => "Giới thiệu",

	// 'album'=>'Thư viện ảnh',	

	'video' => 'Video',

	// 'san-pham' => 'Sản phẩm',

	'danh-gia-khach-hang' => 'Đánh giá khách hàng',

	'dich-vu' => 'Dịch vụ',

	'tin-tuc' => 'Tin tức',

	'lien-he' => 'Liên hệ',

);
$setting['seopage']['mota'] = true;
$setting['seopage']['mota-ckeditor'] = true;
$setting['seopage']['noidung'] = true;
$setting['seopage']['noidung-ckeditor'] = true;
$setting['seopage']['img-width'] = 300;
$setting['seopage']['img-height'] = 200;
$setting['seopage']['img-ratio'] = 1;
$setting['seopage']['img-b'] = 200;
$setting['seopage']['thumb'] = '300x200x1';
$setting['seopage']['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
$viewArray = array('htgh', 'pttt');

// #========================properties====================
// $nametype = 'properties';
// $setting['properties'][$nametype]['name'] = 'Thuộc tính sản phẩm';
// $setting['properties'][$nametype]['color'] = true;
// $setting['properties'][$nametype]['qty'] = true;
// $setting['properties'][$nametype]['price'] = true;
// $setting['properties'][$nametype]['photo'] = true;
// $setting['properties'][$nametype]['img-height'] = 285;
// $setting['properties'][$nametype]['img-width'] = 250;
// $setting['properties'][$nametype]['img-ratio'] = 2;
// $setting['properties'][$nametype]['img-b'] = false;


#==================================Tác giả====================================

$nametype = 'tac-gia';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'Tác giả';

$GLOBAL['baiviet'][$nametype]['title'] = 'Danh sách tác giả';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check'] = array(

	"hienthi" => "Hiển thị",

	"mucluc" => "Mục lục"

);

$GLOBAL['baiviet'][$nametype]['tag'] = true;

$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

$GLOBAL['baiviet'][$nametype]['schema'] = true;

$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 100;

$GLOBAL['baiviet'][$nametype]['img-height'] = 100;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['link_facebook'] = true;

$GLOBAL['baiviet'][$nametype]['link_zalo'] = true;

$GLOBAL['baiviet'][$nametype]['link_twitter'] = true;

$GLOBAL['baiviet'][$nametype]['link_instagram'] = true;

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['thongtin'] = false;

$GLOBAL['baiviet'][$nametype]['thongtin-ckeditor'] = false;

$GLOBAL['baiviet'][$nametype]['job'] = true;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

$GLOBAL['baiviet'][$nametype]['rating'] = false;

$GLOBAL['baiviet'][$nametype]['daytin'] = false;

$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

$GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



#====================Video============================

$nametype = 'video';

$GLOBAL['video'][$nametype]['title_main'] = 'Videos';

$GLOBAL['video'][$nametype]['title'] = 'Quản lý videos';

$GLOBAL['video'][$nametype]['list'] = true;

$GLOBAL['video'][$nametype]['full'] = false;

$GLOBAL['video'][$nametype]['upload'] = false;

$GLOBAL['video'][$nametype]['img'] = true;

$GLOBAL['video'][$nametype]['img-width'] = 385;

$GLOBAL['video'][$nametype]['img-height'] = 285;

$GLOBAL['video'][$nametype]['img-ratio'] = 1;

$GLOBAL['video'][$nametype]['link'] = true;

$GLOBAL['video'][$nametype]['mota'] = false;

$GLOBAL['video'][$nametype]['mota-ckeditor'] = false;

$GLOBAL['video'][$nametype]['noidung'] = true;

$GLOBAL['video'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['video'][$nametype]['seo'] = false;

$GLOBAL['video'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['video'][$nametype]['check_cat'] = array(

	"mucluc" => "Mục lục",

	"hienthi" => "Hiển thị",
	
	"noibat" => "Nổi bật"

);

$GLOBAL_LEVEL1['video'][$nametype]['check_cat'] = array(

	"mucluc" => "Mục lục",

	"hienthi" => "Hiển thị",
	"noibat" => "Nổi bật"

);

// $GLOBAL_LEVEL1['video'][$nametype]['title_main'] = 'Danh mục videos cấp 1';

$GLOBAL_LEVEL1['video'][$nametype]['title'] = 'Danh mục videos cấp 1';

$GLOBAL_LEVEL1['video'][$nametype]['full'] = false;

$GLOBAL_LEVEL1['video'][$nametype]['upload'] = false;

$GLOBAL_LEVEL1['video'][$nametype]['img'] = true;

$GLOBAL_LEVEL1['video'][$nametype]['img-width'] = 385;

$GLOBAL_LEVEL1['video'][$nametype]['img-height'] = 285;

$GLOBAL_LEVEL1['video'][$nametype]['img-ratio'] = 1;

$GLOBAL_LEVEL1['video'][$nametype]['link'] = true;

$GLOBAL_LEVEL1['video'][$nametype]['mota'] = false;

$GLOBAL_LEVEL1['video'][$nametype]['mota-ckeditor'] = false;

$GLOBAL_LEVEL1['video'][$nametype]['noidung'] = true;

$GLOBAL_LEVEL1['video'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL_LEVEL1['video'][$nametype]['seo'] = false;

$GLOBAL_LEVEL1['video'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


//#========================Sản phẩm==================== 

// $nametype = 'san-pham';

// $GLOBAL['baiviet'][$nametype]['title_main'] = 'Sản phẩm';

// $GLOBAL['baiviet'][$nametype]['title'] = 'Danh sách';

// $GLOBAL['baiviet'][$nametype]['full'] = false;

// $GLOBAL['baiviet'][$nametype]['check'] = array(

// 	"mucluc" => "Mục lục",

// 	"noibat" => "Nổi bật",

// 	"hienthi" => "Hiển thị"

// );

// $GLOBAL['baiviet'][$nametype]['status'] = array();

// $GLOBAL['baiviet'][$nametype]['slogan'] = false;

// $GLOBAL['baiviet'][$nametype]['img'] = true;

// $GLOBAL['baiviet'][$nametype]['index_robots'] = true;

// $GLOBAL['baiviet'][$nametype]['img-width'] = 303;

// $GLOBAL['baiviet'][$nametype]['img-height'] = 303;

// $GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

// $GLOBAL['baiviet'][$nametype]['img-b'] = false;

// $GLOBAL['baiviet'][$nametype]['iframe_map'] = false;

// $GLOBAL['baiviet'][$nametype]['link_cano'] = true;

// $GLOBAL['baiviet'][$nametype]['huong'] = false;

// $GLOBAL['baiviet'][$nametype]['loaidat'] = false;

// $GLOBAL['baiviet'][$nametype]['schema'] = true;

// $GLOBAL['baiviet'][$nametype]['rating'] = false;

// $GLOBAL['baiviet'][$nametype]['dientich'] = false;

// $GLOBAL['baiviet'][$nametype]['img-gallery'] = true;

// $GLOBAL['baiviet'][$nametype]['multi-gallery-arr'] = array(

// 	$nametype => array(

// 		"title_main_photo" => "Hình ảnh kèm theo",

// 		"title_sub_photo" => "Hình ảnh",

// 		"width_photo" => 303,

// 		"height_photo" => 303,

// 		"thumb_width_photo" => 303,

// 		"thumb_height_photo" => 303,

// 		"thumb_ratio_photo" => 1,

// 		"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

// 	)

// );

// $GLOBAL['baiviet'][$nametype]['mota'] = true;

// $GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL['baiviet'][$nametype]['noidung'] = true;

// $GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

// $GLOBAL['baiviet'][$nametype]['tukhoa'] = false;

// $GLOBAL['baiviet'][$nametype]['tukhoa-ckeditor'] = false;

// $GLOBAL['baiviet'][$nametype]['alias'] = true;

// $GLOBAL['baiviet'][$nametype]['tinhtrang'] = true;

// $GLOBAL['baiviet'][$nametype]['text-search'] = true;

// $GLOBAL['baiviet'][$nametype]['masp'] = true;

// $GLOBAL['baiviet'][$nametype]['color'] = true;

// $GLOBAL['baiviet'][$nametype]['size'] = true;

// $GLOBAL['baiviet'][$nametype]['gia'] = true;

// $GLOBAL['baiviet'][$nametype]['donvitinh'] = false;

// $GLOBAL['baiviet'][$nametype]['giacu'] = true;

// $GLOBAL['baiviet'][$nametype]['brand'] = false;

// $GLOBAL['baiviet'][$nametype]['xuatxu'] = false;

// $GLOBAL['baiviet'][$nametype]['baohanh'] = false;

// $GLOBAL['baiviet'][$nametype]['title-seo'] = true;

// $GLOBAL['baiviet'][$nametype]['keywords-seo'] = true;

// $GLOBAL['baiviet'][$nametype]['description-seo'] = true;

// $GLOBAL['baiviet'][$nametype]['seo'] = true;

// $GLOBAL['baiviet'][$nametype]['tags'] = false;

// $GLOBAL['baiviet'][$nametype]['daytin'] = false;

// $GLOBAL['baiviet'][$nametype]['mucluc'] = true;

// $GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

// $GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

// // danh mục cấp 1

// $GLOBAL['baiviet'][$nametype]['list'] = true;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'Danh mục cấp 1';

// $GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['check_list'] = array(

// 	"mucluc" => "Mục lục",

// 	"hienthi" => "Hiển thị"

// );

// $GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 305;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 325;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['dm_index'] = false;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['link_cano'] = true;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = false;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['banner-width'] = 285;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['banner-height'] = 347;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 40;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 40;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

// //danh mục cấp 2

// $GLOBAL['baiviet'][$nametype]['cat'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['title'] = 'Danh mục cấp 2';

// $GLOBAL_LEVEL2['baiviet'][$nametype]['full'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['check_cat'] = array(

// 	"mucluc" => "Mục lục",

// 	"hienthi" => "Hiển thị"

// );

// $GLOBAL_LEVEL2['baiviet'][$nametype]['img'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['img-width'] = 305;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['img-height'] = 325;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['brand'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['list'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['icon'] = false;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['link_cano'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['img-width1'] = 30;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['img-height1'] = 30;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['img-ratio'] = 1;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['mota'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['noidung'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['noidung-ckeditor'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['seo'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['img-qc'] = false;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

// // Danh mục cấp 3

// $GLOBAL['baiviet'][$nametype]['item'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['title'] = 'Danh mục cấp 3';

// $GLOBAL_LEVEL3['baiviet'][$nametype]['full'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['check_item'] = array(

// 	"mucluc" => "Mục lục",

// 	"hienthi" => "Hiển thị"
// );

// $GLOBAL_LEVEL3['baiviet'][$nametype]['img'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['img-width'] = 285;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['img-height'] = 260;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['img-ratio'] = 2;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['link_cano'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['mota'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['noidung'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['noidung-ckeditor'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['seo'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['img-qc'] = false;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


#========================pttt==================== 

// $nametype = 'pttt';

// $GLOBAL['baiviet'][$nametype]['title_main'] = 'Phương thức thanh toán';

// $GLOBAL['baiviet'][$nametype]['title'] = 'Danh sách phương thức thanh toán';

// $GLOBAL['baiviet'][$nametype]['full'] = false;

// $GLOBAL['baiviet'][$nametype]['check'] = array(

// 	"mucluc" => "Mục lục",

// 	"hienthi" => "Hiển thị"

// );

// $GLOBAL['baiviet'][$nametype]['tag'] = true;

// $GLOBAL['baiviet'][$nametype]['img'] = false;

// $GLOBAL['baiviet'][$nametype]['img-width'] = 285;

// $GLOBAL['baiviet'][$nametype]['img-height'] = 215;

// $GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

// $GLOBAL['baiviet'][$nametype]['mota'] = false;

// $GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL['baiviet'][$nametype]['noidung'] = true;

// $GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

// $GLOBAL['baiviet'][$nametype]['thongtin'] = false;

// $GLOBAL['baiviet'][$nametype]['thongtin-ckeditor'] = false;

// $GLOBAL['baiviet'][$nametype]['job'] = false;

// $GLOBAL['baiviet'][$nametype]['seo'] = false;

// $GLOBAL['baiviet'][$nametype]['alias'] = true;

// $GLOBAL['baiviet'][$nametype]['tag'] = false;

// $GLOBAL['baiviet'][$nametype]['top_nb'] = false;

// $GLOBAL['baiviet'][$nametype]['rating'] = false;

// $GLOBAL['baiviet'][$nametype]['daytin'] = false;

// $GLOBAL['baiviet'][$nametype]['mucluc'] = true;

// $GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

// $GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

#==================================Hình thức giao hàng====================================

// $nametype = 'htgh';

// $GLOBAL['baiviet'][$nametype]['title_main'] = 'Phương thức giao hàng';

// $GLOBAL['baiviet'][$nametype]['title'] = 'Danh sách phương thức giao hàng';

// $GLOBAL['baiviet'][$nametype]['full'] = false;

// $GLOBAL['baiviet'][$nametype]['check'] = array(

// 	"hienthi" => "Hiển thị"

// );

// $GLOBAL['baiviet'][$nametype]['tag'] = true;

// $GLOBAL['baiviet'][$nametype]['img'] = false;

// $GLOBAL['baiviet'][$nametype]['img-width'] = 72;

// $GLOBAL['baiviet'][$nametype]['img-height'] = 72;

// $GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

// $GLOBAL['baiviet'][$nametype]['mota'] = true;

// $GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL['baiviet'][$nametype]['noidung'] = false;

// $GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

// $GLOBAL['baiviet'][$nametype]['thongtin'] = false;

// $GLOBAL['baiviet'][$nametype]['thongtin-ckeditor'] = false;

// $GLOBAL['baiviet'][$nametype]['job'] = false;

// $GLOBAL['baiviet'][$nametype]['seo'] = false;

// $GLOBAL['baiviet'][$nametype]['alias'] = true;

// $GLOBAL['baiviet'][$nametype]['tag'] = false;

// $GLOBAL['baiviet'][$nametype]['top_nb'] = false;

// $GLOBAL['baiviet'][$nametype]['rating'] = false;

// $GLOBAL['baiviet'][$nametype]['daytin'] = false;

// $GLOBAL['baiviet'][$nametype]['mucluc'] = true;

// $GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

// $GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


#========================Color==================== 

// $nametype = 'color';

// $GLOBAL['attribute'][$nametype]['title_main'] = 'Màu sắc';

// $GLOBAL['attribute'][$nametype]['title'] = 'Danh sách';

// $GLOBAL['attribute'][$nametype]['full'] = false;

// $GLOBAL['attribute'][$nametype]['public'] = false;

// $GLOBAL['attribute'][$nametype]['color-detail'] = true;

// $GLOBAL['attribute'][$nametype]['check'] = array(

// 	"hienthi" => "Hiển thị"

// );

// $GLOBAL['attribute'][$nametype]['status'] = array();

// $GLOBAL['attribute'][$nametype]['img'] = true;

// $GLOBAL['attribute'][$nametype]['gia'] = false;

// $GLOBAL['attribute'][$nametype]['img-width'] = 380;

// $GLOBAL['attribute'][$nametype]['img-height'] = 380;

// $GLOBAL['attribute'][$nametype]['img-ratio'] = 2;

// $GLOBAL['attribute'][$nametype]['img-b'] = false;

// $GLOBAL['attribute'][$nametype]['img-gallery'] = false;

// $GLOBAL['attribute'][$nametype]['multi-gallery-arr'] = array(

// 	$nametype => array(

// 		"title_main_photo" => "Hình ảnh kèm theo",

// 		"title_sub_photo" => "Hình ảnh",

// 		"width_photo" => 500,

// 		"height_photo" => 500,

// 		"thumb_width_photo" => 500,

// 		"thumb_height_photo" => 500,

// 		"thumb_ratio_photo" => 1,

// 		"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

// 	)

// );

// $GLOBAL['attribute'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

// $GLOBAL['attribute'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


// #========================Kích thước==================== 

// $nametype = 'size';

// $GLOBAL['attribute'][$nametype]['title_main'] = 'Kích thước';

// $GLOBAL['attribute'][$nametype]['title'] = 'Danh sách';

// $GLOBAL['attribute'][$nametype]['full'] = false;

// $GLOBAL['attribute'][$nametype]['public'] = false;

// $GLOBAL['attribute'][$nametype]['color-detail'] = false;


// $GLOBAL['attribute'][$nametype]['check'] = array(

// 	"hienthi" => "Hiển thị"

// );

// $GLOBAL['attribute'][$nametype]['status'] = array();

// $GLOBAL['attribute'][$nametype]['img'] = false;

// $GLOBAL['attribute'][$nametype]['gia'] = true;

// $GLOBAL['attribute'][$nametype]['img-width'] = 380;

// $GLOBAL['attribute'][$nametype]['img-height'] = 380;

// $GLOBAL['attribute'][$nametype]['img-ratio'] = 2;

// $GLOBAL['attribute'][$nametype]['img-b'] = false;

// $GLOBAL['attribute'][$nametype]['img-gallery'] = false;

// $GLOBAL['attribute'][$nametype]['multi-gallery-arr'] = array(

// 	$nametype => array(

// 		"title_main_photo" => "Hình ảnh kèm theo",

// 		"title_sub_photo" => "Hình ảnh",

// 		"width_photo" => 500,

// 		"height_photo" => 500,

// 		"thumb_width_photo" => 500,

// 		"thumb_height_photo" => 500,

// 		"thumb_ratio_photo" => 1,

// 		"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

// 	)

// );

// $GLOBAL['attribute'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

// $GLOBAL['attribute'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


#========================Tin tức==================== 

$nametype = 'tin-tuc';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'Tin tức';

$GLOBAL['baiviet'][$nametype]['title'] = 'Danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check'] = array(

	"mucluc" => "Mục lục",

	"hienthi" => "Hiển thị",

	"noibat" => "Nổi bật"

);

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 420;

$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

$GLOBAL['baiviet'][$nametype]['schema'] = true;

$GLOBAL['baiviet'][$nametype]['tacgia'] = true;

$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

$GLOBAL['baiviet'][$nametype]['img-height'] = 280;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

// danh mục cấp 1

$GLOBAL['baiviet'][$nametype]['list'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'Danh mục cấp 1';

$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list'] = array(

	"mucluc" => "Mục lục",

	"noibat" => "Nổi bật",

	"hienthi" => "Hiển thị"

);

$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 422;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 416;

$GLOBAL_LEVEL1['baiviet'][$nametype]['dm_index'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['link_cano'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-width'] = 285;

$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-height'] = 347;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 45;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 45;

$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';





#========================Về chúng tôi==================== 


$nametype = 'gioi-thieu';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'Giới thiệu';

$GLOBAL['baiviet'][$nametype]['title'] = 'Danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check'] = array(

	"mucluc" => "Mục lục",

	"hienthi" => "Hiển thị",

	"noibat" => "Nổi bật"

);

$GLOBAL['baiviet'][$nametype]['link_direct'] = true;

$GLOBAL['baiviet'][$nametype]['link'] = true;

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 420;

$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

$GLOBAL['baiviet'][$nametype]['schema'] = true;

$GLOBAL['baiviet'][$nametype]['tacgia'] = true;

$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

$GLOBAL['baiviet'][$nametype]['img-height'] = 280;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['icon'] = true;

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

// danh mục cấp 1

$GLOBAL['baiviet'][$nametype]['list'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'Danh mục cấp 1';

$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list'] = array(

	"mucluc" => "Mục lục",

	"noibat" => "Nổi bật",

	"hienthi" => "Hiển thị"

);

$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 422;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 416;

$GLOBAL_LEVEL1['baiviet'][$nametype]['dm_index'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['link_cano'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-width'] = 285;

$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-height'] = 347;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 45;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 45;

$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


#============================================ 

// $nametype = 'tuyen-dai-ly';

// $GLOBAL['baiviet'][$nametype]['title_main'] = 'Đại lý';

// $GLOBAL['baiviet'][$nametype]['title'] = 'Danh sách';

// $GLOBAL['baiviet'][$nametype]['full'] = false;

// $GLOBAL['baiviet'][$nametype]['check'] = array(

// 	"mucluc" => "Mục lục",

// 	"hienthi" => "Hiển thị",

// );

// $GLOBAL['baiviet'][$nametype]['img'] = true;

// $GLOBAL['baiviet'][$nametype]['img-width'] = 420;

// $GLOBAL['baiviet'][$nametype]['link_cano'] = true;

// $GLOBAL['baiviet'][$nametype]['schema'] = true;

// $GLOBAL['baiviet'][$nametype]['tacgia'] = true;

// $GLOBAL['baiviet'][$nametype]['index_robots'] = true;

// $GLOBAL['baiviet'][$nametype]['img-height'] = 280;

// $GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

// $GLOBAL['baiviet'][$nametype]['mota'] = true;

// $GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL['baiviet'][$nametype]['noidung'] = true;

// $GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

// $GLOBAL['baiviet'][$nametype]['alias'] = true;

// $GLOBAL['baiviet'][$nametype]['seo'] = true;

// $GLOBAL['baiviet'][$nametype]['tag'] = false;

// $GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

// $GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


#========================Tin tức==================== 

// $nametype = 'tin-cong-ty';

// $GLOBAL['baiviet'][$nametype]['title_main'] = 'Tin công ty';

// $GLOBAL['baiviet'][$nametype]['title'] = 'Danh sách';

// $GLOBAL['baiviet'][$nametype]['full'] = false;

// $GLOBAL['baiviet'][$nametype]['check'] = array(

// 	"mucluc" => "Mục lục",

// 	"hienthi" => "Hiển thị",

// );

// $GLOBAL['baiviet'][$nametype]['img'] = true;

// $GLOBAL['baiviet'][$nametype]['img-width'] = 393;

// $GLOBAL['baiviet'][$nametype]['link_cano'] = true;

// $GLOBAL['baiviet'][$nametype]['schema'] = true;

// $GLOBAL['baiviet'][$nametype]['tacgia'] = true;

// $GLOBAL['baiviet'][$nametype]['index_robots'] = true;

// $GLOBAL['baiviet'][$nametype]['img-height'] = 262;

// $GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

// $GLOBAL['baiviet'][$nametype]['mota'] = true;

// $GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL['baiviet'][$nametype]['noidung'] = true;

// $GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

// $GLOBAL['baiviet'][$nametype]['alias'] = true;

// $GLOBAL['baiviet'][$nametype]['seo'] = true;

// $GLOBAL['baiviet'][$nametype]['tag'] = false;

// $GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

// $GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

#========================Album==================== 

// $nametype = 'album';

// $GLOBAL['baiviet'][$nametype]['title_main'] = 'Album';

// $GLOBAL['baiviet'][$nametype]['title'] = 'Danh sách';

// $GLOBAL['baiviet'][$nametype]['full'] = false;

// $GLOBAL['baiviet'][$nametype]['check'] = array(

// 	"mucluc" => "Mục lục",

// 	"noibat" => "Nổi bật",

// 	"hienthi" => "Hiển thị",

// );

// $GLOBAL['baiviet'][$nametype]['img'] = true;

// $GLOBAL['baiviet'][$nametype]['img-width'] = 387;

// $GLOBAL['baiviet'][$nametype]['link_cano'] = true;

// $GLOBAL['baiviet'][$nametype]['schema'] = true;

// $GLOBAL['baiviet'][$nametype]['slogan'] = true;

// $GLOBAL['baiviet'][$nametype]['tacgia'] = true;

// $GLOBAL['baiviet'][$nametype]['index_robots'] = true;

// $GLOBAL['baiviet'][$nametype]['img-height'] = 289;

// $GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

// $GLOBAL['baiviet'][$nametype]['mota'] = true;

// $GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL['baiviet'][$nametype]['noidung'] = true;

// $GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

// $GLOBAL['baiviet'][$nametype]['alias'] = true;

// $GLOBAL['baiviet'][$nametype]['seo'] = true;

// $GLOBAL['baiviet'][$nametype]['tag'] = false;

// $GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

// $GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

// $GLOBAL['baiviet'][$nametype]['img-gallery'] = true;

// $GLOBAL['baiviet'][$nametype]['multi-gallery-arr'] = array(

// 	$nametype => array(

// 		"title_main_photo" => "Hình ảnh kèm theo",

// 		"title_sub_photo" => "Hình ảnh",

// 		"width_photo" => 387,

// 		"height_photo" => 289,

// 		"thumb_width_photo" => 387,

// 		"thumb_height_photo" => 289,

// 		"thumb_ratio_photo" => 1,

// 		"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

// 	)

// );


#========================Dịch vụ==================== 

$nametype = 'dich-vu';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'Dịch vụ';

$GLOBAL['baiviet'][$nametype]['title'] = 'Danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check'] = array(

	"mucluc" => "Mục lục",

	"hienthi" => "Hiển thị",

	"noibat" => "Nổi bật"

);

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 420;

$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

$GLOBAL['baiviet'][$nametype]['schema'] = true;

$GLOBAL['baiviet'][$nametype]['tacgia'] = true;

$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

$GLOBAL['baiviet'][$nametype]['img-height'] = 316;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

// add

$GLOBAL['baiviet'][$nametype]['link'] = true;

$GLOBAL['baiviet'][$nametype]['intro'] = true;

$GLOBAL['baiviet'][$nametype]['img-gallery'] = true;

$GLOBAL['baiviet'][$nametype]['multi-gallery-arr'] = array(

	$nametype => array(

		"title_main_photo" => "Hình ảnh kèm theo",

		"title_sub_photo" => "Hình ảnh",

		"width_photo" => 303,

		"height_photo" => 303,

		"thumb_width_photo" => 303,

		"thumb_height_photo" => 303,

		"thumb_ratio_photo" => 1,

		"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

	)

);

$GLOBAL['baiviet'][$nametype]['intro-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

// danh mục cấp 1

$GLOBAL['baiviet'][$nametype]['list'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'Danh mục cấp 1';

$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list'] = array(

	"mucluc" => "Mục lục",

	"hienthi" => "Hiển thị"

);

$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 305;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 325;

$GLOBAL_LEVEL1['baiviet'][$nametype]['dm_index'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['link_cano'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-width'] = 285;

$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-height'] = 347;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 40;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 40;

$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

//danh mục cấp 2

$GLOBAL['baiviet'][$nametype]['cat'] = true;

$GLOBAL_LEVEL2['baiviet'][$nametype]['title'] = 'Danh mục cấp 2';

$GLOBAL_LEVEL2['baiviet'][$nametype]['full'] = true;

$GLOBAL_LEVEL2['baiviet'][$nametype]['check_cat'] = array(

	"mucluc" => "Mục lục",

	"hienthi" => "Hiển thị"

);

$GLOBAL_LEVEL2['baiviet'][$nametype]['img'] = true;

$GLOBAL_LEVEL2['baiviet'][$nametype]['img-width'] = 305;

$GLOBAL_LEVEL2['baiviet'][$nametype]['img-height'] = 325;

$GLOBAL_LEVEL2['baiviet'][$nametype]['brand'] = true;

$GLOBAL_LEVEL2['baiviet'][$nametype]['list'] = true;

$GLOBAL_LEVEL2['baiviet'][$nametype]['icon'] = false;

$GLOBAL_LEVEL2['baiviet'][$nametype]['link_cano'] = true;

$GLOBAL_LEVEL2['baiviet'][$nametype]['img-width1'] = 30;

$GLOBAL_LEVEL2['baiviet'][$nametype]['img-height1'] = 30;

$GLOBAL_LEVEL2['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL_LEVEL2['baiviet'][$nametype]['mota'] = true;

$GLOBAL_LEVEL2['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL_LEVEL2['baiviet'][$nametype]['noidung'] = true;

$GLOBAL_LEVEL2['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL_LEVEL2['baiviet'][$nametype]['seo'] = true;

$GLOBAL_LEVEL2['baiviet'][$nametype]['img-qc'] = false;

$GLOBAL_LEVEL2['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

// Danh mục cấp 3

$GLOBAL['baiviet'][$nametype]['item'] = true;

$GLOBAL_LEVEL3['baiviet'][$nametype]['title'] = 'Danh mục cấp 3';

$GLOBAL_LEVEL3['baiviet'][$nametype]['full'] = true;

$GLOBAL_LEVEL3['baiviet'][$nametype]['check_item'] = array(

	"mucluc" => "Mục lục",

	"hienthi" => "Hiển thị"
);

$GLOBAL_LEVEL3['baiviet'][$nametype]['img'] = true;

$GLOBAL_LEVEL3['baiviet'][$nametype]['img-width'] = 285;

$GLOBAL_LEVEL3['baiviet'][$nametype]['img-height'] = 260;

$GLOBAL_LEVEL3['baiviet'][$nametype]['img-ratio'] = 2;

$GLOBAL_LEVEL3['baiviet'][$nametype]['link_cano'] = true;

$GLOBAL_LEVEL3['baiviet'][$nametype]['mota'] = true;

$GLOBAL_LEVEL3['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL_LEVEL3['baiviet'][$nametype]['noidung'] = true;

$GLOBAL_LEVEL3['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL_LEVEL3['baiviet'][$nametype]['seo'] = true;

$GLOBAL_LEVEL3['baiviet'][$nametype]['img-qc'] = false;

$GLOBAL_LEVEL3['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#========================Điều khoản==================== 

// $nametype = 'dieu-khoan';

// $GLOBAL['baiviet'][$nametype]['title_main'] = 'Điều khoản';

// $GLOBAL['baiviet'][$nametype]['title'] = 'Danh sách';


// $GLOBAL['baiviet'][$nametype]['full'] = false;

// $GLOBAL['baiviet'][$nametype]['public'] = true;

// $GLOBAL['baiviet'][$nametype]['link_cano'] = true;

// $GLOBAL['baiviet'][$nametype]['schema'] = true;

// $GLOBAL['baiviet'][$nametype]['tacgia'] = true;

// $GLOBAL['baiviet'][$nametype]['index_robots'] = true;

// $GLOBAL['baiviet'][$nametype]['check'] = array(

// 	"mucluc" => "Mục lục tự động",

// 	"hienthi" => "Hiển thị"

// );

// $GLOBAL['baiviet'][$nametype]['tag'] = true;

// $GLOBAL['baiviet'][$nametype]['img'] = true;

// $GLOBAL['baiviet'][$nametype]['img-width'] = 50;

// $GLOBAL['baiviet'][$nametype]['img-height'] = 50;

// $GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

// $GLOBAL['baiviet'][$nametype]['mota'] = true;

// $GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL['baiviet'][$nametype]['noidung'] = true;

// $GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

// $GLOBAL['baiviet'][$nametype]['job'] = false;

// $GLOBAL['baiviet'][$nametype]['seo'] = true;

// $GLOBAL['baiviet'][$nametype]['alias'] = true;

// $GLOBAL['baiviet'][$nametype]['tag'] = false;

// $GLOBAL['baiviet'][$nametype]['top_nb'] = false;

// $GLOBAL['baiviet'][$nametype]['rating'] = false;

// $GLOBAL['baiviet'][$nametype]['daytin'] = false;

// $GLOBAL['baiviet'][$nametype]['mucluc'] = true;

// $GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

// $GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


#============================Đánh giá khách hàng===============================================

$nametype = 'danh-gia-khach-hang';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'Đánh giá khách hàng';

$GLOBAL['baiviet'][$nametype]['title'] = 'Danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check'] = array(

	"hienthi" => "Hiển thị"

);

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 170;

$GLOBAL['baiviet'][$nametype]['rating'] = true;

$GLOBAL['baiviet'][$nametype]['icon'] = false;

$GLOBAL['baiviet'][$nametype]['img-height'] = 300;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['img-gallery'] = false;

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = false;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = false;

$GLOBAL['baiviet'][$nametype]['job'] = false;

$GLOBAL['baiviet'][$nametype]['seo'] = false;

$GLOBAL['baiviet'][$nametype]['alias'] = false;

$GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

#====================Slider============================

$nametype = 'slider';

$GLOBAL['photo'][$nametype]['title_main'] = 'Slider';

$GLOBAL['photo'][$nametype]['title'] = 'Quản lý slider';

$GLOBAL['photo'][$nametype]['full'] = false;

$GLOBAL['photo'][$nametype]['video'] = true;

$GLOBAL['photo'][$nametype]['img'] = true;

$GLOBAL['photo'][$nametype]['img-width'] = 1150;

$GLOBAL['photo'][$nametype]['img-height'] = 660;

$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

$GLOBAL['photo'][$nametype]['options'] = false;

$GLOBAL['photo'][$nametype]['link'] = true;

$GLOBAL['photo'][$nametype]['mota'] = true;

$GLOBAL['photo'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['photo'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#======================================Giới thiệu đầu trang=============================================================

// $nametype='doi-tac';

// $GLOBAL['photo'][$nametype]['title_main'] = 'Đối tác';

// $GLOBAL['photo'][$nametype]['title'] = 'Danh sách';

// $GLOBAL['photo'][$nametype]['full'] = false;

// $GLOBAL['photo'][$nametype]['img'] = true;

// $GLOBAL['photo'][$nametype]['img-width'] = 153;

// $GLOBAL['photo'][$nametype]['img-height'] = 56;

// $GLOBAL['photo'][$nametype]['img-ratio'] = 1;

// $GLOBAL['photo'][$nametype]['link'] = true;

// $GLOBAL['photo'][$nametype]['mota'] = true;

// $GLOBAL['photo'][$nametype]['numb'] = false;

// $GLOBAL['photo'][$nametype]['mota'] = false;

// $GLOBAL['photo'][$nametype]['mota-ckeditor'] = false;

// $GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


#======================================Giới thiệu đầu trang=============================================================

/* $nametype='quy-trinh';

	$GLOBAL['photo'][$nametype]['title_main'] = 'Quy trình';

	$GLOBAL['photo'][$nametype]['title'] = 'Danh sách';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['img-width'] = 161;

	$GLOBAL['photo'][$nametype]['img-height'] = 140;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['link'] = false;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['numb'] = false;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'; */

#======================================Giới thiệu đầu trang=============================================================

// $nametype = 'logistics';

// $GLOBAL['photo'][$nametype]['title_main'] = 'Logistic';

// $GLOBAL['photo'][$nametype]['title'] = 'Danh sách';

// $GLOBAL['photo'][$nametype]['full'] = false;

// $GLOBAL['photo'][$nametype]['img'] = true;

// $GLOBAL['photo'][$nametype]['img-width'] = 200;

// $GLOBAL['photo'][$nametype]['img-height'] = 73;

// $GLOBAL['photo'][$nametype]['img-ratio'] = 1;

// $GLOBAL['photo'][$nametype]['link'] = true;

// $GLOBAL['photo'][$nametype]['mota'] = false;

// $GLOBAL['photo'][$nametype]['numb'] = false;

// $GLOBAL['photo'][$nametype]['mota'] = false;

// $GLOBAL['photo'][$nametype]['mota-ckeditor'] = false;

// $GLOBAL['photo'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#======================================Giới thiệu đầu trang=============================================================

$nametype = 'intro-top';

$GLOBAL['photo'][$nametype]['title_main'] = 'Giới thiệu thành tựu';

$GLOBAL['photo'][$nametype]['title'] = 'Danh sách';

$GLOBAL['photo'][$nametype]['full'] = false;

$GLOBAL['photo'][$nametype]['img'] = true;

$GLOBAL['photo'][$nametype]['img-width'] = 60;

$GLOBAL['photo'][$nametype]['img-height'] = 60;

$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

$GLOBAL['photo'][$nametype]['link'] = false;

$GLOBAL['photo'][$nametype]['mota'] = true;

$GLOBAL['photo'][$nametype]['numb'] = true;

$GLOBAL['photo'][$nametype]['mota-ckeditor'] = false;

$GLOBAL['photo'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


#======================================Giới thiệu đầu trang=============================================================

// $nametype = 'intro-mid';

// $GLOBAL['photo'][$nametype]['title_main'] = 'Thông số giữa trang';

// $GLOBAL['photo'][$nametype]['title'] = 'Danh sách';

// $GLOBAL['photo'][$nametype]['full'] = false;

// $GLOBAL['photo'][$nametype]['img'] = true;

// $GLOBAL['photo'][$nametype]['img-width'] = 114;

// $GLOBAL['photo'][$nametype]['img-height'] = 85;

// $GLOBAL['photo'][$nametype]['img-ratio'] = 1;

// $GLOBAL['photo'][$nametype]['link'] = false;

// $GLOBAL['photo'][$nametype]['mota'] = true;

// $GLOBAL['photo'][$nametype]['numb'] = true;

// $GLOBAL['photo'][$nametype]['mota'] = false;

// $GLOBAL['photo'][$nametype]['mota-ckeditor'] = false;

// $GLOBAL['photo'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================mạng xã hội============================

$nametype = 'mangxahoi-footer';

$GLOBAL['photo'][$nametype]['title_main'] = 'Mạng xã hội footer';

$GLOBAL['photo'][$nametype]['title'] = 'Danh sách';

$GLOBAL['photo'][$nametype]['full'] = false;

$GLOBAL['photo'][$nametype]['img'] = true;

$GLOBAL['photo'][$nametype]['img-width'] = 40;

$GLOBAL['photo'][$nametype]['img-height'] = 40;

$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

$GLOBAL['photo'][$nametype]['link'] = true;

$GLOBAL['photo'][$nametype]['mota'] = false;

$GLOBAL['photo'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================Background============================

/**
 * 
 */

$nametype = 'intro-top-bg';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background thành tựu';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background thành tựu';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 1530;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 610;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

/**
 * 
 */

$nametype = 'about-bg';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background về chúng tôi';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background về chúng tôi';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 150;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 150;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

/**
 * 
 */

$nametype = 'about-sc-bg';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background phụ về chúng tôi';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background phụ về chúng tôi';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 150;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 150;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


/**
 * 
 */

$nametype = 'service-bg';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background dịch vụ';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background dịch vụ';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 150;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 150;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

/**
 * 
 */
$nametype = 'procedure-bg';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background quy trình làm việc';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background quy trình làm việc';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 150;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 150;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

/**
 * 
 */
$nametype = 'video-bg';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background danh sách video';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background danh sách video';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 150;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 150;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

/**
 * 
 */
$nametype = 'news-bg';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background tin tức sự kiện';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background tin tức sự kiện';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 150;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 150;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

/**
 * 
 */

$nametype = 'regis-bg';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background đăng ký';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background đăng ký';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 1530;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 610;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

/**
 * 
 */

$nametype = 'contact-bg';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background liên hệ';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background liên hệ';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 560;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 290;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

/**
 * 
 */
$nametype = 'bg-customer';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background khách hàng';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background khách hàng';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 1519;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 615;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

/**
 * 
 */

$nametype = 'footer-bg';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background footer';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background footer';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 1530;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 680;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
#====================logo============================

// $nametype = 'img-service';

// $GLOBAL['bannerqc'][$nametype]['title_main'] = 'Hình ảnh dịch vụ';

// $GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Hình ảnh dịch vụ';

// $GLOBAL['bannerqc'][$nametype]['full'] = false;

// $GLOBAL['bannerqc'][$nametype]['img'] = true;

// $GLOBAL['bannerqc'][$nametype]['img-width'] = 434;

// $GLOBAL['bannerqc'][$nametype]['img-height'] = 438;

// $GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

// $GLOBAL['bannerqc'][$nametype]['link'] = false;

// $GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================logo============================

// $nametype = 'bg-service';

// $GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background dịch vụ';

// $GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Background dịch vụ';

// $GLOBAL['bannerqc'][$nametype]['full'] = false;

// $GLOBAL['bannerqc'][$nametype]['img'] = true;

// $GLOBAL['bannerqc'][$nametype]['img-width'] = 1519;

// $GLOBAL['bannerqc'][$nametype]['img-height'] = 612;

// $GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

// $GLOBAL['bannerqc'][$nametype]['link'] = false;

// $GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================logo============================

$nametype = 'banner-all';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Banner trang trong';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Banner trang trong';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 650;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================logo============================

$nametype = 'regis-logo';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Logo đăng ký';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý logo đăng ký';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 150;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 150;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

/**
 * 
 */

$nametype = 'logo';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Logo';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý logo';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 150;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 150;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

/**
 * 
 */

$nametype = 'mobile-logo';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Logo mobile';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý logo mobile';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 150;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 150;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

/**
 * 
 */

$nametype = 'logo-footer';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Logo footer';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Logo footer';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 150;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 150;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================bg footer============================

#===================================bg tin tức video===========================================================

/* $nametype='popup';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Hình ảnh popup';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý hình ảnh popup';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 438;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 329;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = true;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'; */

#====================bg footer============================



#====================Hình đại diện============================

$nametype = 'hinhdaidien';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Hình ảnh share link';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Hình ảnh share link';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 200;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 200;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


#====================================================ĐĂNG KÝ NHẬN TIN====================================

$nametype = 'client';

$GLOBAL['booking'][$nametype]['title_main'] = 'Đăng ký tư vấn';

$GLOBAL['booking'][$nametype]['title'] = 'Quản lý đăng ký tư vấn';

$GLOBAL['booking'][$nametype]['ten'] = true;

$GLOBAL['booking'][$nametype]['full'] = false;

$GLOBAL['booking'][$nametype]['img'] = true;

$GLOBAL['booking'][$nametype]['img-width'] = 380;

$GLOBAL['booking'][$nametype]['img-height'] = 260;

$GLOBAL['booking'][$nametype]['img-ratio'] = 1;

$GLOBAL['booking'][$nametype]['phone'] = true;

$GLOBAL['booking'][$nametype]['email'] = true;

$GLOBAL['booking'][$nametype]['dichvu'] = false;

$GLOBAL['booking'][$nametype]['diachi'] = false;
$GLOBAL['booking'][$nametype]['place'] = true;

$GLOBAL['booking'][$nametype]['noidung'] = true;

$GLOBAL['booking'][$nametype]['ngaytao'] = true;

$GLOBAL['booking'][$nametype]['seo'] = false;

$GLOBAL['booking'][$nametype]['img_type'] = '.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.DOC|.DOCX|.PDF|.RAR|.ZIP|.PPT|.PPTX|.xls|.jpg|.png|.gif|.JPG|.PNG|.GIF';

#====================================================ĐĂNG KÝ NHẬN TIN====================================

// $nametype = 'khuyen-mai';

// $GLOBAL['booking'][$nametype]['title_main'] = 'Nhận mã khuyến mãi';

// $GLOBAL['booking'][$nametype]['title'] = 'Quản lý Nhận mã khuyến mãi';

// $GLOBAL['booking'][$nametype]['ten'] = false;

// $GLOBAL['booking'][$nametype]['full'] = false;

// $GLOBAL['booking'][$nametype]['img'] = true;

// $GLOBAL['booking'][$nametype]['img-width'] = 380;

// $GLOBAL['booking'][$nametype]['img-height'] = 260;

// $GLOBAL['booking'][$nametype]['img-ratio'] = 1;

// $GLOBAL['booking'][$nametype]['phone'] = false;

// $GLOBAL['booking'][$nametype]['email'] = true;

// $GLOBAL['booking'][$nametype]['dichvu'] = false;

// $GLOBAL['booking'][$nametype]['diachi'] = false;

// $GLOBAL['booking'][$nametype]['dientich'] = false;

// $GLOBAL['booking'][$nametype]['taichinh'] = false;

// $GLOBAL['booking'][$nametype]['noidung'] = false;

// $GLOBAL['booking'][$nametype]['ngaytao'] = true;

// $GLOBAL['booking'][$nametype]['seo'] = false;

// $GLOBAL['booking'][$nametype]['img_type'] = '.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.DOC|.DOCX|.PDF|.RAR|.ZIP|.PPT|.PPTX|.xls|.jpg|.png|.gif|.JPG|.PNG|.GIF';

#========================Chính sách==================== 

$nametype = 'chinh-sach';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'Chính sách';

$GLOBAL['baiviet'][$nametype]['title'] = 'Danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['public'] = true;

$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

$GLOBAL['baiviet'][$nametype]['schema'] = true;

$GLOBAL['baiviet'][$nametype]['tacgia'] = true;

$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

$GLOBAL['baiviet'][$nametype]['check'] = array(

	"mucluc" => "Mục lục tự động",

	"hienthi" => "Hiển thị"

);

$GLOBAL['baiviet'][$nametype]['tag'] = true;

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 50;

$GLOBAL['baiviet'][$nametype]['img-height'] = 50;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['job'] = false;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

$GLOBAL['baiviet'][$nametype]['rating'] = false;

$GLOBAL['baiviet'][$nametype]['daytin'] = false;

$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

$GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


#================================================Yêu cầu gọi lại======================================================================

$nametype = 'goi-lai';

$GLOBAL['booking'][$nametype]['title_main'] = 'Yêu cầu gọi lại';

$GLOBAL['booking'][$nametype]['title'] = 'Quản lý Yêu cầu gọi lại';

$GLOBAL['booking'][$nametype]['full'] = false;

$GLOBAL['booking'][$nametype]['img'] = true;

$GLOBAL['booking'][$nametype]['img-width'] = 380;

$GLOBAL['booking'][$nametype]['img-height'] = 260;

$GLOBAL['booking'][$nametype]['img-ratio'] = 1;

$GLOBAL['booking'][$nametype]['phone'] = true;

$GLOBAL['booking'][$nametype]['email'] = false;

$GLOBAL['booking'][$nametype]['dichvu'] = false;

$GLOBAL['booking'][$nametype]['diachi'] = false;

$GLOBAL['booking'][$nametype]['noidung'] = false;

$GLOBAL['booking'][$nametype]['ngaytao'] = true;

$GLOBAL['booking'][$nametype]['seo'] = false;

$GLOBAL['booking'][$nametype]['img_type'] = '.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.DOC|.DOCX|.PDF|.RAR|.ZIP|.PPT|.PPTX|.xls|.jpg|.png|.gif|.JPG|.PNG|.GIF';

#====================company============================

$nametype = 'lien-he';

$GLOBAL['company'][$nametype]['title_main'] = 'liên hệ';

$GLOBAL['company'][$nametype]['title'] = 'Quản lý liên hệ';

$GLOBAL['company'][$nametype]['full'] = false;

$GLOBAL['company'][$nametype]['upload'] = false;

$GLOBAL['company'][$nametype]['img'] = true;

$GLOBAL['company'][$nametype]['img-width'] = 380;

$GLOBAL['company'][$nametype]['img-height'] = 260;

$GLOBAL['company'][$nametype]['img-ratio'] = 1;

$GLOBAL['company'][$nametype]['link'] = true;

$GLOBAL['company'][$nametype]['mota'] = true;

$GLOBAL['company'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['company'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================company============================

$nametype = 'title-regis';

$GLOBAL['company'][$nametype]['title_main'] = 'Tiêu đề và mô tả đăng ký đại lý';

$GLOBAL['company'][$nametype]['title'] = 'Quản lý Tiêu đề và mô tả đăng ký đại lý';

$GLOBAL['company'][$nametype]['ten'] = true;

$GLOBAL['company'][$nametype]['full'] = false;

$GLOBAL['company'][$nametype]['upload'] = false;

$GLOBAL['company'][$nametype]['img'] = true;

$GLOBAL['company'][$nametype]['img-width'] = 380;

$GLOBAL['company'][$nametype]['img-height'] = 260;

$GLOBAL['company'][$nametype]['img-ratio'] = 1;

$GLOBAL['company'][$nametype]['link'] = true;

$GLOBAL['company'][$nametype]['mota'] = true;

$GLOBAL['company'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['company'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================company============================

// $nametype='title-service';

// $GLOBAL['company'][$nametype]['title_main'] = 'Tiêu đề và mô tả dịch vụ';

// $GLOBAL['company'][$nametype]['title'] = 'Quản lý Tiêu đề và mô tả dịch vụ';

// $GLOBAL['company'][$nametype]['ten'] = true;

// $GLOBAL['company'][$nametype]['full'] = false;

// $GLOBAL['company'][$nametype]['upload'] = false;

// $GLOBAL['company'][$nametype]['img'] = true;

// $GLOBAL['company'][$nametype]['img-width'] = 380;

// $GLOBAL['company'][$nametype]['img-height'] = 260;

// $GLOBAL['company'][$nametype]['img-ratio'] = 1;

// $GLOBAL['company'][$nametype]['link'] = true;

// $GLOBAL['company'][$nametype]['mota'] = true;

// $GLOBAL['company'][$nametype]['mota-ckeditor'] = true;	

// $GLOBAL['company'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================company============================

// $nametype='title-video';

// $GLOBAL['company'][$nametype]['title_main'] = 'Tiêu đề và mô tả video';

// $GLOBAL['company'][$nametype]['title'] = 'Quản lý Tiêu đề và mô tả video';

// $GLOBAL['company'][$nametype]['ten'] = true;

// $GLOBAL['company'][$nametype]['full'] = false;

// $GLOBAL['company'][$nametype]['upload'] = false;

// $GLOBAL['company'][$nametype]['img'] = true;

// $GLOBAL['company'][$nametype]['img-width'] = 380;

// $GLOBAL['company'][$nametype]['img-height'] = 260;

// $GLOBAL['company'][$nametype]['img-ratio'] = 1;

// $GLOBAL['company'][$nametype]['link'] = true;

// $GLOBAL['company'][$nametype]['mota'] = true;

// $GLOBAL['company'][$nametype]['mota-ckeditor'] = true;	

// $GLOBAL['company'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================company============================

$nametype = 'footer';

$GLOBAL['company'][$nametype]['title_main'] = 'Mô tả liên hệ footer';

$GLOBAL['company'][$nametype]['title'] = 'Quản lý mô tả liên hệ footer';

$GLOBAL['company'][$nametype]['full'] = false;

$GLOBAL['company'][$nametype]['upload'] = false;

$GLOBAL['company'][$nametype]['img'] = true;

$GLOBAL['company'][$nametype]['img-width'] = 380;

$GLOBAL['company'][$nametype]['img-height'] = 260;

$GLOBAL['company'][$nametype]['img-ratio'] = 1;

$GLOBAL['company'][$nametype]['link'] = true;

$GLOBAL['company'][$nametype]['mota'] = true;

$GLOBAL['company'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['company'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


// #====================HotLine============================

$nametype = "hotline";
$GLOBAL['map'][$nametype]['title_main'] = 'Hotline';
$GLOBAL['map'][$nametype]['title'] = 'Quản lý hotline';
$GLOBAL['map'][$nametype]['phone'] = true;
$GLOBAL['map'][$nametype]['mota'] = false;
$GLOBAL['map'][$nametype]['email'] = false;
$GLOBAL['map'][$nametype]['iframe_map'] = true;

#====================setting============================

$GLOBAL['setting']['tieude'] = true;

$GLOBAL['setting']['diachi'] = true;

$GLOBAL['setting']['chaychu1'] = false;

$GLOBAL['setting']['chaychu2'] = false;

$GLOBAL['setting']['slogan'] = false;

$GLOBAL['setting']['mota'] = false;

$GLOBAL['setting']['timework'] = false;

$GLOBAL['setting']['time'] = false;

$GLOBAL['setting']['email'] = true;

$GLOBAL['setting']['hotline'] = true;

$GLOBAL['setting']['hotline-advance'] = true;

$GLOBAL['setting']['page_video'] = true;

$GLOBAL['setting']['dienthoai'] = true;

$GLOBAL['setting']['page_in'] = true;

$GLOBAL['setting']['page_service'] = true;

$GLOBAL['setting']['page_album'] = false;

$GLOBAL['setting']['pagein_project'] = false;

$GLOBAL['setting']['page_ne'] = true;

$GLOBAL['setting']['page_sp'] = true;

$GLOBAL['setting']['postalcode'] = true;

$GLOBAL['setting']['tax_code'] = false;

$GLOBAL['setting']['blank'] = false;

$GLOBAL['setting']['denominator'] = false;

$GLOBAL['setting']['symbol'] = false;

$GLOBAL['setting']['code'] = false;

$GLOBAL['setting']['city'] = true;

$GLOBAL['setting']['district'] = true;

$GLOBAL['setting']['message'] = true;

$GLOBAL['setting']['counter'] = false;

$GLOBAL['setting']['zalo'] = true;

$GLOBAL['setting']['website'] = true;

$GLOBAL['setting']['laisuat'] = false;

$GLOBAL['setting']['phivanchuyen'] = false;

$GLOBAL['setting']['toado'] = true;

$GLOBAL['setting']['seo'] = true;

$GLOBAL['setting']['iframe'] = true;

$GLOBAL['setting']['iframe1'] = true;

$GLOBAL['setting']['fanpage'] = true;

$GLOBAL['setting']['copyright'] = false;

$GLOBAL['setting']['faceid'] = true;

$GLOBAL['setting']['toc'] = true;

$GLOBAL['setting']['block'] = false;

$GLOBAL['setting']['time_slider'] = true;

$GLOBAL['setting']['slider'] = true;

$GLOBAL['setting']['linksyoutube'] = false;

$GLOBAL['setting']['links'] = false;

$GLOBAL['setting']['videofile'] = true;

$GLOBAL['setting']['slide'] = false;

$GLOBAL['setting']['nonecopy'] = false;

$GLOBAL['setting']['background'] = true;

$GLOBAL['setting']['watermark'] = false;

$GLOBAL['setting']['slider_video'] = true;

$GLOBAL['setting']['tag'] = false;

$GLOBAL['setting']['changedola'] = false;

$GLOBAL['setting']['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';



#====================company footer============================
// $nametype = 'company-footer';

// $GLOBAL['company'][$nametype]['title_main'] = 'Giới thiệu cửa hàng footer';

// $GLOBAL['company'][$nametype]['title'] = 'Quản lý giới thiệu cửa hàng footer';

// $GLOBAL['company'][$nametype]['full'] = false;

// $GLOBAL['company'][$nametype]['upload'] = false;

// $GLOBAL['company'][$nametype]['img'] = false;

// $GLOBAL['company'][$nametype]['img-width'] = 380;

// $GLOBAL['company'][$nametype]['img-height'] = 260;

// $GLOBAL['company'][$nametype]['img-ratio'] = 1;

// $GLOBAL['company'][$nametype]['link'] = true;

// $GLOBAL['company'][$nametype]['mota'] = true;

// $GLOBAL['company'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL['company'][$nametype]['noidung'] = false;

// $GLOBAL['company'][$nametype]['noidung-ckeditor'] = true;

// $GLOBAL['company'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


// $nametype = 'name-company';

// $GLOBAL['company'][$nametype]['title_main'] = 'Tên cửa hàng';

// $GLOBAL['company'][$nametype]['title'] = 'Tên cửa hàng';

// $GLOBAL['company'][$nametype]['full'] = false;

// $GLOBAL['company'][$nametype]['upload'] = false;

// $GLOBAL['company'][$nametype]['img'] = false;

// $GLOBAL['company'][$nametype]['img-width'] = 380;

// $GLOBAL['company'][$nametype]['img-height'] = 260;

// $GLOBAL['company'][$nametype]['img-ratio'] = 1;

// $GLOBAL['company'][$nametype]['link'] = true;

// $GLOBAL['company'][$nametype]['mota'] = true;

// $GLOBAL['company'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL['company'][$nametype]['noidung'] = false;

// $GLOBAL['company'][$nametype]['noidung-ckeditor'] = true;

// $GLOBAL['company'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


#====================map============================

// map
// $nametype = 'chi-nhanh';

// $GLOBAL['map'][$nametype]['title_main'] = 'Chi nhánh';

// $GLOBAL['map'][$nametype]['title'] = 'Quản lý Chi nhánh';

// $GLOBAL['map'][$nametype]['full'] = false;

// $GLOBAL['map'][$nametype]['img'] = true;

// $GLOBAL['map'][$nametype]['img-width'] = 118;

// $GLOBAL['map'][$nametype]['img-height'] = 118;

// $GLOBAL['map'][$nametype]['img-ratio'] = 1;

// $GLOBAL['map'][$nametype]['place'] = true;

// $GLOBAL['map'][$nametype]['diachi'] = true;

// $GLOBAL['map'][$nametype]['phone'] = true;

// $GLOBAL['map'][$nametype]['link'] = false;
// $GLOBAL['map'][$nametype]['email'] = false;


// $GLOBAL['map'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
