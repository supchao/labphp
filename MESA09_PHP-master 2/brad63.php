I am brad63<hr>
<?php
    include_once 'MyOOTest.php';
    session_start();

    if (!isset($_SESSION['s1'])) header('Location: brad62.php');

    $s1 = $_SESSION['s1'];
    echo $s1->calSum() . ":" . $s1->calAvg();
    ?>
<a href="brad64.php">Brad64</a>
