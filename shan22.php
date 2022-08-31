<!-- 多維陣列,就去畫出樹狀圖-->
<!-- 核心概念: 不管幾維,其實都是一維陣列 -->
<!-- 電腦記憶體,也是一維陣列的存放概念 -->
<!-- 陣列的index,即是偏移量offset的概念 -->

 <?php
    $a = array();
    $a[0] = array();
    $a[1] = array();
    $a[0][0] = 123;
    $a[0][1] = 456;
    $a[0][2] = 11;

    $a[1][0] = 123;
    $a[1][7] = 456;

    $a[2][0][47] = 56;

    var_dump($a);
    echo '<hr/>';

    // 利用count()去看出陣列每一層的數量
    echo count($a);    
    echo '<hr/>';
    echo count($a[0]);
    echo '<hr/>';
    echo count($a[1]);    
    echo '<hr/>';
    echo count($a[2]);    
    echo '<hr/>';
    echo count($a[2][0]);    
    echo '<hr/>';

    
 ?>