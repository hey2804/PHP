<!-- 日常沒有公式可以表示的情況,適合用switch -->

<!-- 範例題目:印出各個月份有幾天 -->
<?php
    $months = rand(1,12);
    $days = 0;
    switch($months){
        case 1: case 3: case 5: case 7: case 8: case 10:case 12:  
            $days = 31; break;
        case 4: case 6: case 9: case 11: 
            $days = 30; break;
        case 2: 
            $days = 28; break;
        default:
            $days = -1;
            // 使用switch最好加個default
    }
    echo "($months)月有($days)天";
?>

<!-- 可以練習寫萬年曆了! -->