<?php
$cont = file_get_contents("http://gis.taiwan.net.tw/XMLReleaseALL_public/scenic_spot_C_f.xml");
$xml = simplexml_load_string($cont);
$error = libxml_get_errors();
foreach($error as $eor)
{
    echo "ERROR: {$eor}<br>";
}
//var_dump($xml);

foreach ($xml as $k=>$v){
//   echo gettype($v).":".$v->getName().'<br>';
    foreach($v as $kk=> $vv){
//        echo gettype($vv).":".$vv->getName().'<br>';
        $attrs =  $vv->attributes();
        foreach($attrs as $kkk=>$vvv){
            echo "{$kkk}:{$vvv}<br>";
        }
        echo "<hr>";
    }

}
echo "<hr>";

?>