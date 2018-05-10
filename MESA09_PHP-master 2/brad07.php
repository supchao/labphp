<?php
    $result = $x = $y = '';   // string
    $op = 1;
    if (isset($_GET['x'])) {
        $x = $_GET['x'];
        $y = $_GET['y'];
        $op = $_GET['op'];

        if ($op == '1'){
            $result = $x + $y;  // integer
        }else if ($op == '2'){
            $result = $x - $y;  // integer
        }else if ($op == '3'){
            $result = $x * $y;  // integer
        }else if ($op == '4'){
            $result = $x / $y;  // integer
        }
        // 練習前後端

    }
?>
<form>
    <input type="text" name="x" value="<?php echo $x;  ?>"/>
    <select name="op">
        <option value="1" <?php if ($op==1) {echo 'selected';} ?>>+</option>
        <option value="2" <?php if ($op==2) {echo 'selected';} ?>>-</option>
        <option value="3" <?php if ($op==3) {echo 'selected';} ?>>x</option>
        <option value="4" <?php if ($op==4) {echo 'selected';} ?>>/</option>
    </select>
    <input type="text" name="y" value="<?php echo $y; ?>" />
    <input type="submit" value="=" />
    <?php
        echo $result;
    ?>
</form>