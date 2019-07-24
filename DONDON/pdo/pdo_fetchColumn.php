<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>pdo query</title>
</head>
<body>
 
<?php 
try{
	$dsn="mysql:localhost;port=3306;dbname=books;charset=utf8";
	$user="root";
	$password="root";
	$options=array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO($dsn, $user, $password);

	$sql="select * from products";
	$products = $pdo->query( $sql );

    while($data = $products->fetchColumn(3)){
   	  echo $data,"<br>";
    }

}catch(PDOException $ex){
  echo "錯誤行號 : ", $ex->getLine(), "<br>";
  echo "錯誤訊息 : ", $ex->getMessage(), "<br>";
}
?>  
</table>  
</body>
</html>