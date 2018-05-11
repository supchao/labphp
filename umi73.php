<?php
$cont = file_get_contents('http://gis.taiwan.net.tw/XMLReleaseALL_public/scenic_spot_C_f.json');
//$cont = 'a 556href ';
//$cont = urlencode($cont);
//$response = @file_get_contents('http://gis.taiwan.net.tw/XMLReleaseALL_public/scenic_spot_C_f.json');

$con ='/<a/';
$cooon = '<\a';
$cont = preg_replace($con,$cooon,$cont);
$root = json_decode($cont);


echo "{$cont}:";
