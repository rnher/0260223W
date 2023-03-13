<?php

    require_once 'ajaxConfig.php';

    $output = '';

    $output .= '<div class="fb-page" data-href="'.$row_setting['facebook'].'" data-width="300"

        data-height="300" data-small-header="false" data-adapt-container-width="true"

        data-hide-cover="false" data-show-facepile="true" data-show-posts="true">

        <div class="fb-xfbml-parse-ignore">

            <blockquote cite="'.$row_setting['facebook'].'"><a

                    href="'.$row_setting['facebook'].'">'.$row_setting['name_'.$lang].'</a>

            </blockquote>

         </div>

    </div>';

    $res["html"] = $output;

    echo json_encode($res);

?>