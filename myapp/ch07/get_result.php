<?php
$name = $_GET["name"];
$id = $_GET["id"];
$email = $_GET["email"];
?>

<html>
<head>
    <title>GET Result</title>
</head>
<body>
<h1>GET Example</h1>
<?php echo $name. "님의 ID는 ".$id.", email 주소는 ".$email."입니다.";?>
</body>
</html>
