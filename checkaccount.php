<?php
include_once 'sql.php';
include_once 'member.php';

    $account = $_REQUEST['account'];
    $passwd = $_REQUEST['passwd'];

//    $sql = "select *from member where account='{$account}' and passwd='{$newpaddwd}'";
    $sql = "select *from member where account='{$account}'";  //
    $result  = $mysqli->query($sql);

    if($result ->num_rows >0){
       $member = $result->fetch_object("member"); //$result 轉換 object
//       if($member instanceof Member){
//           echo 'ok';
//        }else{
//           echo 'xx';
//        }

        //echo $member->id;
        if(password_verify($passwd,$member->passwd)){
            header('Location: main.php');
        }
        else{
            header('Location: login.php');
        }
    }else{
        header('Location: login.php');
        }
?>