<?php
    $i = 0;
    for(drawhead(0) ; $i<10 ; drawHr()){        //{初始執行;內容;最後一步}
       echo "{$i}<br />";
       $i++; 
    }

    
    function drawHead(){
        echo '<h1>Shan</h1><br />';
        drawHr();
    }

    function drawHr(){
        echo '<hr />';
    }

?>