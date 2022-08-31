<!-- 隱碼攻擊 -->

<meta charset="UTF-8">

<?php
// update
$mysqli = new mysqli('localhost','root',null,'ispan',3306);
$mysqli->set_charset('utf8'); // 文字串流用utf-8

$sql = "SELECT * FROM cust";

$result = $mysqli->query($sql);

// var_dump($result);
echo $result ->num_rows . '<br/>';  //從物件屬性看有幾比資料

while($row = $result->fetch_object()){    // 迴圈撈全部資料
    echo "{$row->id} : {$row->cname} : {$row->birthday} : {$row->tel} <br />";
}

// $row = $result->fetch_object(); //撈資料
// echo "{$row->id} : {$row->cname} : {$row->birthday} : {$row->tel} <br />";
// $row = $result->fetch_object();
// echo "{$row->id} : {$row->cname} : {$row->birthday} : {$row->tel} <br />";

// while($row = $result->fetch_array()){
//     echo "{$row['id]}:{$row['cname']}:{$row['tel']}:{$row['birthday']}<br/>"
// }

$stmt = $mysqli->prepare($sql);
$stmt->execute();
$stmt->store_result();

echo $stmt->num_rows() . '<br/>';

// 綁定結果
$stmt->bind_result($id, $tel,$cname,  $birthday,);
while($stmt->fetch()){
    echo "{$id}:{$tel}:{$cname}:{$birthday}";
}
$stmt ->free_result();
$stmt ->close();


?>