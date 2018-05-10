<?php
    include_once 'Bike.php';

    $m1 = new Member('111');
    $m1->id = '456'; $m1->name='Brad';
    echo $m1->id . ':' . $m1->name;
