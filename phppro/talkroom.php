<?php
$error='';
if(isset($_REQUEST['error'])){
    if($_REQUEST['error']= 1){
        $error = "  已經登入囉 你是誰!";
    }

}
?>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jquery.toast.css" rel="stylesheet" >
</head>
<body style="text-align: center">
<h1>Welcome to Chatroom</h1>

<hr>
<form action="logincheck.php" method="get">
Account : <input  name="account" class="input-lg"/><br/>
Password: <input type="password" class="input-lg" name="passwd" /><br/><br/>
<input class="btn btn-warning" type="submit" value="Login" />
<button class="btn btn-success" type="button" onclick="location.href='register.php'">Register</button><br><span style="color:red;" name="error"><?php echo $error;?></span>
</form>

<div>

</div>
</body>