<?php

include_once 'sql.php';
include_once 'member.php';
session_start();
$member = $_SESSION['member'];
$sql = "update member set state=0 where id= {$member->id}";
$result = $mysqli->query($sql);

if($result) {
    session_destroy(); //
    header('Location:talkroom.php');
}
?>