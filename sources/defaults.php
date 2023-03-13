<?php
	
	$page_index=$deviceType=='phone' ? 20 : 20;

	$viewed = [];

	if(isset($_SESSION['view'])){
		$viewed = $_SESSION['view'];
	}else{
		$_SESSION['view'] = array();
	}
	
	$row_setting= $db->rawQueryOne("select * from #_setting limit 0,1");

	$bg_header = $func->OneDataPhoto(null,'bg-header','limit 0,1',"array");                                          // Background top

	$logo = $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logo'));

	$bocongthuong = $db->rawQueryOne("select photo_$lang as photo,link from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bocongthuong'));

	$logo_footer =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logo-footer'));

	$mobile_logo=$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('mobile-logo'));

	$seoPage =$db->rawQueryOne("select photo_$lang,options from #_bannerqc where hienthi=1 and type=? limit 0,1",array('hinhdaidien'));

	$socical = $db->rawQuery("select id,photo_$lang as photo,ten_$lang as ten,link from #_photo where hienthi=1 and type=?",array('mangxahoi'));

	$socical_footer = $db->rawQuery("select id,photo_$lang as photo,ten_$lang as ten,link from #_photo where hienthi=1 and type=?",array('mangxahoi-footer'));

	$footer_bg =$db->rawQueryOne("select photo_$lang from #_bannerqc where hienthi=1 and type=? limit 0,1",array('footer-bg'));

	$chinhsach = $db->rawQuery("select type,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet where type=? and hienthi=1 order by stt asc,id desc",array('chinh-sach'));
	
	// index
	$hotline= $db->rawQuery("select ten_$lang as ten,phone from #_map where hienthi=1 and type=? order by stt asc",array('hotline'));

	$footer=$db->rawQueryOne("select mota_$lang as mota from #_company where type=? limit 1",array('footer'));


	$maps = $db->rawQuery("select id,ten_$lang, diachi_$lang, phone, email,website,iframe_map from #_map where hienthi=1 order by stt asc,id desc limit 0,2");

	$list_c1 = $db->rawQuery("select id, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type,icon, photo from #_baiviet_list where hienthi=1 and type=? order by stt desc",array('san-pham'));

	$list_c1_dv = $db->rawQuery("select id, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type from #_baiviet_list where hienthi=1 and type=? order by stt asc",array('dich-vu'));

	$list_c1_footer = $db->rawQuery("select id, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type from #_baiviet_list where hienthi=1 and footer=1 and type=? order by stt desc",array('san-pham'));
	
	$banner_tpl = $func->OneDataPhoto(null,'banner-all',null,'array');

	$list_c1_tt = $db->rawQuery("select id, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type from #_baiviet_list where hienthi=1 and type=? order by stt desc",array('tin-tuc'));
	
?>