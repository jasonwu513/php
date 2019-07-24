<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>董董購物網</title>
<style type="text/css">
a {text-decoration: none}	
a:hover {text-decoration:underline;}
</style>
</head>
<body>
<table border='1' align='center' cellspacing='0'  style="border-collapse:collapse">
	<tr style="background-color:#ccf">
    <td>書號</td>
    <td>書名</td>
    <td>價格</td>
    <td>作者</td>
    <td>圖檔</td>
    <td>購買</td>
    </tr>  
<?php 
try{
    require_once("connectBooks.php");
	$sql="select * from products";
	$products = $pdo->query( $sql );

    while($prodRow = $products->fetch(PDO::FETCH_ASSOC)){
?>    	
    	<tr>
	    <td><?php echo $prodRow["psn"]; ?></td>
	    <td><a href="prodQuery.php?psn=<?php echo $prodRow["psn"]; ?>"><?php echo $prodRow["pname"]; ?></a></td>
	    <td><?php echo $prodRow["price"]; ?></td>
        <td><?php echo $prodRow["author"]; ?></td>
        <td><?php echo $prodRow["image"];?></td>
	    </tr> 
        </form> 
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