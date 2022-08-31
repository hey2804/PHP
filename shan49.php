<!-- 更新資料 -->
<meta charset="UTF-8">

<?php
    $mysqli = new mysqli('localhost','root','','ispan',3306);
    $mysqli->set_charset('utf8');


    $cname = 'Eric'; $tel = '9999'; $birthday = '1996-11-28';
    $id = 3;
    $sql = "UPDATE cust SET cname = ?, tel = ?, birthday = ? WHERE id = ?";
    $stmt = $mysqli->prepare($sql);    //stmt: statement
    // var_dump($stmt);
    $stmt->bind_param('sssi',$cname,$tel,$birthday,$id);
    $stmt->execute();


?>