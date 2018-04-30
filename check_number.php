<?php
    include_once("bradapis.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $isRight = checkTWid($id);
        if($isRight){
            echo 'OK';
        }
    }
?>
<form>
    <input type="text" name="id"/>
    <input type="submit" value="check"/>
</form>
