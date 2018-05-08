<?php

class member{
    private $id;
    private $name;
    private $account;
    private $passwd;
    private $catr;

    function __get($name){
        return $this->$name;    //$name ==__get($name)
    }
    function __set($name,$value){
        $this->$name = $value;
    }
//    function setCart($cart){
//        //
//        $this->cart = $cart;
//    }
}