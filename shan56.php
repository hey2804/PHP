<!-- 抓資料下來   放資料上去 -->
<?php
    include("sql.php");

    $json = file_get_contents("https://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx");
    // echo $json;
    // $data = json_decode($json,true);     //與下排false相比較看看,兩者有不同的利用方式
    $data = json_decode($json,false);
    
    $sql = "INSERT INTO food (`name`,addr,tel,city,town,pic,lat,lng)" . 
        " VALUES (?,?,?,?,?,?,?,?)";
    $stmt = $mysqli->prepare($sql);

    foreach($data as $row ){
        // echo "{$row->Name}:{$row->Address}:{$row->Tel}<br/>";
        $stmt->bind_param('ssssssss', 
            $row->Name, $row->Address, $row->Tel,$row->City,
            $row->Town, $row->PicURL, $row->Latitude,$row->Longitude);
        $stmt->execute();
    }

?>