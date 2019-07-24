<?php 
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
<table border='1' align='center' cellspacing='0' width="800" style="border-collapse:collapse">
	<tr style="background-color:#ccf">
    <td>書號</td>
    <td>書名</td>
    <td>價格</td>
    <td>數量</td>
    <td>異動</td>
    </tr> 
<?php
if( isset( $_SESSION["products"]) == true){//有購物資料
    $total = 0;
    foreach( $_SESSION["products"] as $psn=>$prodRow){
        $total += $prodRow["price"] * $prodRow["quantity"];
?>
<form action="cart_update.php">
    <input type="hidden" name="psn" value="<?php echo $psn; ?>">
    <tr>
    <td><?php echo $psn; ?></td>
    <td><?php echo $prodRow["pname"]; ?></td>
    <td><?php echo $prodRow["price"]; ?></td>
    <td><input type="text" name="quantity" value="<?php echo $prodRow["quantity"]; ?>"></td>
    <td><input type="submit" name="btnUpdate" value="修改">
        <input type="submit" name="btnDelete" value="刪除"></td>
	</tr>
</form>

<?php
   }//foreach
    echo "<tr><td colspan='5' align='center'>總計 : <span style='color:deepPink'>" , number_format($total), " 元</span></td></tr>";
}else{//没有購物資料
    echo "<tr><td colspan='5' align='center'>尚無購物資料</td></tr>";
}    
?>    
</table>
<br>
<center><a href="cart_prodList.php">繼續瀏覽</a></center>    

<br>
<center><a href="cart_toDb.php">確定下單</a></center>   	    
</body>
</html>