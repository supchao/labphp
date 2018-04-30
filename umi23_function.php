<?php //function

sayya();
sayya();
sayhello('badk');
//sayhello();                     //嚴重錯誤  不會執行
sayhellov2('badk');
sayhellov2();
sayhellov3(4,'braand');
sayhellov4();


sayhellov4(123);
sayhellov4('bsc');
sayhellov4(123,'dec',true);

function sayya()
{
    echo "ya<br>";
}

function sayhello($name)
{
    echo "hello, {$name}<br>";
}

function sayhellov2($name = 'world')
{
    echo "hello, {$name}<br>";
}

function sayhellov3($x,$name = 'world')  // 預設值選項放在後面
{
    while($x >0){
    echo "hello, {$name}<br>";
    $x--;}
}

function sayhellov4(){
    $n = func_get_args();   //捕抓所有傳遞進來的參數 => 變為array
    foreach($n as$k=> $v){
        echo "{$k}:{$v}<br>";
    }
}

?>
<!--<form>-->
<!--<input type="text" name="x"/>-->
<!--<input type ="submit">-->
<!--</form>-->

