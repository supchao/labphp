
<table border="1" width="100%">
    <?php
        for ($k = 0; $k < 4; $k++ ){
            echo '<tr>';
            for ($j = 2; $j <= 5; $j++){
                $newj = $j + $k * 4;

//                if (($newj + $k) % 2 == 0){
//                    echo '<td bgcolor="yellow">';
//                }else{
//                    echo '<td bgcolor="pink">';
//                }

                echo '<td bgcolor="' . ((($newj + $k) % 2 == 0)?'yellow':'pink') . '">';

                for ($i = 1; $i<=9; $i++){
                    $r = $newj * $i;
                    echo "{$newj} x {$i} = {$r}<br>";
                }
                echo '</td>';
            }
            echo '</tr>';

        }
    ?>

</table>