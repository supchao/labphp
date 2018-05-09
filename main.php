<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php
include_once 'sql.php';
include_once 'member.php';
include_once 'product.php';
include_once 'cart.php';

session_start();

if(!isset($_SESSION['mem'])){header('Location:login.php');}
$sql = "select *from product";
$result = $mysqli->query($sql);
?>


Main Page
<hr>
Product List:<br>
<table border="1" width="100%">
    <tr>
        <th>pname</th>
        <th>pric</th>
        <th>num.</th>
        <th>update cart</th>
    </tr>
    <script>
        function addcart(pid){
            var num = $("#num_"+ pid).val();
            alert(pid + ":" + num);
        }
    </script>
    <?php


    while($product = $result->fetch_object('product')){
        echo "<tr>";
        echo "<td>{$product->pname}</td>";
        echo "<td>{$product->price}</td>";
        echo "<td><input type='number' name='number' id ='num_{$product->id}' value=''/></td>";
        echo "<td><input type='button' 
            onclick='addcart({$product->id})'  value='add cart'</td>";
        echo "</tr>";
    }
    ?>


</table>
<hr>
<a href="logout.php" >log out</a>
<a href="checkout.php" >check out</a>

