<?php
include_once 'sql.php';
include_once 'member.php';
session_start();
date_default_timezone_set('Asia/Taipei');
$result =0;
if( isset($_GET['idmo'])){
    $id = $_GET['idmo'];
    $member = $_SESSION['member'];
    $name = $member->name;
    $intext = $_GET['intext'];
    $datetime = date ("Y-m-d H:i:s");
    $sql="insert into message(`whoid`,`mesg`)values({$id},'{$intext}')";
    $reto =  $mysqli->query($sql);
}
if($reto) {
    $result = "{$datetime}&nbsp{$name}&nbsp說&nbsp{$intext}";
}
echo $result;