<?php
include'bradapis.php';
$result='';
if(!isset($_GET['answer'])){
    $answer = creatanswer(3);

}
else{
    $answer = $_GET['answer'];
    $guess =$_GET['guess'];
    $result = checkab($answer,$guess);
}

echo  $answer.'<br>';
?>
<form >
    Guess Number:  <input type="number" name="guess" />
    <input type="submit" value="Guess"/>
    <input type="hidden" name="answer" value="<?sphp echo $answer; ?>"/>
</form>

<div>
    <?php echo $result;?>
</div>
