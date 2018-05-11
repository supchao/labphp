<?php                       // MYSQL 查詢 and 刪除 實作
    include_once 'sql.php';
    include_once 'product.php';
    include_once 'myconfig.php';

    if(isset($_REQUEST['delid'])){
        //delete
        $delid = $_REQUEST['delid'];
        $sql = "delete from product where id={$delid}";
        $mysqli->query($sql);
    }

    $sql ='select count(*) as `sum` from product';
    $result = $mysqli->query($sql);
    $data = $result->fetch_assoc();
    $sum = $data['sum'];
    $page =1;



    if(isset($_REQUEST['page'])){
        $page = $_REQUEST['page'];
    }
    $totalpage = ceil($sum / RPP);
    $prev = $page== 1?1:$page-1;
    $next = $page==$totalpage?$page:$page+1;
    $start = ($page-1)*RPP;




    $sql = "select * from product order by id limit {$start}," . RPP; //order by 排序  asc預設  desc
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
        echo "<td><a href='showImage.php?pid={$product->id}'>{$product->pname}</a></td>";
        echo "<td>{$product->price}</td>";
        echo "<td>{$product->qty}</td>";
        echo "<td><a href='?delid={$product->id}' onclick='return confirmdelete(\"{$product->pname}\");'>Delete</a></td>";
        echo "<td><a href='editpro.php?editid={$product->id}'>Edit</a></td>";
        // echo "<td><a href='?delid={$product->id}'>delete</a></td>";
        echo '</tr>';
    }
    ?>

</table>
<hr>
<a href="?page= <?php echo $prev;?>">prev</a>
<?php echo $page;?>&nbsp;
<a href="?page= <?php echo $next;?>">next</a>
