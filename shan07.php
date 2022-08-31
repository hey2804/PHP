<?php
    $x = $_GET["x"];    $y = $_GET["y"];
    $r = $x + $y;
    // php變數的大小寫有嚴格區分
    echo "{$x} + {$y} = {$r}<br />";
    echo gettype($x);    // 將字串設為變數之後即可運算,但其初始型別並未改變
?>