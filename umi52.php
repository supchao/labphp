<?php
include_once 'myootest.php';
include_once 'umi47_OO.php';
$root = new MyOOTest();
$sub1 = new sub1();
$sub2 = new sub2();
$bike = new umi47OO();

$root->m1();                            //繼承
$sub1->m1();
$sub2->m1();

doM2($sub1);
doM2($sub2);
echo '<hr>';

$sub11 = new sub1();
$sub12 = new sub1();
$sub11->x = 12;
$sub12->x = 34;
echo "{$sub11->x} : {$sub12->x}<br>";
$sub13 = clone $sub12;                  //clone 複製屬性
$sub12 = $sub11;
echo "{$sub11->x} : {$sub12->x} : {$sub13->x}<br>";
$sub12->x = 56;
echo "{$sub11->x} : {$sub12->x} : {$sub13->x}<br>";

echo "<hr>";
//$test1 = new test1();                 抽象類別
$test11 = new test11();
$test12 = new test12();

$test11 -> m2();
$test12 -> m2();
//
//function doM2(MyOOTest $obj){             1
//    //
//    $obj->m2();
//}


function doM2(MyOOTest $obj)
{           //多型
    //
    if ($obj instanceof sub1) {
        echo 'i am sub1<br>';
    } else if ($obj instanceof sub2) {
        echo 'i am sub2<br>';
    } else if ($obj instanceof MyOOTest) {
        echo 'i am MyOOTest<br>';
    }
}

?>