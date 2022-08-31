<?php
    function sayYa(){
        echo 'Ya<br/>';
    }
    function sayHello($name){
        echo "Hello,{$name}<br/>";
    }
    function sayHelloV2($n,$name){
        for ($i = 0; $i < $n; $i++){
            echo "Hello,{$name}<br/>";
        }        
    }
    // 參數指定預設值
    function sayHelloV3($name,$n = 1){
        for ($i = 0; $i < $n; $i++){
            echo "Hello,{$name}<br/>";
        }        
    }
    // 注意:帶的參數是從第一個開始算起,若$n = 1寫在前面會造成無窮迴圈!
    function sayHelloV4($name = 'World',$n = 1){
        for ($i = 0; $i < $n; $i++){
            echo "Hello,{$name}<br/>";
        }        
    }

    function test1(){
        //echo 'test1()'.func_num_args();        // func_num_args()此函式可傳回參數的數量
        $args = func_get_args();        // func_get_args() 取得並傳回一個array
        foreach($args as $v){          // func_get_arg() 取得並傳回參數
            echo "{$v}<br/>";
        }
    }

    function sum(){
        $v = 0;
        $args = func_get_args();
        foreach($args as $arg){
            $v += $arg;
        }
        return $v;
    }

    sayYa();
    sayYa();
    sayHello('Brad');
    sayHello('Shan');
    sayHelloV2(3,'Shan');
    sayHelloV3('Eric',3);
    sayHelloV3('Peter');
    sayHelloV4();

    test1(1,2,3,4,'Shan',true);

    $sum = sum(1,2,3,4,5,6,7,8,9,10);
    echo $sum;


?>