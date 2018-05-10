<?php
    include_once 'sql.php';

    $sql = "insert into product(pname,price,qty)values (?,?,?)";
//    $mysqli->query($sql);
    $stmt = $mysqli->prepare($sql);
    $var1 ='test3';
    $var2 =555;
    $var3 =22;
    // s:string; i:integer; d:double; b:blob; 日期算string
    $stmt->bind_param("sss",$var1,$var2,$var3);
    $stmt->execute();
?>


