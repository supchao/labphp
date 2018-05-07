<?php               //MYSQL 修改實作
include_once 'sql.php';
include_once 'product.php';

if(isset($_REQUEST['editid'])){
    //撈出指定資
    $editid = $_REQUEST['editid'];
    $sql = "select * from product where id={$editid}";
    $result = $mysqli->query($sql);
    $product = $result ->fetch_object('product');
}else if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
    $pname = $_REQUEST['pname'];
    $price = $_REQUEST['price'];
    $qty = $_REQUEST['qty'];

    $sql ="update product set pname='{$pname}',price={$price},qty={$qty} where id={$id}";
    $mysqli->query($sql);
    header('Location:bmain.php');
}
else{
    header('Location:bmain.php');
}

?>
Edit product:
<hr>
<form>
    <input type="hidden" name="id" value="<?php echo $product->id?>">
    pname:<input name="pname" value="<?php echo $product->pname?>"/><br>
    price:<input type="number" value="<?php echo $product->price?>" name="price"/><br>
    qty:<input type="number" value="<?php echo $product->qty?>" name="qty"/><br>
    <input type="submit"   value="add" />
</form>
