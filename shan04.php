<?php
    $height = 168;
    echo "Shan<br />\n";
    // 用雙引號時 程式碼有被處理過 \n才能執行換行
    echo 'height: ' . $height . 'kg<br/>';
    echo "height: $height kg<br/>";
    echo 'height: $height kg<br/>';     // 單引號內的變數不會被處理
    echo "height: {$height}kg<br/>";
?>