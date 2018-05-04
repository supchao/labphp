<?php
    include_once 'myootest2.php';

    $obj1 = new rectangle();
    $obj2 = new triangle();

    $obj1->calarea();

    calshapearea($obj1);
    echo '<hr>';
    calshapearea($obj2);

    $s1 = new student1();
    $s2 = new student2();
    $s3 = new student3();

    if($s1 instanceof ios){
        echo 'ok';
    }else{
        echo 'xx';
    }
    function calshapearea(shape $shape){
        $shape->calarea();
    }
?>