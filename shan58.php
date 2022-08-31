Page 2
<hr/>
<?php
    include('shanapis.php');
    session_start();

    $var = $_SESSION['var'];
    echo $var;

    $var3 = $_SESSION['var3'];
    echo "{$var3->sum()} : {$var3->avg()}";
?>

<a href="shan59.php">Logout</a>