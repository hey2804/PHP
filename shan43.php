<?php
    $filename = $_POST['filename'];
    $upload = $_FILES['upload'];
    // echo gettype($upload);

    foreach($upload as $k => $v){
        echo "{$k} : {$v}<br/>";
    }

    if($upload['error'] == 0){
        if(move_uploaded_file($upload['tmp_name'],"myfile/{$filename}")){    //也可以用copy()  去看文件兩者有甚麼差異
            echo "Uplaod Success";
        }else{
            echo "Move Failure";
        }
    }else{
        echo 'Upload Failure';
    }

?>