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
$sql = "DELETE FROM movie_director where name='홍길동'";

if(mysqli_query($conn, $sql)){
    echo "새 레코드가 성공적으로 삭제되었습니다.";
}else{
    echo "삭제 실패: " . mysqli_error($conn);
}

mysqli_close($conn);
?>