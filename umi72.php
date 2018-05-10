<?php
    $cont = file_get_contents("https://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeJ&category=6");

//    var_dump($cont);
//    $obj1 = new mytest2(1,2,3);
//    foreach($obj1 as $k =>$v){
//        echo "{$k}: {$v}<br>";
//    }
    $root = json_decode($cont);
//        var_dump($root);
    foreach($root as $k=>$v){ // 尋訪每一個元素 => 一筆資料 =>object

        // 尋訪每一個物件的屬性
        foreach($v as $kk=>$vv){
            echo "{$kk}:";
            if(is_array($vv)){
                foreach($vv as $kkk => $vvv){
                    // $kkk == 0, 1 ,2 ,3
                    if(is_array($vvv)|| is_object($vvv)) {
                        foreach ($vvv as $kkkk => $vvvv) {
                            // $kkkk = time,location
                            echo "<li>{$kkkk}:{$vvvv}</li>";
                        }
                    }else{echo "{$vvv}";}

                }
            }else{
                echo "{$vv}";
            }
            echo '<br>';

        }
        echo '<hr>';
//        foreach($v as $filed => $value){
//            if($filed == 'showInfo'){
//                //array
//
//            }else {
//                echo "{$filed} => {$value}<br>";
//            }
//        }
//        $title = $v->title;
//        $showUnit=$v->showUnit;
//        echo "{$title}:{$showUnit}<br>";
    }

    class mytest2{
        var $x,$y,$z;
        function __construct($x,$y,$z)
        {
            $this->x = $x;
            $this->y = $y;
            $this->z = $z;

        }
    }
    ?>

