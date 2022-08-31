<meta charset="UTF-8">
<?php
    include('sql.php');

    if(isset($_GET['deleteid'])){
        $deleteid = $_GET['deleteid'];
        $sql = "DELETE FROM member WHERE id = {$deleteid} ";
        $mysqli->query($sql);
    }

    $sql = "SELECT * FROM member";
    $result = $mysqli->query($sql);

?>
<h1>Shan Big Company</h1>
<hr/>
<a href="shan54.php">Add New Member</a><br/>
<table border="1" width="100%">
    <tr>
        <th>Account</th>
        <th>Realname</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
    <?php
        while($member = $result->fetch_object()){
            echo '<tr>';
            echo "<td>{$member->account}</td>";
            echo "<td>{$member->realname}</td>"; 
            echo "<td><a href='?deleteid={$member->id}' " .      //用.字串相加    整理code
            "onclick = 'return deleteconfirm(\"{$member->realname}\");'>Del</td>";
            echo "<td><a href='shan55.php?editid={$member->id}'>Edit</td>"; 
            echo '</tr>';
        }
    ?>
</table>

<script>
    function deleteconfirm(name){
        return confirm('Delete'+ name + "?");
    }
</script>