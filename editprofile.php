<?php
include_once 'sql.php';
include_once 'member.php';
session_start();
if(!isset($_SESSION['mem'])){
header('Location:login.php');
}
$member = $_SESSION['mem'];
if(isset($_FILES['icon']) && $_FILES['icon']['error']==0){
    $icon = addslashes(file_get_contents($_FILES['icon']['tmp_name']));
$sql = "update member set icon ='{$icon}' where id={$member->id}";
$mysqli->query($sql);

$sql = "select *from member where id={$member->id}";
$result = $mysqli->query($sql);
$member = $result->fetch_object("member");
$_SESSION['mem'] = $member;

header('Location:main.php');
}

?>
<form method="post" enctype="multipart/form-data">
<input type="file" name="icon"/><br/>
    <input type="submit" value="ok"/>
</form>
