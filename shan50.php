<!-- 刪除資料 -->
<meta charset="UTF-8">

<?php
    $mysqli = new mysqli('localhost','root','','ispan',3306);
    $mysqli->set_charset('utf8');


    $cname = 'Eric'; $tel = '9999'; $birthday = '1996-11-28';
    $id = 2;
    $sql = "DELETE FROM cust WHERE id = ?";
    $stmt = $mysqli->prepare($sql);    //stmt: statement
    // var_dump($stmt);
    $stmt->bind_param('i',$id);
    $stmt->execute();

?>