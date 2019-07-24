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
<?php 
if( isset($_SESSION["memId"]) == false){  //尚未登入
  // echo "尚未登入,請<a href='cart_login.html'>登入</a>";
  echo "<script>window.alert('尚未登入,請登入');//location.href='cart_login.html';</script>";
  $_SESSION["where"] = $_SERVER["PHP_SELF"];
}else{ //已登入，將訂單資料寫入資料庫
    try {
      require_once("connectBooks.php");	
      //啓動交易管理
      $pdo->beginTransaction();
      //寫入主檔
      $sql = "insert into bookorder values ( null , :orderMemNo , now() , :email , '0' )";
      $bookOrder = $pdo->prepare( $sql );	
      $bookOrder->bindValue(":orderMemNo", $_SESSION["memNo"]);
      $bookOrder->bindValue(":email", $_SESSION["email"]);
      $bookOrder->execute();
      $orderNo = $pdo->lastInsertId();
      //寫入明細
      $sql = "insert into orderitems values( $orderNo , :productNo , :quantity)";
      $orderItems = $pdo->prepare( $sql );
      foreach($_SESSION["products"] as $psn=>$prodRow){
      	$orderItems->bindValue(":productNo", $psn);
      	$orderItems->bindValue(":quantity", $prodRow["quantity"]);
      	$orderItems->execute();
      }
      $pdo->commit();
      unset($_SESSION["products"]);
      echo "下訂成功，您的訂單編號為 $orderNo <br>";
    } catch (PDOException $e) {
      $pdo->rollBack();
      echo "錯誤行號 : ", $e->getLine(), "<br>";
      echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
    }//end of try...catch
}// end of if
?>  
<br> 
 <center><a href="cart_prodList.php">繼續瀏覽</a></center>
</body>
</html>