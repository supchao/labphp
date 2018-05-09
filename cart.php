<?php
class cart{
    private $list; //array();
    function __construct(){
        $this->list= array();
    }
    function getlist(){
        return $this->list;
    }
    function addproduct($pid,$num){
        $this->list["{$pid}"] = $num;
    }
    function rmproduct($pid){
        unset($this->list["{$pid}"]);
    }
    function getitemnum($pid){
        if(isset($this->list["{$pid}"])){
            return $this->list["{$pid}"];
        }else{
            return 0;
        }
    }
}