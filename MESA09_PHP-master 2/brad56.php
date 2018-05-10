<?php
include_once 'MyOOTest2.php';

class Bird {
    var $leg;

    public function setLeg($leg){
        if ($leg>=0 && $leg<=2){
            $this->leg = $leg;
        }else{
            $e = new Exception('error leg');
            throw $e;
        }
    }
}

$bird = new Bird();
try{
    $bird->setLeg(3);
    echo $bird->leg;
}catch (Exception $e){
    echo $e->getMessage();
    $bird->setLeg(2);
}
echo 'OK';
