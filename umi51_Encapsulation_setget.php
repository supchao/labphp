<?php
    include_once 'umi47_OO.php';
    $m1 = new Member('222');
    $m1->id='123';$m1->name='brad';
    echo $m1->id . ':' . $m1->name;
?>