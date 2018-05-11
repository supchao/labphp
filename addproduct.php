<?php               // MYSQL新增
    include_once 'sql.php';
    if(isset($_REQUEST['pname'])){
        $pname = $_REQUEST['pname'];
        $price = $_REQUEST['price'];
        $qty = $_REQUEST['qty'];


        $sql = "insert into product (`pname`,`price`,`qty`)values('{$pname}',$price,$qty)";
        $mysqli ->query($sql);
        $newid = $mysqli->insert_id;

        //處理影像資料
        if(isset($_FILES['pimg'])){
            $pimg = $_FILES['pimg'];
            $x=1;
            foreach($pimg['error'] as $i =>$errno){
                if($errno ==0){
                    copy($pimg['tmp_name'][$i],"test3/p_{$newid}_{$x}.jpg");
                    $x++;
                }
            }
        }


        header('Location:bmain.php');
    }
?>

<form method="post" enctype="multipart/form-data">
    pname:<input name="pname"/><br>
    price:<input type="number" name="price"/><br>
    qty:<input type="number" name="qty"/><br>

    <input type="file" name="pimg[]" /><br/>
    <input type="file" name="pimg[]" /><br/>
    <input type="file" name="pimg[]" /><br/>
    <input type="file" name="pimg[]" /><br/>
    <input type="submit" value="add" />
</form>
