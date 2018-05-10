<?php
    include_once 'myconfig.php';
    include_once 'sql.php';
    include_once 'Product.php';

    if (isset($_REQUEST['delid'])){
        // delete data
        $delid = $_REQUEST['delid'];
        $sql = "delete from product where id = {$delid}";
        $mysqli->query($sql);
    }

//    $sql = 'select count(*) as `sum` from product';
//    $result = $mysqli->query($sql);
//    $data = $result->fetch_assoc();
//    $sum = $data['sum'];
//    echo $sum . '<br>';

    $sql = 'select id from product';
    $result = $mysqli->query($sql);
    $sum = $result->num_rows;
//    echo $sum . '<br>';


    $page = 1;
    if (isset($_REQUEST['page'])){
        $page = $_REQUEST['page'];
    }

    $totalPage = ceil($sum / RPP);
    $prev = $page==1?1:$page-1;
    $next = $page==$totalPage?$page:$page+1;

    $start = ($page-1)*RPP;
    $sql = "select * from product order by id limit {$start}," . RPP;
    $result = $mysqli->query($sql);

?>
<a href="addProduct.php">Add New</a>
<hr />
Product List:<br>
<table border="1" width="100%">
    <tr>
        <th>id</th>
        <th>pname</th>
        <th>price</th>
        <th>qty</th>
        <th>delete</th>
        <th>edit</th>
    </tr>
    <script>
        function confirmDelete(pname) {
            return confirm('Delete ' + pname + '?');
        }
    </script>
    <?php
    while ( $product = $result->fetch_object('Product')){
         echo '<tr>';
         echo "<td>{$product->id}</td>";
         echo "<td>{$product->pname}</td>";
         echo "<td>{$product->price}</td>";
         echo "<td>{$product->qty}</td>";
         echo "<td><a href='?delid={$product->id}' " .
             "onclick='return confirmDelete(\"{$product->pname}\");'>Delete</a></td>";
         echo "<td><a href='editProduct.php?editid={$product->id}'>Edit</a></td>";
         echo '</tr>';
    }

    ?>
</table>
<hr>
<a href="?page=<?php echo $prev; ?>">Prev</a>
<?php echo $page; ?>
<a href="?page=<?php echo $next; ?>">Next</a>