<?php 

    require_once 'ajaxConfig.php';

    @$email = htmlspecialchars($_POST['email']);

    $checkPhone = $db->rawQueryOne('select id,dienthoai from #_booking where email=? and type=?',array($email,'khuyen-mai'));

    if($checkPhone){

        $result["status"] = 201;

        $result['message'] = "Email đã tồn tại trong hệ thống!!!";

    }else{

        $send["email"] = $email;

        $send["hienthi"] = 1;

        $send["ngaytao"] = time();

        $send["type"] = 'khuyen-mai';

        $id_insert = $db->insert('booking',$send);

        if ($id_insert) {

            $result['status'] = 200;

            $result['message'] = 'Gửi thông tin thành công, Cảm ơn bạn đã quan tâm!!!';

        }else{

            $result['status'] = 201;

            $result['message'] = 'Gửi yêu cầu thất bại';

        }

        // if($func->sendMailAjax($row_setting['email'],'Yêu cầu tư vấn gọi lại từ website','Yêu cầu tư vấn gọi lại từ website',array($row_setting['email']),null,null)){
            
        //     if ($id_insert) {

        //         $result['status'] = 200;

        //         $result['message'] = 'Gửi thông tin thành công, Cảm ơn bạn đã quan tâm!!!';

        //     }


        // }else{

        //     $result['status'] = 201;

        //     $result['message'] = 'Gửi yêu cầu thất bại'; 

        // }
        
    }

    echo json_encode($result);

?>