//二維陣列宣告








<?php
$a[] = array(3,4,1,5);
$a[] = array(1,2,3);
//var_dump($a);
echo $a[0][2].'<hr>';


foreach($a  as$sub)
{  foreach($sub as $v)
{echo $v.' ';
}
echo '<br>';
}
?>