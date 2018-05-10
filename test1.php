<?php
$cont = file_get_contents("https://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeJ&category=6");

$root = json_decode($cont);
var_dump($root);