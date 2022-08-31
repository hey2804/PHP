<!-- session練習 -->
<!-- 陣列丟session的時機點要注意 -->
<!-- 物件丟session -->
<?php
    include('shanapis.php');
    session_start();

    $var = rand(1,49);
    echo $var;
    $_SESSION['var'] = $var;
    
    echo '<hr/>';
    $var2 = [1,2,3,4,5];
    $_SESSION['var2'] = $var2;

    $var2[2]= 100;    //  這裡的100並沒有被帶入session

    echo '<hr/>';
    $var3 = new Student('Shan',90,80,70);
    echo "{$var3->sum()}:{$var3->avg()}";
    $_SESSION['var3'] = $var3;

    $var3->setMath(100);

?>
<hr/>
<a href="shan58.php">Next Page</a>