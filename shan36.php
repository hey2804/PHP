<?php
    $fp = fopen('dir2/shan1.txt','r');
    $size = filesize('dir2/shan1.txt');
    echo fread($fp,$size);

    // while($data1 = fread($fp,1)){
    //     echo $data1;
    // }
    fclose($fp);
?>