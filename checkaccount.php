<?php
include_once 'sql.php';
include_once 'member.php';
include_once 'cart.php';
session_start();
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
//            $cart = new cart();                   購物車方法2
//            $member->setCart($cart);

            $_SESSION['mem'] = $member;
            $_SESSION['cart'] = new cart();     //  購物車方法1
             header('Location: main.php');
        }
        else{
            header('Location: login.php');
        }
    }else{
        header('Location: login.php');
        }
?>