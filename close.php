<?php
include_once 'sql.php';
include_once 'cart.php';
include_once 'member.php';

session_start();
$cart = $_SESSION['cart'];
$member = $_SESSION['member'];
foreach($cart->getList() as $pid=>$num){
    $cid =$member->id;
    $sql = "insert into `order` (pid,cid,amount,odate)" .
        "values($pid,$cid,$num,now())";
    $mysqli->query($sql);
}
?>