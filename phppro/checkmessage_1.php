<?php
include_once 'sql.php';
include_once 'member.php';
include_once 'mesg.php';

date_default_timezone_set('Asia/Taipei');
    $message=array();


            $sql = "select message.mesg as mesg,message.interdate as interdate,member.name as name,member.id as id from message,member where message.whoid = member.id order by message.interdate";
            $result = $mysqli->query($sql);
            if ($result->num_rows > 0) {
                while ($dato = $result->fetch_assoc()) {
                    $message[] = $dato;
                }
                $message = json_encode($message);
            } else {
                $message = false;


    }


echo $message;
