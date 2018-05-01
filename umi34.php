
<?php
$fp = fopen("test1/iii2.txt",'a+');


//while($c = fgets($fp)){////     fgetc 1byte讀取  //fgets整列讀取    //fgetss去除html 標籤
//    echo $c . '<br>';
//}


fwrite($fp,"hello, umi");

//$cont = fread($fp,4096);
//echo $cont;


fclose($fp);
?>