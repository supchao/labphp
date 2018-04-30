<?php
// 傳值


$var1 = 100;

function test($var1)        //傳值
{
    $var1 += 10;
    return $var1;
}

function test2(&$var2)       // 傳位址
{
    $var2 += 10;
}

$var3 = 100;
echo $var3 . "<br>";

$var1 = test($var1);
test2($var3);
echo $var1 . "<br>";
echo $var3;

?>