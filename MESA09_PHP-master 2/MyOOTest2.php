<?php
// 定義規格: 介面
interface Shape {
    function calLength();
    function calArea();
}

interface iOS {
    function exam1();
}

interface ZCE {
    function exam2();
}

class Rectangle implements Shape {
    function calLength(){
        echo 'Rectangle:calLength()';
    }
    function calArea(){
        echo 'Rectangle:calArea()';
    }
}
class Triangle implements Shape {
    function calLength(){
        echo 'Triangle:calLength()';

    }
    function calArea(){
        echo 'Triangle:calArea()';
    }
}

class Student1 implements iOS, ZCE {
    function exam1(){
    }
    function exam2(){
    }
}
class Student2 implements iOS {
    function exam1(){
    }
}
class Student3 implements ZCE {
    function exam2(){
    }
}
abstract class Student4 implements iOS{

}

trait Test1 {
    function m1(){
        echo 'Test1:m1();';
    }
}
trait Test2 {
    function m2(){
        echo 'Test2:m2()';
    }
    function m3(){
        echo 'Test2:m3()';
    }
}

class Test3 {
    use Test1;
    use Test2;
}




