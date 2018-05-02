<?php
$a ='';
$tmp='';
$j ='';
$l=15;
$transbefore = array();
for($i =0;$i<$l;$i++){
    $transbefore[$i] = $i+1;
}
for($j=$l-1;$j>=0;$j--){
    $r=rand(0,$j);
    $tmp = $transbefore[$r];
    $transbefore[$r] =$transbefore[$j];
    $transbefore[$j] = $tmp;
//    echo $transbefore[$j];

//    $transbefore = array_pop($transbefore);
//    echo count($transbefore);
}
foreach($transbefore as$k=> $v){
    echo "洗牌過後 撲克牌[{$k}] :  {$v} <br>";
}
?>