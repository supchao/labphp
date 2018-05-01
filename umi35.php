
<?php
$fp = fopen("https://tw.stock.yahoo.com/us/q?stock_id=^N225",'r');


while($c = fgets($fp)){////     fgetc 1byte讀取  //fgets整列讀取    //fgetss去除html 標籤
    if(preg_match('/href=/',$c)){
        if(preg_match('/2345/',$c)){
            echo '==>' . $c;
        }

    }
    echo $c ;
}

//$cont = fread($fp,4096);
//$cont = fgetc($fp);
//echo $cont;
fclose($fp);
?>