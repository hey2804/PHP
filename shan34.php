<!-- 檔案通常分兩類:文字資料,非文字資料。文字資料有換列特性,非文字資料通常為二進制檔案(bin)。 -->

<?php
    date_default_timezone_set('Asia/Taipei');

    if (!is_dir('dir2')) {   //先判斷dir2資料夾是否存在
        mkdir('dir2');      //創造dir2資料夾
    }

    if (!is_file('dir2/file1')) {
        touch('dir2/file1');
    }

    $dir = "dir2";
?>
<table border="1" width="100%">
    <tr>
        <th>Filename</th>
        <th>Dir/File</th>
        <th>Size</th>
        <th>mTime</th>
    </tr>
    <?php
        $dir2 = opendir('dir2');
        while ($filename = readdir($dir2)) {
            echo '<tr>';
            echo "<td>{$filename}</td>";

            if(is_dir("{$dir}/{$filename}")){
                echo '<td>Directory</td>';
            }
            if(is_file("{$dir}/{$filename}")){
                echo '<td>File</td>';
            }

            $size = filesize("{$dir}/{$filename}");
            echo "<td>{$size} bytes</td>";

            $mtime = date('Y-m-d H:i:s', filemtime("{$dir}/{$filename}")); 
            echo "<td>{$mtime}</td>";

            echo '</tr>';
        }
    ?>
</table>