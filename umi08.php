<?php
    $x = $_GET['x'];
    $y = $_GET['y'];
    echo $x + $y . '<br>';
    echo $x . ':'. gettype($x) . '<br>';
    var_dump($x);
?>