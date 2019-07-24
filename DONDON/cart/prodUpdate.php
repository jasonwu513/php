<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
<?php
try {
	require_once("connectBooks.php");

	$sql = "select * from products where psn=:psn";
	$products = $pdo->prepare( $sql );
	$products->bindValue(":psn", $_REQUEST["psn"]);
	$products->execute();
	if( $products->rowCount()==0){
		echo "<center>查無此書籍資料</center>";
	}else{
		$prodRow = $products->fetch(PDO::FETCH_ASSOC);
?>
<form action="prodUpdateToDb.php">
<table border="1" cellspacing="0" align="center">
	<input type="hidden" name="psn" value="<?php echo $prodRow["psn"];?>">
    <tr><td>書號</td><td><?php echo $prodRow["psn"];?></td></tr>
	<tr><td>書名</td><td><input type="text" name="pname" value="<?php echo $prodRow["pname"];?>"></td></tr>
	<tr><td>價格</td><td><input type="text" name="price" value="<?php echo $prodRow["price"];?>"></td></tr>
	<tr><td>作者</td><td><input type="text" name="author" value="<?php echo $prodRow["author"];?>"></td></tr>
	<tr><td>頁數</td><td><input type="text" name="pages" value="<?php echo $prodRow["pages"];?>"></td></tr>
	<tr><td>圖檔</td><td><input type="text" name="image" value="<?php echo $prodRow["image"];?>"></td></tr>
	<tr><td colspan="2" align="center"><input type="submit" value="確定修改"></td></tr>
</table>
</form>  
<?php
	} //if...else 
} catch (PDOException $e) {
  echo "錯誤行號 : ", $e->getLine(), "<br>";
  echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
}

?>
  
</body>
</html>