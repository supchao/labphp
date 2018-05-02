<?php
include_once 'umi47_OO.php';
$mybike = new umi47OO();

$umi = new people();
$umi->setBike();
echo $umi->bike->getspeed().'<br>';

$you = new people();

$you->setBike();
$you->upBikespeed();
$you->upBikespeed();
$you->upBikespeed();
echo $you->displayBikespeed();
?>