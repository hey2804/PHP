<?php
    include('sqi.php');

    spl_autoload_register(function($className){    //一個能自動載入的方法,帶一個方法參數,就不需要每個東西都include()
        require_once $className . '.php';
    });     

    if(!isset($_REQUEST['account'])) header("Location: login.php");

    $account = $_REQUEST['account']; $passwd = $_REQUEST['passwd'];
    $sql = "SELECt * FROM member WHERE account = ?";

    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('s', $account);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0){
        $member = $result->fetch_object();
        if (password_verify($passwd, $member->passwd)){
            $_SESSION['member'] = $member;
            $_SESSION['cart'] = new Cart();
            header("Location: main.php");
        }else{
            header("Location: login.php");
        }
    }else{
        header("Location: login.php");
    }
    
?>