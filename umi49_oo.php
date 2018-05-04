<?php
include_once 'umi47_OO.php';

$myid = new Twid('');
echo $myid->getId().'<br>';

echo $myid->getGender()?'男生<br>':'女生<br>';

echo $myid->getArea().'<br>';

if(Twid::checkTWid($myid->getId())){
    echo 'ok'.'<br>';
}
else {
    echo 'xx'.'<br>';
}
//    echo umi47OO::$counter;         //類別級別的呼叫
echo '<hr>';
//try{
//    $urID = new Twid('A123456787');
//    echo $urID->getId() . '<br>';
//}catch (Exception $e){
//    $urID = null;
//    echo $e->getMessage();
//}
?>

