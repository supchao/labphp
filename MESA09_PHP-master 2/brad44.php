<?php

    $upload = $_FILES['upload'];
//    foreach ($upload as $key => $value){
//        echo "{$key} : ";
//        var_dump($value);
//        echo '<hr />';
//    }

    foreach ($upload['error'] as $key => $value){
        if ($value == 0){
            if (copy($upload['tmp_name'][$key],
                "test3/{$upload['name'][$key]}")){
                echo 'Upload OK:' . $upload['name'][$key] .
                    '<br>';
            }else{
                echo 'Upload Fail:' . $upload['name'][$key] .
                    '<br>';
            }
        }
    }

