<?php
include_once 'sql.php';
include_once 'member.php';
include_once 'mesg.php';

date_default_timezone_set('Asia/Taipei');
$message=array();


    $sql = "select *from member where state = 1";
    $result = $mysqli->query($sql);
    if($result->num_rows>0) {
        while ($dato = $result->fetch_assoc()) {
            $message[] = $dato;
        }
        $message = json_encode($message);
    }
    else{$message=false;}

echo $message;
