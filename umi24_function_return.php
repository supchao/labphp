
<?php
    // 傳值


$var1 = 100;

    function test($var1){
        $var1 += 10;
        return $var1;
    }
$var1 = test($var1);
    echo $var1;
?>