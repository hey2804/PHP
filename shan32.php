<?php
    // 1.
    $gd = imagecreatefromjpeg("image/coffee.jpg");

    // 2.
    $yellow = imagecolorallocate($gd, 255, 255, 0);
    imagettftext($gd, 36, 0, 100, 100, $yellow, 'fonts/Joan-Regular.ttf', 'Hello, Shan');
    // 3.
    header('Content-type: image/jpeg');  //宣告輸出內容為何
    imagejpeg($gd);

    // 4.
    imagedestroy($gd);
?>