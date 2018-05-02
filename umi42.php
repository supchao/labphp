<?php
$rate = $_GET['rate'];

//產生畫布
$img = ImageCreateTrueColor(400, 50);  ///
//$img1 = ImageCreateTrueColor(200, 50);

//開始作畫
$yellow = ImageColorAllocate($img, 255, 255, 0);
$red  = ImageColorAllocate($img, 255,0, 0);

ImageFill($img, 0, 0, $yellow);
Imagefilledrectangle($img,0,0,400*$rate/100,50,$red);
//輸出(瀏覽器 or  檔案)

header('Content-type:image/jpeg');

ImageJpeg($img);

//清除記憶體
ImageDestroy($img);

?>