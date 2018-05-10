<?php
    $fp = fopen("test1/brad2.txt",'a+');

    fwrite($fp, "Hello, Brad");
//    $cont = fread($fp, 4096);
//    echo $cont;

    fclose($fp);