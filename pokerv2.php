<!-- 洗撲克牌,分給四位玩家,要讓玩家能理牌 -->

<?php
    $poker = array();
    // 撲克牌特性:沒有重複的牌
    for($i = 0; $i < 52; $i++){
        do{
            $temp = rand(0,51);

            // 檢查有沒有重複的牌
            $isRepeat = false;
            for($j = 0; $j < $i; $j++){
                if ($poker[$j] == $temp){
                    // 與前面重複了
                    $isRepeat = true;
                    break;
                }
            }
        }while($isRepeat);

        $poker[$i] = $temp;
        echo "{ $poker[$i] } <br/>";
        
    }
?>