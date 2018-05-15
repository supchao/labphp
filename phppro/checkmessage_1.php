<?php
include_once 'sql.php';
include_once 'member.php';
include_once 'mesg.php';
session_start();
date_default_timezone_set('Asia/Taipei');

    $sql = "select message.mesg as mesg,message.interdate as interdate,member.name as name from message,member where message.whoid = member.id";
    $result = $mysqli->query($sql);
    while($dato = $result->fetch_object('mesg')){
        $message[] = $dato;
    }
    $message = json_encode($message);

echo $message;
