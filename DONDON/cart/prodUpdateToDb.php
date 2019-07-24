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
  $sql = "update products set pname=:pname, price=:price, 
          author=:author, pages=:pages, image=:image
          where psn=:psn";
  $products = $pdo->prepare( $sql );
  $products->bindValue(":psn" , $_REQUEST["psn"]);
  $products->bindValue(":pname" , $_REQUEST["pname"]);
  $products->bindValue(":price" , $_REQUEST["price"]);
  $products->bindValue(":author" , $_REQUEST["author"]);
  $products->bindValue(":pages" , $_REQUEST["pages"]);
  $products->bindValue(":image" , $_REQUEST["image"]);
  $products->execute();
  echo "異動成功<br>";
} catch (PDOException $e) {
  echo "錯誤行號 : ", $e->getLine(), "<br>";
  echo "錯誤訊息 : ", $e->getMessage(), "<br>";		
}
?>    
</body>
</html>