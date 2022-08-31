<?php
    $x = $y = $r = $op = "";
    if(isset($_GET['x']) && isset($_GET['y'])){        // isset()函數用來判斷變數是不是有存在(設置)，如果有就回傳 1(true)，如果沒有就回傳空值
        $x = $_GET["x"];    $y = $_GET["y"];            //前端傳送資料寫 method = "get",是指"透過網址傳値"的方式運作。
        $r = $x + $y;                                // 送出資料時,URL就可以看到使用者輸入的參數。兩個參數中間有個 & 符號，這是網址傳値的時候會採用的符號，每個參數透過 & 連結在一起。
        $op = $_GET["op"];                           // 後端php的$_GET['']會分別把每個値取得，這就是一次 get 多個値[陣列]方法，其實跟 get 單一個値是一樣的觀念。
        switch ($op){
            case "1": $r = $x + $y; break;
            case "2": $r = $x - $y; break;
            case "3": $r = $x * $y; break;
            case "4": $r = $x / $y; break;
        }  
    }    
?>


<form action='shan06.php'>
    <input name="x" value="<?php echo "$x"; ?>"/>
    <select name="op">
        <option value="1" <?php echo ($op=='1' ?"selected":"");?>>+</option>
        <option value="2" <?php echo ($op=='2' ?"selected":"");?>>-</option>
        <option value="3" <?php echo ($op=='3' ?"selected":"");?>>*</option>
        <option value="4" <?php echo ($op=='4' ?"selected":"");?>>/</option>

    </select>
    </select>
    <input name="y" value="<?php echo "$y"; ?>"/>
    <input type="submit" value="="/>
    <span><?php echo $r; ?></span>
</form>