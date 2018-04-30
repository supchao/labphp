<?php
// php.net document>
function test1($x,$y): string{  // php7 以上
    return $x/$y;
}
$r =test1(10,3);
var_dump($r);
?>
