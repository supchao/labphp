<?php

class MyOOTest                      //多型
{
    function m1()
    {
        echo 'myootest:m1()<br>';
    }
}

class sub1 extends MyOOTest
{
    var $x;
    function m1()
    {
        echo 'sub1:m1()<br>';
    }

    function m2(){
        echo 'sub1:m2()<br>';
    }
}
class sub2 extends MyOOTest
{
    function m1()
    {
        echo 'sub2:m1()<br>';
    }

    function m2()
    {
        echo 'sub2:m2()<br>';
    }
}

abstract class test1 {
    function m1(){echo 'test:m1()<br>';}
    abstract function m2();
}
class test11 extends test1{
    function m2(){
        echo 'test11:m2()<br>';
    }
}
class test12 extends test1{
    function m2(){
        echo 'test12:m2()<br>';
    }
}
?>