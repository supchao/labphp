<?php
    date_default_timezone_set("Asia/Taipei");

    $fp = @opendir("test1") or die("Server Busy");
    while ($file = readdir($fp)){
        if (is_dir("test1/{$file}")){
            echo '[dir]';
        }else if (is_file("test1/{$file}")){
            echo '[file]';
        }

        echo $file . ':' . filesize("test1/{$file}") .
            ':'.
            date("Y-m-d H:i:s",
                filemtime("test1/{$file}")) . '<br>';

    }
    closedir($fp);

    @unlink("test1/brad1.txt");

    mkdir("test2");