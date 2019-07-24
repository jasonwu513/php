<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>pdo query</title>
</head>
<body>
<table border='1' align='center' cellspacing='0' width="500" style="border-collapse:collapse">
	<tr style="background-color:#ccf">
    <td>交換對象</td>
    <td>乙給甲的評分</td>
    <td>star</td>
    </tr>
<?php
try{
	$dsn="mysql:localhost;port=3306;dbname=books;charset=utf8";
	$user="root";
	$password="513513";
	$options=array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO($dsn, $user, $password);

	$sql="select * from products";
	$products = $pdo->query( $sql );
    $products->bindColumn("psn",$psn);
    $products->bindColumn("pname",$pname);
    $products->bindColumn("price",$price);
    while($products->fetch(PDO::FETCH_ASSOC)){
?>
    	<tr>
	    <td><?php echo $psn; ?></td>
	    <td><?php echo $pname; ?></td>
	    <td><?php echo $price; ?></td>
	    </tr>
<?php
    }

}catch(PDOException $ex){
  echo "錯誤行號 : ", $ex->getLine(), "<br>";
  echo "錯誤訊息 : ", $ex->getMessage(), "<br>";
}
?>
</table>
</body>
</html>
