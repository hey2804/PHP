<?php
    $var1 = '10';   $var2 = false;
    $var3 = $var1 + $var2;
    $var4 = $var1 - $var2;
    $var5 = $var1 * $var2;
    // $var6 = (int)($var1 / $var2);
    // $var7 = $var1 % $var2;

    echo "{$var1}+{$var2}={$var3}<br/>";
    echo "{$var1}-{$var2}={$var4}<br/>";
    echo "{$var1}*{$var2}={$var5}<br/>";
    // echo "{$var1}/{$var2}={$var6}......{$var7}<br/>";
?>

<!-- 因$var2 = false為布林值,無法進行運算,在此會以0進行處理 -->