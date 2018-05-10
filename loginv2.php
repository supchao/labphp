<?php
    include_once 'sql.php';
    if(isset($_REQUEST['account'])){
        $account = $_REQUEST['account'];
        $passwd = $_REQUEST['passwd'];
        $sql = "select * from member where account=? and passwd=?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ss",$account,$passwd);
        $stmt->execute();

        $result = $stmt->get_result();
        if($result->num_rows >0){
            echo "ok";
        }else{
            echo 'xx';
        }

    }
?>
<h1>brad b company</h1>
<hr>
<form  method="get">
    account : <input name="account" /><br>
    passwd : <input type="password" name="passwd"/><br>
    <input type="submit" value="login"/>
    <button type="button" onclick="location.href='register.php'">Register</button>
</form>