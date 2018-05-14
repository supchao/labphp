<?php
session_start();
unset($_SESSION['message']);
header('Location:talkroom.php');
?>