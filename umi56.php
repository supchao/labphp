<?php

class bird
{
    public $leg;

    public function setLeg($leg)
    {
        if ($leg >= 0 && $leg <= 2) {
            $this->leg = $leg;
        } else {
           $e = new Exception ('error leg'); //    throw new Exception();
             throw $e;
        }
    }
}
$a = $_GET['a'];
try {
    $bird = new bird();
    $bird->setLeg($a);
    echo $bird->leg;
} catch (Exception $e) {
    $bird->setLeg(2);
    echo $e ->getMessage();
}
?>

