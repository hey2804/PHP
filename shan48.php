<!-- 新增資料 -->
<meta charset="UTF-8">

<?php
    $mysqli = new mysqli('localhost','root','','ispan',3306);
    // if($mysqli){
    //     echo 'OK';
    // }else{
    //     echo 'XX';
    // }
    $mysqli->set_charset('utf8');

    // $sql = "INSERT INTO cust(cname,tel,birthday) VALUE('shan','123','1996-11-28')";
    // if($mysqli->query($sql)){
    //     echo 'OK';
    // }else{
    //     echo 'XX';
    // }

    $cname = 'Shan'; $tel = '9876'; $birthday = '1996-11-28';
    $sql = "INSERT INTO cust (cname,tel,birthday) VALUE (?,?,?)";
    $stmt = $mysqli->prepare($sql);    //stmt: statement
    // var_dump($stmt);
    $stmt->bind_param('sss',$cname,$tel,$birthday);
    $stmt->execute();

?>