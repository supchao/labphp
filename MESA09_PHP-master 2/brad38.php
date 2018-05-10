<?php
$fp = fopen("https://tw.stock.yahoo.com/q/q?s=2345",'r');


while ($c = fgets($fp)){

    if (preg_match('/href/',$c)){
        if (preg_match("/2345/", $c)){
            echo '==> ' . $c ;
        }

    }


}

fclose($fp);