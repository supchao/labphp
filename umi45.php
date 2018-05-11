<?php
$img = imagecreatefromjpeg("coffee.jpeg");

$blue = imagecolorallocate($img ,0,0,255);
imagettftext($img,24,30,100,90,$blue,"./Roboto-Bold.ttf","h");
imagettftext($img,30,-25,115,90,$blue,"./Roboto-Bold.ttf","e");
imagettftext($img,24,10,155,90,$blue,"./Roboto-Bold.ttf","l");
imagettftext($img,15,-15,165,90,$blue,"./Roboto-Bold.ttf","o");



header("Content-type: image/jpg");
imagejpeg($img);

imagedestroy($img);
?>