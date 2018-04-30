<?php
$id = 'A123456789';
if(preg_match('/^[A-Z][12][0-9]{8}$/',$id)){
    echo 'ok';
}else{
    echo'xx';
}
?>