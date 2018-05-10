<?php
    include_once 'MyOOTest.php';
    include_once 'Bike.php';

    $bike = new Bike();

    $root = new MyOOTest();
    $sub1 = new Sub1();
    $sub2 = new Sub2();

    doM2($sub1);
    doM2($root);
    echo '<hr>';
    $sub11 = new Sub1();
    $sub12 = new Sub1();
    $sub11->x = 12; $sub12->x=34;
    echo "{$sub11->x} : {$sub12->x}<br>";
    $sub13 = clone $sub12;
    $sub12 = $sub11;
    echo "{$sub11->x} : {$sub12->x} : {$sub13->x}<br>";
    $sub12->x = 56;
    echo "{$sub11->x} : {$sub12->x} : {$sub13->x}<br>";
    echo '<hr>';
    //$test1 = new Test1();   // 無法建立出物件實體
    $test11 = new Test11();
    $test12 = new Test12();

    function doM2(MyOOTest $obj){
        if ($obj instanceof Sub1){
            echo 'I am sub1<br>';
        }else if ($obj instanceof Sub2){
            echo 'I am sub2<br>';
        }else if($obj instanceof MyOOTest){
            echo 'I am myootest<br>';
        }
    }