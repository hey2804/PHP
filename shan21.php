<?php
    $a[] = 12;
    $a[] = 34;
    $a[7] = 'Shan';
    $a[] = 56;
    $a['name'] = 'Shan';
    $a['age'] = 18;
    $a['height'] = 168;

    var_dump($a);
    echo '<hr/>';
    foreach($a as $k => $v){
        echo "{$k} : {$v}<br />";
    }

?>