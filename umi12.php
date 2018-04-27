<?php
$v = rand(1, 12);
switch ($v) {
    case 2:
        echo $v . '月' . "&nbsp" . '28天';
        break;
    case 9:
    case 4:
    case 11:
    case 6:
        echo $v . '月' . "&nbsp" . '30天';
        break;
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        echo $v . '月' . "&nbsp" . '31天';
        break;
    default:
        echo 'X';
        break;
}
echo '<hr>';

$a ='1';
switch ($a){
    case 2:echo 'A'; break;
    case 1.0:echo 'B'; break;
    case '1':echo 'C'; break;
    default: echo 'X';

}