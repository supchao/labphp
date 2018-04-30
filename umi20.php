<!--// while 做 高斯...-->
<?php
$x='';$y='';
if(isset($_GET['x'])) {
    $x = $_GET['x'];$y=0;
    while($x>0){
        $y+=$x;
        $x--;
    }

}
?>

<form>
    1+2+3+......+
    <input type="text" name="x" value="<?php echo $_GET['x'];?>"/>
    <input type="submit" name="y" />
<?php
echo $y;
?>
</form>

