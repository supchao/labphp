<?php
$a = '';
$b = '';

if (isset($_GET['x'])) {
    $a = $_GET['x'];

//    if($a%4 ==0   && $a%100!=0 || $a%400==0) {
//        $b = "<br>" ."&nbsp" ."&nbsp" ."&nbsp" .$a . "是閏年";
//    }
//    else{
//        $b ="<br>" ."&nbsp" ."&nbsp" ."&nbsp" . $a . "不是閏年";
//    }

    if ($year % 4 == 0) {
        if ($year % 100 == 0) {
            if ($year % 400 == 0) {//29
                $isLeap == true;
            } else {//28
                $isLeap == false;
            }
        } else {//29
            $isLeap == true;
        }
    } else {//28
        $isLeap == false;
    }
}

?>
<form>
    <input type="text" name="x" value="<?php echo $a; ?>"/>
    <input type="submit"/>
    <?php
    //    echo $b;
    echo($isLeap ? "閏年" : "平年");    // (boolean)?(value1):(value2);  true 輸出1 false 輸出2
    ?>
</form>