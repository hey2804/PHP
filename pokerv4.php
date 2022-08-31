<!-- 使用php function來洗牌 -->
<!-- 發給四位玩家 -->

<?php
    $poker = range(0,51);
    shuffle($poker);

    // 印出來確認一下是否有洗牌
    foreach($poker as $card){
        echo "{$card}<br/>";
    }
    echo '<hr/>';

    // v1-初始化陣列寫法
    // $players = array(array(),array(),array(),array());
    
    // v2-初始化陣列寫法: 把牌分給四位玩家
    $players = [[],[],[],[]];

    // 開始發牌
    foreach($poker as $i => $card){
        // $players[第幾家][第幾張] = $card;
        $players[$i % 4][(int)($i / 4)] = $card;
    }

    foreach($players[1] as $card){
        echo "{$card}<br/>";
    }
?>

<!-- 以表格方式秀出四位玩家的牌 -->

&spades; &hearts; &diams; &clubs;
(int)($card / 13);


<table border="1" width="100%">
<?php
    // 定義花色
    $suits = ["&spades;","<font color='red'>&hearts;","<font color='red'>&diams;","&clubs;"];
    $values = ['A',2,3,4,5,6,7,8,9,10,'J','Q','K'];

    foreach($players as $player){
        sort($player);
        echo'<tr>';
        foreach($player as $card){
            $suit = $suits[(int)($card / 13)];
            $value = $values[$card % 13];
            echo "<td>{$suit}{$value}($card)</td>";
        }
        echo'</tr>';
    }    
?>
</table>