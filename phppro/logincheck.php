<?php
include_once 'sql.php';
include_once 'member.php';
session_start();
$account = $_REQUEST['account'];
$passwd = $_REQUEST['passwd'];

$sql = "select *from member where account=?";  //

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $account);
$stmt->execute();

$result = $stmt->get_result();


if($result ->num_rows >0){
    $member = $result->fetch_object("member"); //$result 轉換 object
    $_SESSION['member'] = $member;
    if(password_verify($passwd,$member->passwd)){
        if($member->state != 1)
        {$id = $member->id;
//            $_SESSION[$member->id] = $member;
        $sql = "update member set state=1 where id= {$member->id}";
        $mysqli->query($sql);
        header("Location: chatroom.php");
        }
        else{
            header('Location: talkroom.php?error=1');
        }
    }
    else{
        header('Location: talkroom.php');
    }
}else{
    header('Location: talkroom.php');
}
?>