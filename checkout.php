<?php
include_once 'cart.php';
include_once 'product.php';
include_once 'sql.php';
include_once  'Myquery.php';
session_start();
$cart = $_SESSION['cart'];
$myquery = new Myquery($mysqli);
$i=1;

?>

<table border="1" width="100%">
    <tr>
        <th>No.</th>
        <th>PName</th>
        <th>Price</th>
        <th>Num</th>
        <th>$</th>
    </tr>
    <?php
    foreach($cart->getList() as $item =>$num){
        $price = $myquery->getPinfo($item,Myquery::QUERY_PRICE);
        $sum=$num * $price;
        echo "<tr>";
        echo "<td>{$i}</td>";
        echo "<td>".$myquery->getPinfo($item,Myquery::QUERY_PNAME) . "</td>";
        echo "<td>{$price}</td>";
        echo "<td>{$num}</td>";
        echo "<td>{$sum}</td>";
        echo "</tr>";
        $i++;
    }
    ?>
</table>
