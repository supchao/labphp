<?php
include_once 'sql.php';
if(isset($_REQUEST['pname'])) {
    $pname = $_REQUEST['pname'];
    $price = $_REQUEST['price'];
    $qty = $_REQUEST['qty'];
    $sql = "insert into  product (`pname`,`price`,`qty`)values('{$pname}',{$price},{$qty})";
    if ($mysqli->query($sql)) {
        echo 'ok';
    }
}

?>


<form method="get" action="bmain.php">
    <input name="pname"/><br>
    <input name="price" type="number"/><br>
    <input name="qty" type="number"/><br>
    <input type="submit" value="add"/>
</form>
