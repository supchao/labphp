<?php
    $mysqli = new mysqli('127.0.0.1',
        'root','root', 'iii');
    mysqli_set_charset ( $mysqli , "utf8" );
    //$mysqli->set_charset("utf8");

    $sql1 = 'insert into cust (cname,tel,birthday) ' .
        'values ("test1","123","2000-02-09")';
    $sql2 = 'delete from cust where id = 106';
    $sql3 = 'update cust set cname="brad", tel="123" where id=108';

    $sql4 = 'select * from cust';

    if ($result = $mysqli->query($sql4)){
        // $result -> mysqli_result class 物件實體
        while ($data = $result->fetch_assoc()){
            foreach ($data as $k => $v){
                echo "{$k} : {$v}<br>";
            }
            echo '<hr>';
        }


    }else{
        echo 'XX';
    }

