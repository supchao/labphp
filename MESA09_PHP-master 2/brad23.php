<?php
    sayYa(); sayYa();sayYa();
    sayHello('Brad');
    //sayHello();

    sayHelloV2('Brad');
    sayHelloV2();

    sayHelloV3(3);
    sayHelloV3(3, 'Brad');

    sayHelloV4();
    sayHelloV4(123);
    sayHelloV4('Brad');
    sayHelloV4(123, 'Brad', true);

    function sayYa(){
        echo 'Ya<br>';
    }

    function sayHello($name){
        echo "Hello, {$name}<br>";
    }

    function sayHelloV2($name = 'World'){
        echo "Hello, {$name}<br>";
    }

    function sayHelloV3($n, $name = 'World'){
        for ($i=0; $i<$n; $i++){
            echo "Hello, {$name}<br>";
        }
    }

    function sayHelloV4(){
        $ps = func_get_args();  // 捕抓所有傳遞進來的參數 => array
        foreach ($ps as $k => $v){
            echo "{$k} : {$v}<br>";
        }

    }



