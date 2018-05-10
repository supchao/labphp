<?php
include_once 'sql.php';
include_once 'product.php';

session_start();
if(isset($_REQUEST['editid'])){
    $editid = $_REQUEST['editid'];
    $sql = "select * from product where id={$editid}";
    if($result = $mysqli->query($sql))
    {$data = $result->fetch_object('product');}
    $_SESSION['product'] = $data;
}else if(isset($_SESSION['product'])){
    $data = $_SESSION['product'];
    $pid = $data->id;
    $pname = $_REQUEST['pname'];
    $price = $_REQUEST['price'];
    $qty = $_REQUEST['qty'];
    $sql = "update product set pname='{$pname}',price={$price},qty={$qty} where id ={$pid}";
    $mysqli->query($sql);
    unset($_SESSION['product']);
    header('Location:bmain.php');
}else{
    header('Location:bmain.php');
}

?>
<h3>Edit pro</h3>
<hr>
<form>
pname: <input type="text" name="pname" value="<?php echo $data->pname;?>"/><br/>
price: <input type="text" name="price" value="<?php echo $data->price;?>"/><br/>
qty: <input type="text" name="qty" value="<?php echo $data->qty;?>"/><br/>
<input type="submit" value="edit"/>
</form>


