//撲克牌判斷重複運算







<?php
$poker = array();

for ($i = 0; $i < 51; $i++) {
    $rand = rand(0, 51);

    // 檢察機制
    // 交換
    $isrepeat = false;
    for ($j = 0; $j < $i; $j++) {
        if ($poker[$j] == $rand) {
            //重複了
            $isrepeat = true;
            break;
        }
    }
    if (!$isrepeat) {
        $poker[$i] = $rand;
    } else {
        $i--;
    }
}
foreach ($poker as $k => $v) {
    echo $v . '<br>';
}
?>