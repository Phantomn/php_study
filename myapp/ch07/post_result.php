<?php
$name = $_POST["name"];
$id = $_POST["id"];
$email = $_POST["email"];
?>

<html>
<head>
    <title>Post Result</title>
</head>
<body>
<h1>Post Example</h1>
    <?php echo $name. "님의 ID는 ".$id.", email 주소는 ".$email."입니다.";?>
</body>
</html>
