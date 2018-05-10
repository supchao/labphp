<?php
    include_once 'Bike.php';

    define("Var2", 345);
    echo Var2;

    const Var3 = 789;
    echo Var3;

    $brad = new People();
    $brad->setBike();
    echo $brad->bike->getSpeed();

    $you = new People();
    $you->setBike();
    $you->bike->upSpeed();
    $you->bike->upSpeed();
    $you->bike->upSpeed();
    echo $you->bike->getSpeed();


