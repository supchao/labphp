I am brad62<hr>
<?php
    include_once 'MyOOTest.php';
    session_start();

    $s1 = new Student(90,87,94);
    $_SESSION['s1'] = $s1;

    echo $s1->calSum() . ":" . $s1->calAvg();


    $s1->ch = 100;
    $s1->eng = 97;



    ?>
<hr />
<a href="brad63.php">Brad63</a>
