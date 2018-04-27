//骰子









<?php
$p = array(1 => 0, 0, 0, 0, 0, 0);
for ($i = 1; $i <= 1000000; $i++) {
    $r = rand(1, 9);
    $p[$r >= 7 ? $r - 6 : $r]++;
}
for ($i = 1; $i <= 6; $i++) {
    echo "{$i} 有 {$p[$i]}個<br>";
}

echo "<hr>";
for ($i = 1; $i <= count($p); $i++) {
    echo "{$i} 有 {$p[$i]}個<br>";
}

echo "<hr>";
foreach ($p as $key => $malue) {
    echo "{key}:{$value}<br>";
}

echo "<hr>";


?>