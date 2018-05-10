<?php
    //
    for ($i=0; $i<52; $i++){

        do{
            $rand = rand(0,51);

            // 檢查機制
            $isRepeat = false;
            for ($j=0; $j<$i; $j++){
                if ($poker[$j] == $rand){
                    // 重複了
                    $isRepeat = true;
                    break;
                }
            }
        }while ($isRepeat);

        $poker[$i] = $rand;

    }

    foreach ($poker as $v){
        echo "{$v}<br>";
    }

