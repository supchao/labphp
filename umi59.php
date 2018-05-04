<?php
    $mysqli = new mysqli('127.0.0.1','root','root','iii');

//    mysqli_set_charset ( $mysqli , "utf8" );
    $mysqli->set_charset ( "utf8" );

    $sql = 'insert into cust (cname,tel,birthday) values("test1","777","2000-02-09")';
    $sql1 = 'delete from cust where id= 119 ';
    $sql2 = 'update cust set cname="llk",tel="123"  where id= 121';
    $sql3 = 'select * from cust';


    if($result = $mysqli->query($sql3)){
        // $result -> mysqli_result class 物件實體
            while ( $data = $result->fetch_assoc()){
                    foreach ($data as $k => $v) {
                        echo "{$k}:{$v}<br>";}
                echo "<hr>";
                }
    }else{
    }
//    $mysqli->query($sql2);
    ?>