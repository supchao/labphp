<?php
    if (!isset($_FILES['upload'])) die("Server Busy");

    echo 'OK';
    $upload = $_FILES['upload'];
//    foreach ($upload as $k => $v){
//        echo "{$k} : {$v}<br>";
//    }

    if ($upload['error'] == 0){
        copy($upload['tmp_name'],
            "test3/{$upload['name']}");
    }