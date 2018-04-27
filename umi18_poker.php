//  撲克牌四人發牌整牌







<?php
$poker= range(0,51);

shuffle($poker);



//foreach ($poker as $k=>$v){
//    echo"{$k}:{$v}<br>";
//}
echo '<hr>';
$player = array(array(),array(),array(),array());
foreach ($poker as $k => $v)
{
    $player[$k%4][(int)($k/4)] =$v;
}

?>
<table border="1" width="100%">
        <?php
        $suits = array('&spades;','&hearts;','&diams;','&clubs;');
        $v = array('A',2,3,4,5,6,7,8,9,10,'J','Q','K');
        foreach($player as $playerin)
        {sort($playerin);
            echo"<tr>";
        foreach($playerin as $p){
                echo"<td>{$suits[(int)($p/13)]}{$v[$p%13]}</td>";
        }
            echo"</tr>";}
        ?>
</table>
