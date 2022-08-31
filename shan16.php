

<?php
    $ary2[0] = 123;
    $ary2[4] = 12.3;
    $ary2[7] = 'shan';
    $ary2[1] = true;
    var_dump($ary2);
    echo'<hr/>';

    // php中,未指定內容的陣列並不存在記憶體中
    for($i=0; $i < count($ary2); $i++){
        echo "{$i}:{$ary2[$i]} <br/>";
    }
    echo '<hr/>';

    // 對array的index跟值做尋訪
    foreach($ary2 as $key => $value){
        echo "{$key}:{$value}<br/>";
    }
    echo '<hr/>';

    // 單純針對array的值做尋訪
    foreach($ary2 as $value){
        echo "{$value}<br/>";
    }
?>