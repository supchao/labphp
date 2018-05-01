
<?php
$fp = fopen("test1/iii.txt",'r');


while($c = fgets($fp)){////     fgetc 1byte讀取  //fgets整列讀取    //fgetss去除html 標籤
    echo $c . '<br>';
}

//$cont = fread($fp,4096);
//$cont = fgetc($fp);
//echo $cont;
fclose($fp);
?>