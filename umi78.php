<?php

    class brad01{
        var $name,$age,$weight;
        function __construct($name,$age,$weight){
        $this->name = $name;
        $this->age = $age;
        $this->weight = $weight;
        }
    }
    //JSON => [] , {};
    //     => ['name'->'brad]  XXXXXXXX
    $a=Array(1,2,3,4,5);
    $json1 = json_encode($a);
    echo $json1;
    echo "<hr>";

    $root= json_decode($json1);
    var_dump($root);
    echo "<hr>";
    echo "<hr>";

    $obj1 = new brad01('布萊德',18,70);
    $obj2 = new brad01('艾瑞克',30,80);
    $obj3 = new brad01('安迪',40,50);
    $obj4 = new brad01('湯尼',50,75);

    $json2 =json_encode($obj1);
    echo $json2;
    echo "<br>";
    echo gettype($json2);
    echo "<hr>";

    $root = json_decode($json2);
    echo gettype($root);
    echo "<hr>";

foreach($root as $k=>$v){
        echo "{$k}:{$v}<br>";
    }
    echo "<hr>";

    $b = array($obj1,$obj2,$obj3,$obj4);

    $json3 = json_encode($b);
    echo $json3;
    echo "<hr>";

    $root = json_decode($json3);
    foreach($root as $v){
        foreach($v as $kk=>$vv){
            echo "{$kk}:{$vv}<br>";
        }
        echo "<hr>";
    }
    echo "<hr>";



?>