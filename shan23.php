<!-- 如何交換資料 -->

<?php
    $a = 10; $b = 3;
    // v1
    // $a =3; $b = 10;

    // v2
    // $temp = $a; $a = $b; $b = $temp;

    // v3
    //$a = $a + $b;    // 13, 3
    //$b = $a - $b;    // 13, 10
    //$a = $a - $b;    // 3, 10

    // v4
    $a = $a ^ $b;
    $b = $a ^ $b;
    $a = $a ^ $b;

    echo "a={$a}; b={$b}";
?>