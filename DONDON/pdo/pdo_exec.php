<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>pdo exec</title>
</head>
<body>
<?php
try{
	$dsn="mysql:localhost;port=3306;dbname=books;charset=utf8";
	$user="root";
	$password="513513";
	$options=array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);

	$pdo = new PDO($dsn, $user, $password,  $options);
	echo "連線成功<br>";

	$sql="update products set price=price + 100";
	$affectedRow = $pdo->exec( $sql );
    echo "異動了{$affectedRow}筆資料<br>";
}catch(PDOException $ex){
  echo "錯誤行號 : ", $ex->getLine(), "<br>";
  echo "錯誤訊息 : ", $ex->getMessage(), "<br>";
}
?>
</body>
</html>
