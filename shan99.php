<h1>彈性九九乘法表</h1>
<hr />
<table border="1" width="100%">
<?php
    define("ROWS",3);
    define("START",1);
    define("COLS",3);
    
    for ($k = 0; $k < ROWS; $k++) {
        echo '<tr>';
        for ($j = START; $j < START+COLS; $j++) {
            $newj = $j + $k * COLS;
            if(($j+$k )% 2 ==0 ){
               echo '<td bgcolor="pink">'; 
            }else{
                echo '<td bgcolor="yellow">';
            }
            
            for ($i = 1; $i <= 9; $i++) {
                $r = $newj * $i;
                echo "{$newj} x {$i} = {$r}<br />";
            }
            // echo '<td>';
        }
        echo '<tr>';

    }
?>
</table>