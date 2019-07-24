<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
<?php
$psn = $_REQUEST["psn"];

try {
	require_once("connectBooks.php");

	$sql = "select * from products where psn=$psn";
	$products = $pdo->query( $sql );
	
	if( $products->rowCount()==0){
		echo "<center>查無此書籍資料</center>";
	}else{
		$prodRow = $products->fetch(PDO::FETCH_ASSOC);
?>
<table border="1" cellspacing="0" align="center">
    <tr><td>書號</td><td><?php echo $prodRow["psn"];?></td></tr>
	<tr><td>書名</td><td><?php echo $prodRow["pname"];?></td></tr>
	<tr><td>價格</td><td><?php echo $prodRow["price"];?></td></tr>
	<tr><td>作者</td><td><?php echo $prodRow["author"];?></td></tr>
	<tr><td>頁數</td><td><?php echo $prodRow["pages"];?></td></tr>
	<tr><td>圖檔</td><td><?php echo $prodRow["image"];?></td></tr>
</table>  
<?php
	} //if...else 
} catch (PDOException $e) {
  echo "錯誤行號 : ", $e->getLine(), "<br>";
  echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
}

?>
  
</body>
</html>