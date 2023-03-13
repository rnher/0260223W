<?php

require_once 'ajaxConfig.php';

if ($func->isAjax()) {

    @$fullname = htmlspecialchars($_POST['name']);

    @$email = htmlspecialchars($_POST['email']);

    @$phone = htmlspecialchars($_POST['phone']);

    @$service = htmlspecialchars($_POST['service']);
    @$capcha = htmlspecialchars($_POST['capcha']);

    /* @$address = htmlspecialchars($_POST['address']); */

    @$content = htmlspecialchars($_POST['content']);

    $checkEmail = $db->rawQueryOne("select id from #_booking where email=? and type=? limit 0,1", array($email, 'client'));

    if ($checkEmail) {

        $response['status'] = 201;

        $response['error'] = 'error';

        $response['message'] = 'Email của bạn đã tồn tại trong hệ thống !';
    } else if ($capcha != $_SESSION['captcha_code']) {
        $response['status'] = 201;

        $response['error'] = 'error';

        $response['message'] = 'Mã xác nhận không đúng !';
    } else {

        $data['ten_vi'] = $fullname;
        // $data['id_city']=$id_city;

        $data['email'] = $email;

        $data['dienthoai'] = $phone;

        $data['noidung'] = $content;

        $data['id_dichvu'] = $service;

        // $data['diachi']=$address;

        $data['type'] = 'client';

        $data['ngaytao'] = time();

        $data['hienthi'] = 1;

        $insert = $db->insert('booking', $data);

        if ($insert) {

            $response['status'] = 200;

            $response['error'] = 'success';

            $response['message'] = 'Gửi thông tin thành công!!! cảm ơn bạn đã quan tâm';
        } else {

            $response['status'] = 201;

            $response['error'] = 'error';

            $response['message'] = 'Hệ thống lỗi đăng ký không thành công !!';
        }

        if($func->sendMailAjax($row_setting['email'],'Đăng ký tư vấn từ website','Đăng ký tư vấn từ website',array($row_setting['email']),null,null)){

        if($insert){

            $response['status']=200;

            $response['error']='success';

            $response['message']='Đăng ký thành công!!! cảm ơn bạn đã quan tâm';

        }else{

            $response['status']=201;

            $response['error']='error';

            $response['message']='Hệ thống lỗi đăng ký không thành công !!';

        }

    }

    echo json_encode($response);
}
