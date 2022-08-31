<?php
    $upload = $_FILES['upload'];    //已知資料為陣列
    // v1-尋訪陣列
    // foreach ($upload as $k => $v){
    //     echo "{$k}:{$v}";
    // }
    // v2-看到全部陣列內容
    var_dump($upload);
    echo "<hr/>";
    foreach ($upload['error'] as $k => $v){
        if($v == 0){
            if(move_uploaded_file($upload['tmp_name'][$k],
            "myfile/{$upload['name'][$k]}")){

            }
        }
    }

?>