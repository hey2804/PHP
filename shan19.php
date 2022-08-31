<?php
    $p = array(1 => 0,0,0,0,0,0);
    var_dump($p);
    echo '<hr/>';

    for ($i = 0; $i < 10000; $i++){
        $temp = rand(1,9);
        $point = $temp >= 7? $temp-3 : $temp;
        $p[$point]++;
    }

    foreach($p as $point => $times){
        echo "{$point}點出現{$times}次<br />";
    }

?>