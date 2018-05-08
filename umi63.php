i am umi63<hr>
<?php
include_once 'myootest.php';
session_start();

if(!isset($_SESSION['s1'])){header('Location:umi62.php');}


$s1 = $_SESSION['s1'];

echo $s1->calsum() .":".$s1->calavg();


?>
<a href="umi64.php">umi64</a>
