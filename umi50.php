<?php
include_once 'umi47_OO.php';

$myscooter = new Scooter(4);
echo $myscooter->getspeed().'<br>';
$myscooter->upspeed();
echo $myscooter->getspeed().'<br>';
$myscooter->downspeed();
echo $myscooter->getspeed().'<br>';
$myscooter->upspeed(4);
echo $myscooter->getspeed().'<br>';
?>