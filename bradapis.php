<?php
function creatanswer($w)
{
    $ran = range(0, 9);
    shuffle($ran);
    $ret='';
    for($i =0;$i<$w;$i++){
        $ret .=$ran[$i];
    }
    return $ret;
}

function checkab($a,$g){
    $aary = str_split($a);
    $gary = str_split($g);
    for($i=0 ;$i <4;$i++)
    {for($j = 0;$j<4;$j++)
        if($aary[$i] == $gary[$j] ){

        }
    }
    return '1A2B';
}
?>