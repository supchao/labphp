//撲克牌判斷重複運算


<?php
$poker = array();

for ($i = 0; $i <= 10; $i++) {
    do{
    $rand = rand(0, 10);

    // 檢察機制
    // 交換
    $isrepeat = false;

        for ($j = 0; $j < $i; $j++) {
            if ($poker[$j] == $rand) {
                $isrepeat = true;
                   break;
            }
        }

        $poker[$i] = $rand;

    }while($isrepeat);


//    for ($j = 0; $j < $i; $j++) {
//        if ($poker[$j] == $rand) {
//            //重複了
//            $isrepeat = true;
//            break;
//        }
//    }
//    if (!$isrepeat) {
//        $poker[$i] = $rand;
//    } else {
//        $i--;
//    }
}
echo "<br>";
foreach ($poker as $k => $v) {
    echo $v . '<br>';
}
?>