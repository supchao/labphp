<?php
$upload = $_FILES['upload'];
//foreach ($upload as $key => $value) {
//    echo "{$key} : ";
//    var_dump($value);
//    echo "<hr />";
//}
foreach ($upload['error'] as $key =>$value){
    if ($value ==0){
        if(copy($upload['tmp_name'][$key],"text3/{$upload['name'][$key]}")){
            echo 'upload ok:'. $upload['name'][$key].'<br>';
        }else{
            echo 'upload fail:' . $upload['name'][$key].'<br>';
        }
    }
}




/////    $_FILES ---['upload']-------['name']
///                                  ['tmp_name']
///                                  ['type']
///                                  ['error']
///                                  ['size']
?>