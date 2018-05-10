<?php

    $m = rand(1,12);
    echo $m . '<br>';
    switch ($m){
        case 1: case 3: case 5:case 7:case 8:case 10:case 12:
            echo '31';
            break;
        default:
        case 4:case 6:case 9:case 11:
            echo '30';
            break;
        case 2:
            echo '28';
            break;
    }

    echo '<hr>';


    $a = '1';
    switch ($a){
        case 2: echo 'A'; break;
        case 1.0: echo 'B'; break;
        case '1': echo 'C'; break;
        default: echo 'X';
    }
