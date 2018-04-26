<?php
$a ='';
$b ='';

if(isset($_GET['x'])) {
    $a = $_GET['x'];

    if($a%4 ==0   && $a%100!=0 || $a%400==0) {
        $b = "<br>" ."&nbsp" ."&nbsp" ."&nbsp" .$a . "是閏年";
    }
    else{
        $b ="<br>" ."&nbsp" ."&nbsp" ."&nbsp" . $a . "不是閏年";
    }
}
?>
<form>
    <input type="text" name="x" value="<?php echo $a ;?>"/>
    <input type = "submit" />
    <?php
    echo $b;
    ?>
</form>
