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
<table border='1' align='center' cellspacing='0' width="500" style="border-collapse:collapse">
	<tr style="background-color:#ccf">
    <td>書號</td>
    <td>書名</td>
    <td>價格</td>
    <td>數量</td>
    </tr>  
    <tr>
    <td>???</td>
    <td></td>
    <td></td>
    <td></td>
	</tr>
</table>	

<br>
<center><a href="cart_prodList.php">繼續瀏覽</a></center>    

<br>
<center><a href="cart_toDb.php">確定下單</a></center>   
</body>
</html>