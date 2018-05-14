<?php
/**
 * Created by PhpStorm.
 * User: GC
 * Date: 2018/5/12
 * Time: 上午 11:53
 */

class message
{
    private $mes;

    public function __construct()
    {
        $this->mes = array();
    }

    public function putin($pin,$tak)
    {
        $this->mes["{$tak}"] =$pin;
    }
    function getpin($tak){
        if(isset($this->mes["{$tak}"])){
            return $this->mes["{$tak}"];
        }
    }
}