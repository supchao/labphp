
<?php
    include_once 'sql.php';

    if(isset($_REQUEST['account'])){
        $account = $_REQUEST['account'];
        $passwwd = $_REQUEST['passwd'];
        $name = $_REQUEST['name'];
        $newpaddwd = password_hash($passwwd, PASSWORD_DEFAULT);

        $sql = "insert into `member`(`account`,`passwd`,`name`)" .
            "values('{$account}','{$newpaddwd}','{$name}')";

        if($mysqli->query($sql)){
           header('Location: talkroom.php');
        }else{
            echo 'insert error';
        }

    }
?>
<form>
    account : <input name="account" /><br>
    passwd : <input type="password" name="passwd"/><br>
    real name : <input name="name"/><br>
    <input type="submit" value="new"/>
</form>