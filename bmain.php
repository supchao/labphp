<?php                       // MYSQL 查詢 and 刪除 實作
    include_once 'sql.php';
    include_once 'product.php';

    if(isset($_REQUEST['delid'])){
        //delete
        $delid = $_REQUEST['delid'];
        $sql = "delete from product where id={$delid}";
        $mysqli->query($sql);
    }
    $sql = 'select * from product';
    $result = $mysqli->query($sql);
?>

<a href="addproduct.php">add new</a>

<hr>

<table border="1" width="100%">
    <tr>
        <th>id</th>
        <th>pname</th>
        <th>price</th>
        <th>gty</th>
        <th>delete</th>
        <th>update</th>
    </tr>
    <script>
        function confirmdelete(pname){
            return confirm('deledt '+pname+'?');
        }
    </script>

    <?php
    while($product = $result->fetch_object('product')){
        echo '<tr>';
        echo "<td>{$product->id}</td>";
        echo "<td>{$product->pname}</td>";
        echo "<td>{$product->price}</td>";
        echo "<td>{$product->qty}</td>";
        echo "<td><a href='?delid={$product->id}' onclick='return confirmdelete(\"{$product->pname}\");'>Delete</a></td>";
        echo "<td><a href='editproduct.php?editid={$product->id}'>Edit</a></td>";
        // echo "<td><a href='?delid={$product->id}'>delete</a></td>";
        echo '</tr>';
    }
    ?>

</table>