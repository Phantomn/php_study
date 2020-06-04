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
$sql = "CREATE DATABASE project";

if(mysqli_query($conn, $sql)){
    echo "데이터베이스 생성 완료";
}else{
    echo "데이터베이스를 생성하는 중 오류가 발생 했습니다." . mysqli_error($conn);
}

mysqli_close($conn);
?>