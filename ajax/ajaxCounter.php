<?php

    require_once 'ajaxConfig.php';

    if($func->isAjax()){
        
        $cache = new FileCache($db);

        $statistic = new statitis($db,$cache); 


        $res["message"] = "Cập nhật thành công!!!";
      
    }

    echo json_encode($res);
    
?>