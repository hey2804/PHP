<!-- 測試shanapis.php的程式能不能用 -->

<?php
    include('shanapis.php');     // 引入另個檔案的資料

    if(checkTWId('A123456789')){
        echo 'OK';
    }else{
        echo 'XX';
    }
    echo '<hr/>';
    echo 'Random:' . createTWIdByRandom().'<br/>';
    echo '女生:' . createTWIdByGender().'<br/>';
    echo '男生:' . createTWIdByGender(true).'<br/>';
    echo '嘉義:' . createTWIdByArea('I').'<br/>';
    echo '高雄女生:' . createTWIdByArea('S',false).'<br/>';

?>