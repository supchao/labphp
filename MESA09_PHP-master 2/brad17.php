<?php
    $p = array(1 => 0,0,0,0,0,0);

    for ($i =0 ; $i<1000000; $i++){
        $point = rand(1,9);
        $p[$point>=7?$point-6:$point]++;
    }

    for ($i = 1; $i<=6; $i++){
        echo "{$i}點出現{$p[$i]}次<br>";
    }

    echo '<hr>';
    for ($i = 1; $i<=count($p); $i++){
        echo "{$i}點出現{$p[$i]}次<br>";
    }

    echo '<hr>';
    foreach ($p as $key => $value){
        echo "{$key} : {$value}<br>";
    }



