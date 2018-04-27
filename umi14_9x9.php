<?php
$i = '';
$j = '';

?>
<table border="1" width="100%">

    <?php for($k = 0;$k<4;$k++){
        echo '<tr>';
        for ($j = 2; $j <= 5; $j++) {
            $newj = $j + $k * 4;
//            $newi = ($newj+$k)%2;
            echo '<td bgcolor="' . ((($newj+$k)%2 ==0)?'yellow':'pink').'">';
            for ($i = 1; $i <= 9; $i++) {
                $a = $newj * $i;
                echo "{$newj} x {$i} = {$a}<br>";
            }
            echo '</td>';
        }
        echo '</tr>';
    }

    ?>



<!--    <tr>-->
<!--        --><?php //for ($j = 2; $j <= 5; $j++) {
//            echo "<td> ";
//            for ($i = 1; $i <= 9; $i++) {
//                $a = $j * $i;
//                echo "{$j} x {$i} = {$a}<br>";
//            }
//              echo "</td>";
//        } ?>
<!--    </tr>-->
</table>
