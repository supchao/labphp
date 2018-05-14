<?php
include_once 'message.php';
session_start();
$tak = $_REQUEST['tak'];
$pin = $_REQUEST['pin'];
$cart = new message();
$cart->putin($pin,$tak);
foreach($cart->getpin() as $k=>$v){
    echo "{$k}:{$v}";
}
?>