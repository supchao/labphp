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
//        $counta =0;
//        $countb =0;
//        $aary = str_split($a);
//        $gary = str_split($g);
//        for($i=0 ;$i <strlen($a);$i++)
//        {for($j = 0;$j<strlen($a);$j++)
//            if($aary[$i] == $gary[$j] && $i==$j){
//                $counta++;
//            }
//            else if($aary[$i] == $gary[$j] && $i!==$j) {
//                $countb++;
//            }
//        }
//        return "{$counta}A{$countb}B";
        $A = $B =0;
        for($i = 0;$i<strlen($a);$i++){
            if(substr($a,$i,1) == substr($g,$i,1)){
                $A++;
            }
            else if(strpos($a,substr($g,$i,1)) !== false){
                $B++;
            }
        }
        return "{$A}A{$B}B";

}

function checkTWid($twid){



    
}
?>