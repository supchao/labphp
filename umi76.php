<?php
$cont = file_get_contents("books.xml");
$xml = simplexml_load_string($cont);
$error = libxml_get_errors();
foreach($error as $eor)
{
    echo "ERROR: {$eor}<br>";
}
var_dump($xml);
echo '<hr>';
echo $xml->getName() . ":" . $xml->count();
echo '<hr>';
foreach($xml as $v){
    echo $v->getName().":".$v->count().gettype($v)."<br>";
}
echo '<hr>';
$attrs = $xml->book[0]->attributes();
foreach($attrs as $k=>$v){
    echo "{$k}:{$v}<br>";
}
echo '<hr>';
$cs = $xml->book[0]->children();
echo gettype($cs)."<br>";
foreach($cs as $k=>$v){
//    if(!isset(is_object($v)))
//    {echo "{$k}:{$v}<br>";}
    echo "{$k}:{$v}<br>";
}
echo '<hr>';
$as = $xml->book[0]->authors->author;
foreach($as as $k=> $v){
    echo "{$k}:{$v}<br>";
}
?>