<?php
    $n = $sum = '';
    if (isset($_GET['n'])){
        $n = $_GET['n'];    // string
        $sum = 0; $i = 1;
        while ($i<=$n){
            $sum += $i;
            $i++;
        }

    }
?>
<form>
    1 + 2 + ... +
    <input type="number" name="n" value="<?php echo $n; ?>"/>
    <input type="submit" value="=" />
    <?php echo $sum; ?>
</form>