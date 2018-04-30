<?php
//  撲克牌四人發牌整牌
$l=51;

$pokers = array();

$poker = range(0,$l);

for($j=$l;$j>=0;$j--){
    $r=rand(0,$j);
    $tmp = $poker[$r];
    $poker[$r] =$poker[$j];
    $poker[$j] = $tmp;
}

$player =array(array(),array(),array(),array());
foreach($poker as $v){
    $player[$v%4][(int)($v/4)] = $v;

}


?>
<table border="1" width="100%">
    <?php
    $icon =["&spades;","&hearts;","&diams;","&clubs;"];
    $item =['A',2,3,4,5,6,7,8,9,10,'J','Q','K'];
    foreach($player as $inx){
        sort($inx);
    echo "<tr>";
    foreach($inx as $e){

        echo "<td>";
    echo $icon[(int)($e/13)].$item[$e%13];
        echo "</td>";
    }

    echo "</tr>";
    }
?>
</table>
