<?php
include_once 'sql.php';
include_once 'member.php';

session_start();
$account = $_REQUEST['account'];
$passwd = $_REQUEST['passwd'];

//    $sql = "select *from member where account='{$account}' and passwd='{$newpaddwd}'";
$sql = "select *from member where account=?";  //
//$result  = $mysqli->query($sql);

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $account);
$stmt->execute();

$result = $stmt->get_result();
//$result = $stmt->fetchAll();


if($result ->num_rows >0){
    $member = $result->fetch_object("member"); //$result 轉換 object

//       if($member instanceof Member){
//           echo 'ok';
//        }else{
//           echo 'xx';
//        }

    //echo $member->id;
    if(password_verify($passwd,$member->passwd)){
        $_SESSION['member'] = $member;
        header('Location: chatroom.php');
    }
    else{
        header('Location: talkroom.php');
    }
}else{
    header('Location: talkroom.php');
}
?>