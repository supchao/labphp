<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    include_once 'sql.php';

    if (isset($_REQUEST['pname'])){
        $pname = $_REQUEST['pname'];
        $price = $_REQUEST['price'];
        $qty = $_REQUEST['qty'];

        $sql = "insert into product (`pname`,`price`,`qty`)" .
                " values ('{$pname}',$price,$qty)";
        $mysqli->query($sql);
        header('Location: bmain.php');

    }

?>

<form>
    PName: <input name="pname" /><br/>
    Price: <input type="number" name="price" /><br/>
    Qty.: <input type="number" name="qty" /><br/>
    <input type="submit" value="Add" />
</form>

