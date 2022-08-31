<?php
    $account = $_REQUEST['account'];  //$_GET  $_POST  $_REQUEST 差異
    $passwd = $_REQUEST['password'];
    $gender = $_REQUEST['gender'];
    $habbit = $_REQUEST['habbit'];
    
    foreach ($_REQUEST as $k => $v){
        if(gettype($v) == 'array'){
            echo $k .'<br/>';
            foreach($v as $h){
                echo "{$h}<br/>";
            }
        }else{
            echo "{$k} => {$v}<br/>";
        }
       
    }
?>