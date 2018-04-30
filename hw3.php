<?php
$a ='';
$tmp='';
$j ='';
$l=50;
$transbefore = array();
for($i =0;$i<$l;$i++){
    $transbefore[$i] = $i+1;
}
for($j=$l-1;$j>=0;$j--){
    $r=rand(0,$j);
    $tmp = $transbefore[$r];
    $transbefore[$r] =$transbefore[$j];
    $transbefore[$j] = $tmp;
}
foreach($transbefore as$k=> $v){
    echo "random過後 aray[{$k}] :  {$v} <br>";
}
?>