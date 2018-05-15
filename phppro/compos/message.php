<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/5/15
 * Time: 上午10:04
 */
include_once 'sql.php';
include_once 'mesg.php';
$sql="select * from message";
$result = $mysqli->query($sql);

class message
{
    function getmessage(){

//        $result = 1;
//    return $data= $result;
    return $data= $result->fetch_object('mesg');
    }
}