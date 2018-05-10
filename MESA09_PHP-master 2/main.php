Main Page
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php
    include_once 'sql.php';
    include_once 'Member.php';
    include_once 'Cart.php';
    include_once 'Product.php';
    session_start();

    if (!isset($_SESSION['member'])) header('Location: login.php');

    $member = $_SESSION['member'];
    $cart = $_SESSION['cart'];
    $sql = "select * from product";
    $result = $mysqli->query($sql);


    ?>
<hr>
Hello, <a href="editProfile.php"><?php echo $member->name; ?></a>
<?php
    $icon = base64_encode($member->icon);
?>
<img src="data:image/jpeg;base64,<?php echo $icon; ?>"/>
<br>
Product List:<br>
<table border="1" width="100%">
    <tr>
        <th>PName</th>
        <th>Price</th>
        <th>Num.</th>
        <th>Update Cart</th>
    </tr>
    <script>
        function addCart(pid) {
            var num = $("#num_" + pid).val();
            $.get("addCart.php?pid="+pid+"&num="+num, function (data, status) {
                if (status == 'success'){
                    alert(data);
                }
            })
        }
    </script>
    <?php
    while ($product = $result->fetch_object("Product")){
        echo '<tr>';
        echo "<td>{$product->pname}</td>";
        echo "<td>{$product->price}</td>";

        $num = $cart->getItemNum($product->id);
        echo "<td><input type='number' id='num_{$product->id}' value='{$num}'></td>";
        echo "<td><input type='button' 
            onclick='addCart({$product->id})''
            value='update'></td>";

        echo '</tr>';
    }
    ?>

</table>
<hr>
<a href="checkout.php">Checkout</a>
<hr>
<a href="logout.php">Logout</a>



