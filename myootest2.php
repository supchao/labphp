<?php
// 定義規格:介面
interface shape{
    function callength();
    function calarea();
}

interface ios{
    function exam1();
}

interface zce{
    function exam2();
}



class rectangle implements shape{
    function callength(){
        echo 'Rectangle:callength()';
    }
    function calarea(){
        echo 'Rectangle:calarea()';
    }
}
class triangle implements shape{
    function callength(){
        echo 'triangle:callength()';
    }
    function calarea(){
        echo 'triangle:calarea()';
    }
}
class student1 implements ios,zce{
    function exam1(){
        // TODO: Implement exam1() method.
    }
    function exam2(){
        // TODO: Implement exam2() method.
    }
}
class student2 implements ios{
    function exam1(){
        // TODO: Implement exam1() method.
    }
}
class student3 implements zce{
    function exam2(){
        // TODO: Implement exam1() method.
    }
}
abstract class student4 implements ios{
}





trait test1{
    function m1(){
        echo 'test:m1()';
    }
}
trait test2{
    function m2(){
        echo 'test:m2[]';
    }
    function m3(){
        echo 'test:m3{}';
    }
}
class test3{
    use test1;
    use test2;
}