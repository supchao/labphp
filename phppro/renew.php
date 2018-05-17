<?php
include_once 'sql.php';
include_once 'member.php';
include_once 'mesg.php';

date_default_timezone_set('Asia/Taipei');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $datetime = date("Y-m-d H:i:s");
    $sql = "insert into (state) values (0) where id={$id}";

    $result = $mysqli->query($sql);
    if($result){
        echo true;
    }
    else{
        header("Location:logout.php?id={$id}");
    }
}
