<?php
    // 使用路徑開啟資料夾
    $fp = @opendir('c:/') or die('Server Busy');
    // echo gettype($fp);
    
    // echo readdir($fp) .'<br/>';  // . 代表本路徑
    // echo readdir($fp) .'<br/>';
    // echo readdir($fp) .'<br/>';

    while($file = readdir($fp)){
            echo $file . '<br/>';
        }

    // 務必要關,否則會消耗記憶體
    closedir($fp);
?>