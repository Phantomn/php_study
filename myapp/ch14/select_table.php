<?php
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "1234";
$mysql_db = "mydb";

$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if($conn->connect_error){
    die("연결 실패: ". $conn->connect_error);
}
$conn->query("SET NAMES 'utf8'");
$conn->query("SET CHARACTER SET utf8");
$conn->query("SET SESSION collation_connection = 'utf8_general_ci'");
$sql = "SELECT * from movie_director";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
        echo "id: " . $row['id']. " - name: ". $row['name']. " - birthday: " . $row['birthday']. "<br/>";
    }
}else{
    echo "저장된 데이터가 없습니다.";
}

mysqli_close($conn);
?>