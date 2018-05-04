<?php
include_once 'myootest3.php';
include_once 'myootest4.php';

//$obj1 = new \tw\brad\utils\test1();
//$obj1 ->m1();
//
//$obj2 = new \tw\brad\tools\test1();
//$obj2 ->m1();

use tw\brad\utils\test1; // class

use tw\brad\tools\test1 as test2; // class
use function tw\brad\utils\sayya;
$obj3 = new test1();
$obj3 ->m1();
echo '<hr>';
$obj4 = new test2();
$obj4 ->m1();
echo '<hr>';
sayyo();