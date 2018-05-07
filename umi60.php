<?php
$password=123456;
$newpaddwd = password_hash($password, PASSWORD_DEFAULT);
echo $password ."<br>" . $newpaddwd."<br>";

if(password_verify($password,$newpaddwd)){
    echo 'ok';
}
?>