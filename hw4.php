<?php
function color($w){
    $result = true;
    if($w==1){$result =false;}
    for($i=2;$i<$w;$i++){
        if($w%$i ==0){$result = false;}
        else{continue;}
    }
    return $result;
}
?>
<input type="text" name="k"/>
<table border="1" width="100%" style="table-layout:fixed;">
            <?php
            $k=$_POST['k'];
            for($j =0;$j <$k/10;$j++) {
                echo "<tr>";
                for ($i = 1; $i <= $k/10; $i++) {
                    $k = $j*10+$i;
                    $l = color($k);
                    if($l){
                    echo '<td style="text-align:center;background-color: yellow;">';
                    echo $k;
                    echo "</td>";}
                    else{echo '<td style="text-align:center;">';
                    echo $k;
                    echo "</td>";}
                }
                echo "</tr>";
            }
            ?>
</table>
