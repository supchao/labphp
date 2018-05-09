<?php
include_once 'sql.php';
include_once 'product.php';
include_once 'cart.php';
session_start();
$cart = $_SESSION['cart'];
$pid = $_REQUEST['pid']; $num = $_REQUEST['num'];
$cart->addProduct($pid, $num);
foreach ($cart->getList() as $k => $v){
    echo "{$k} : {$v} ";
}