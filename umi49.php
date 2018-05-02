<?php
include_once 'umi47_OO.php';
$myid = new Twid(false);
echo $myid->getId().'<br>';

echo $myid->getGender()?'男生<br>':'女生<br>';


if(Twid::checkTWid($myid->getId())){
    echo 'ok'.'<br>';
}
else {
    echo 'xx'.'<br>';
}
    echo umi47OO::$counter;         //類別級別的呼叫

?>