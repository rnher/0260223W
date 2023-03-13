<?php

    require_once 'ajaxConfig.php';


    $characters = $func->randString(7);

    $res["characters"] = $characters;

    echo json_encode($res);

?>