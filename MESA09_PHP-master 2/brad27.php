<?php
    include 'bradapis.php';

    $result = $hist = '';
    if (!isset($_POST['answer'])){
        // 首次進入
        $answer = createAnswer(3);
    }else{
        // 之後進入
        $answer = $_POST['answer'];
        $guess = $_POST['guess'];
        $hist = $_POST['hist'];
        $result = checkAB($answer, $guess);
        $hist .= "{$guess} : {$result} <br>";
    }

    //echo $answer . '<br>';

?>
<form method="post">
    Guess Number: <input type="number" name="guess"/>
    <input type="submit" value="Guess" />
    <input type="hidden" name="answer" value="<?php echo $answer; ?>">
    <input type="hidden" name="hist" value="<?php echo $hist; ?>">
</form>
<hr />
<div><?php echo $hist; ?></div>