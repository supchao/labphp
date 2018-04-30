<?php
include'bradapis.php';
$result ='';
$hist ='';
if(!isset($_POST['answer'])){
    $answer = creatanswer(3);
}
else{
    $answer = $_POST['answer'];
    $guess =$_POST['guess'];
    $hist =$_POST['hist'];
    $result = checkab($answer,$guess);
    $hist .= "{$guess}:{$result}<br>";
}

//echo  $answer.'<br>';
?>
<form method="post">
    Guess Number:  <input type="number" name="guess" />
    <input type="submit" value="Guess"/>
    <input type="hidden" name="answer" value="<?php echo $answer; ?>"/>
    <input type = "hidden" name="hist" value="<?php echo $hist; ?>"/>
</form>

<div>
    <?php
    echo $hist;
    ?>
</div>
