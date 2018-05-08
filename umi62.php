iam umi62<hr>
<?php
include_once 'myootest.php';
    session_start();

    $s1 = new student(90,87,94);
    echo $s1->calsum() .":".$s1->calavg();

    $_SESSION['s1'] = $s1;
    $s1->eng = 47;
    $s1->ch = 100;

    ?>
<hr>
<a href="umi63.php">umi63</a>
