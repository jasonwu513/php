<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>pdo query</title>
</head>
<body>
<table border='1' align='center' cellspacing='0' width="500" style="border-collapse:collapse">
	<tr style="background-color:#ccf">
    <td>書號</td>
    <td>書名</td>
    <td>價格</td>
    </tr>  
<?php 
try{
	$dsn="mysql:localhost;port=3306;dbname=books;charset=utf8";
	$user="root";
	$password="root";
	$options=array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO($dsn, $user, $password);

	$sql="select * from products";
	$products = $pdo->query( $sql );

    while($prodRow = $products->fetchObject()){
?>    	
    	<tr>
	    <td><?php echo $prodRow->psn; ?></td>
	    <td><?php echo $prodRow->pname; ?></td>
	    <td><?php echo $prodRow->price; ?></td>
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