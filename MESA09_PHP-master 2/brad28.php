<?php
$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);  // 0

// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' was the 0th (first) character.
if ($pos !== false) {
    echo 'XX';
}else {
    echo 'OK';
}