<?php
    // 1.畫布(空白畫布 / 以既有檔案當畫布)
    // 2.作畫
    // 3.輸出(borwser / file)
    // 4.清除(避免浪費記憶體)

    // 1.
    $rate = $_GET['rate'];
    $width = 400;
    $gd = imagecreate(400,20);
    // 2.
    $red = imagecolorallocate($gd, 255, 0, 0);    
    imagefilledrectangle($gd, 0, 0, $width, 20, $red);
    
    $yellow = imagecolorallocate($gd, 255, 255, 0);
    imagefilledrectangle($gd, 0, 0, $width*$rate/100, 20, $yellow);

    // 3.
    header('Content-type: image/jpeg');  //宣告輸出內容為何
    imagejpeg($gd);

    // 4.
    imagedestroy($gd);
?>