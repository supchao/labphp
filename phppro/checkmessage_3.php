<?php
include_once 'sql.php';
include_once 'member.php';
include_once 'mesg.php';
session_start();
date_default_timezone_set('Asia/Taipei');
$result='';
$reto=0;
if (isset($_GET['id']) ) {
    $id = $_GET['id'];

    $sql = "insert into member(`state`)values(false) where id={$id}";
    $reto = $mysqli->query($sql);
}
if($reto){
$result='1';}

echo $result;

