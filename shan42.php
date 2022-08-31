<form action="shan43.php" method="post" enctype="multipart/form-data">
    <!-- 涉及檔案傳送,一定要用post封包傳送,並且enctype="multipart/form-data" -->
    <input type="text" name="filename" /><br/>
    <input type="file" name="upload" /><br/>
    <input type="submit" value="Upload" />
</form>