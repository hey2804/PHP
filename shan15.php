<!-- 開發階段,除錯常用的函式 -->
<!-- php中的array -->

<?php
    $ary1 = array(1,2,3,4,5,1.234,true,'shan');
    echo gettype($ary1). '<br/>';       // 只能看型別
    var_dump($ary1);           // 能看到型別(值)
    echo '<hr/>';

    echo count($ary1). '<br/>';       // 計算陣列的長度
    echo $ary1[4];
    echo '<hr/>';

    // 陣列的尋訪
    for ($i = 0;$i < count($ary1);$i++){
        echo "{$i}:{$ary1[$i]}<br/>";
    }
    echo '<hr/>';
    // 對array的index跟值做尋訪
    foreach($ary1 as $key => $value){
        echo "{$key}:{$value}<br/>";
    }
    echo '<hr/>';
    // 單純針對array的值做尋訪
    foreach($ary1 as $value){
        echo "{$value}<br/>";
    }
?>