<?php
//    function changeA(){
//     $a = 100;            //這裡的$a是區域變數,離開函式作用範圍就不成立
//     echo "debug:{$a}<br/>";
//    }

   function changeA(){
    global $a;       //宣告$a為全域變數 ,離開函式範圍仍有作用
    $a = 100;
    echo "debug:{$a}<br/>";
   }
   
    $a = 10;
    echo $a;
    echo '<hr/>';
    changeA();
    echo $a;

    echo '<hr/>';
    function changeB1($c){
        $c = 111;
    }

    function changeB2(&$c){
        $c = 111;
    }

    $b = 11;
    echo $b;
    echo '<hr/>';
    changeB1($b);
    echo $b;
    echo '<hr/>';
    changeB2($b);
    echo $b;
?>