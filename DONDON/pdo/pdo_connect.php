<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>pdo connect</title>
</head>
<body>
<?php


try{
	$dsn="mysql:localhost;port=3306;dbname=test;charset=utf8";
	$user="root";
	$password="513nn513";
	$pdo = new PDO($dsn, $user, $password);
	echo "連線成功<br>";

}catch(PDOException $ex){
  echo "錯誤行號 : ", $ex->getLine(), "<br>";
  echo "錯誤訊息 : ", $ex->getMessage(), "<br>";
}
?>
</body>
</html>
