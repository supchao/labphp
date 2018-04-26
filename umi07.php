<?php
$x = $y = '';
$z = '';     //string && $_GET['u']
$u = 1;
if (isset($_GET['x'])) {
    $u = $_GET['u'];
    $x = $_GET['x'];
    $y = $_GET['y'];

//    switch ($u) {
//        case 1:
//            $z = $x + $y;
//        case 2:
//            $z = $x - $y;
//        case 3:
//            $z = $x * $y;
//        case 4:
//            $z = $x / $y;
//    }
    if($u =='1')
    { $z = $x + $y;}
    else if($u == '2'){
        $z = $x - $y;
    }
    else if($u == '3'){
        $z = $x * $y;
    }
    else if($u == '4'){
        $z = (float)($x / $y) . '             '.$x%$y;
    }


    //interger
//    echo "{$x} + {$y} ={$z}<br>";
//    echo $x . ':'. gettype($x) . '<br>';
//    var_dump($x);
}
?>
<form>
    <input type="text" name="x" value="<?php echo $x; ?>"/>
    <select name="u">
        <option value="1" <?php if ($u == 1) {
            echo 'selected';
        } ?>>+
        </option>
        <option value="2" <?php if ($u == 2) {
            echo 'selected';
        } ?>>-
        </option>
        <option value="3" <?php if ($u == 3) {
            echo 'selected';
        } ?>>x
        </option>
        <option value="4" <?php if ($u == 4) {
            echo 'selected';
        } ?>>/
        </option>
    </select>
    <input type="text" name="y" value="<?php echo $y; ?>"/>
    <input type="submit" value="=" name=""/>
    <?php
    //    if(isset($_GET['x']) && $_GET['y']){
    echo $z;
    //    }
    ?>
</form>
