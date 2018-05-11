<?php
include_once 'umi81.php';
$x = $_REQUEST['x'];
$y = $_REQUEST['y'];

$result = calxy($x,$y);

//header("Location:umi82.php?result={$result}");

$view = file_get_contents('umi82.html');

$view = str_replace('###',$result,$view);
echo $view;
?>