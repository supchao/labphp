<?php  ///  39  40
$filename =$_REQUEST['filename'];
$cont = $_REQUEST['cont'];
$fp = fopen("test3/{$filename}",'a+');
fwrite($fp,$cont);
fclose($fp);

header("Location:test3/{$filename}");
?>