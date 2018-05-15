<?php
include_once 'sql.php';
include_once 'mesg.php';
$sql = "select * from message";
$resultr = $mysqli->query($sql);
$date = $resultr->fetch_object('mesg');
?>
<table>
    <?php
while($product = $resultr->fetch_object('mesg')){
    echo '<tr>';
    echo "<td>{$product->whoid}</td>";

    echo "<td>{$product->mesg}</td>";
    echo "<td>{$product->interdate}</td>";

    // echo "<td><a href='?delid={$product->id}'>delete</a></td>"
    echo '</tr>';
}
?>
</table>