<?php
    include_once 'sql.php';
    include_once 'member.php';

    class message{
    }
    //account = xxx
    //passwd = xxx
    //return =  {'status='='0','id':12,'name':'brad'};
    //{'status'='1','message':'account not exist'}; error
    //{'status'= '2','message'='passwd error'};
    //{'status'='3','message'='data type error'};
    $mesg = new message();
    if(isset($_REQUEST['account']) && isset($_REQUEST['passwd'])){
        $account = $_REQUEST['account'];
        $passwd = $_REQUEST['passwd'];
        $sql = "select *from member where account=?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s",$account);
        $stmt->execute();

        $result = $stmt->get_result();
//  $result = mysqli->query($sql);
        if($result ->num_rows >0){
            $member = $result->fetch_object("member"); //$result 轉換 object

            if(password_verify($passwd,$member->passwd)) {
                $mesg->status = '0';
                $mesg->mseeage='ok';
            }else{
                $mesg->status = '2';
                $mesg->message=p='asswd error';
            }
        }else{
            $mesg->status = '1';
        }
    }else{
        $mesg->status = '3';
        $mesg->message = 'data error';
    }

    echo json_encode($mesg);
?>