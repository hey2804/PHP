<!-- 以shan17擲骰子同樣範例,示範陣列適用在哪種例子 -->

<?php
    $test = array(0,0,0,0,0,0);
    var_dump($test);
    echo '<hr/>';

    $p = array(1 => 0,0,0,0,0,0);
    var_dump($p);
    echo '<hr/>';
    
    for ($i = 0; $i < 100; $i++){
        $p[rand(1,6)]++;
    }
    
    foreach($p as $point => $times){
        echo "{$point}點出現{$times}次<br />";
    }


    /*
    for ($i = 0; $i < 100; $i++){
        $point = rand(1,6);
        switch ($point){
            case 1: $p1++; break;
            case 2: $p2++; break;
            case 3: $p3++; break;
            case 4: $p4++; break;
            case 5: $p5++; break;
            case 6: $p6++; break;
        }
    }

    echo "1點出現{$p1}次<br/>";
    echo "2點出現{$p2}次<br/>";
    echo "3點出現{$p3}次<br/>";
    echo "4點出現{$p4}次<br/>";
    echo "5點出現{$p5}次<br/>";
    echo "6點出現{$p6}次<br/>";
    */

    
?>