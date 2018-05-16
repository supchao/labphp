<?php
include_once 'sql.php';
include_once 'member.php';
include_once 'mesg.php';
session_start();
date_default_timezone_set('Asia/Taipei');
$result='';
$reto=0;
if (isset($_GET['id'])  && isset($_GET['intext'])) {
    $id = $_GET['id'];
    $member = $_SESSION[$id];
    $name = $member->name;
    $intext = $_GET['intext'];
    $datetime = date("Y-m-d H:i:s");
    $sql = "insert into message(`whoid`,`mesg`,`interdate`)values({$id},'{$intext}','{$datetime}')";
    $reto = $mysqli->query($sql);
}
if ($reto) {
    $result = "{$datetime}&nbsp{$name}&nbsp說&nbsp{$intext}";
}

echo $result;

