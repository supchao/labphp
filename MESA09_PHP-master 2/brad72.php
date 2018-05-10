<?php
    $cont = file_get_contents("https://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeJ&category=6");

    //var_dump($cont);

//    $obj1 = new MyTest2(1,2,3);
//    foreach ($obj1 as $k => $v){
//        echo "{$k} : {$v}<br>";
//    }

    $root = json_decode($cont);
    foreach ($root as $k => $v){    // 尋訪每個元素=>一筆資料=>Object
        // 尋訪每個物件的屬性
        foreach ($v as $kk => $vv){
            echo "{$kk}:";
            if (is_array($vv)){
                foreach ($vv as $kkk => $vvv){
                    // $kkk => 0, 1, 2, 3
                    if (is_array($vvv) || is_object($vvv)){
                        foreach ($vvv as $kkkk => $vvvv){
                            // $kkkk
                            echo "<li>{$kkkk} : {$vvvv}</li>";
                        }
                    }else{
                        echo $vvv;
                    }
                }
            }else{
                echo "{$vv}";
            }
            echo "<br>";
        }
        echo '<hr>';
    }


    class MyTest2 {
        var $x, $y, $z;
        function __construct($x,$y,$z){
            $this->x = $x;
            $this->y = $y;
            $this->z = $z;
        }
    }
