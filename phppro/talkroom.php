<?php
$error='';
if(isset($_REQUEST['error'])){
    if($_REQUEST['error']= 1){
        $error = "repeat login!";
    }

}
?>
<h1>Welcome to Chatroom</h1>

<hr>
<form action="logincheck.php" method="get">
Account : <input  name="account" /><br/>
Password: <input type="password" name="passwd" /><br/>
<input type="submit" value="Login" />
<button type="button" onclick="location.href='register.php'">Register</button><span style="color:red;" name="error"><?php echo $error;?></span>
</form>

<div>

</div>