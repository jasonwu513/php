<?php
try{
  require_once("connectBooks.php");
  $sql = "select * from member where memId=:memId";
  $member = $pdo->prepare($sql); 
  $member->bindValue(":memId", $_REQUEST["memId"]);
  $member->execute();

  //如果找得資料，取回資料，送出xml文件
  if( $member->rowCount() > 0){
  	$memRow = $member->fetch(PDO::FETCH_ASSOC);
  	$str = '<?xml version="1.0" ?>';
  	$str .= "<member>";
  	$str .= "<帳號>" . $memRow["memId"] . "</帳號>";  	
  	$str .= "<姓名>" . $memRow["memName"] . "</姓名>";
  	$str .= "<生日>" . $memRow["birthday"] . "</生日>";
  	$str .= "<email>" . $memRow["email"] . "</email>";
  	$str .= "</member>";
  	header("Content-type:text/xml");
  	echo $str;
  }
}catch(PDOException $e){
  echo $e->getMessage();
}
?>