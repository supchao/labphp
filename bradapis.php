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
    $ret = false;
    if(preg_match('/^[A-Z][12][0-9]{8}$/',$twid)){
        $letters ='ABCDEFGHJKLMNPQRSTUVXYWZIO';
        $c1 = substr($twid , 0,1);
        $n12=strpos($letters,$c1) +10;
        $n1 = (int)($n12 /10);
        $n2 = $n12 % 10;
        $n3 = substr($twid,1,1);
        $n4 = substr($twid,2,1);
        $n5 = substr($twid,3,1);
        $n6 = substr($twid,4,1);
        $n7 = substr($twid,5,1);
        $n8 = substr($twid,6,1);
        $n9 = substr($twid,7,1);
        $n10 = substr($twid,8,1);
        $n11 = substr($twid,9,1);

        $sum = 1*$n1 + 9*$n2 + 8*$n3 + 7*$n4 +6*$n5 +5*$n6+4*$n7+3*$n8+2*$n9+1*$n10+1*$n11;
        $ret = ($sum%10)==0;
    }
    return $ret;
}
?>