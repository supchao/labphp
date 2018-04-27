<?php
$a1 = 0;
$a2 = 0;
$a3 = 0;
$a4 = 0;
$a5 = 0;
$a6 = 0;
for ($i = 1; $i <= 100; $i++) {
    $r = rand(1, 6);

    /**/
    switch ($r) {
        case 1:
            $a1++;
            break;
        case 2:
            $a2++;
            break;
        case 3:
            $a3++;
            break;
        case 4:
            $a4++;
            break;
        case 5:
            $a5++;
            break;
        case 6:
            $a6++;
            break;
    }
}
echo "1 : {$a1}<br>" . "2 : {$a2}<br>" . "3 : {$a3}<br>" . "4 : {$a4}<br>" . "5 : {$a5}<br>" . "6 : {$a6}";
?>