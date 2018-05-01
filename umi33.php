<?php
date_default_timezone_set("Asia/Taipei");

$fp = opendir("test1");
while($file = readdir($fp)){
    if(is_dir("test1/{$file}")){
        echo '[dir]';
    }else if(is_file("test1/{$file}")){
        echo '[file]';
    }
    echo $file.":".filesize("test1/{$file}").'&nbsp'.
        date("Y-m-d H:i:s",filemtime("test1/{$file}")). "<br>";

}
date_default_timezone_set("Asia/Taipei");
closedir($fp);

mkdir("test2");

unlink("test1/iii.txt");
?>