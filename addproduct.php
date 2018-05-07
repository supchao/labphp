<?php               // MYSQL新增
    include_once 'sql.php';
    if(isset($_REQUEST['pname'])){
        $pname = $_REQUEST['pname'];
        $price = $_REQUEST['price'];
        $qty = $_REQUEST['qty'];

        $sql = "insert into product (`pname`,`price`,`qty`)values('{$pname}',$price,$qty)";
        $mysqli ->query($sql);
        header('Location:bmain.php');
    }
?>

<form>
    pname:<input name="pname"/><br>
    price:<input type="number" name="price"/><br>
    qty:<input type="number" name="qty"/><br>
    <input type="submit" value="add" />
</form>
