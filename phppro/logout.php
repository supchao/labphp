<?php

include_once 'sql.php';
include_once 'member.php';
if($_REQUEST['id']){
    $id= $_REQUEST['id'];
}
$sql = "update member set state=0 where id= $id";
$result = $mysqli->query($sql);




if($result) {
    unset($_SESSION['member']);
    header('Location:talkroom.php');
}
?>