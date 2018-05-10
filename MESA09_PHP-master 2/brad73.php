<?php
$cont = file_get_contents("http://gis.taiwan.net.tw/XMLReleaseALL_public/scenic_spot_C_f.json");
$cont = strip_tags($cont);
var_dump($cont);
echo '<hr>';
$root = json_decode($cont);
var_dump($root);

