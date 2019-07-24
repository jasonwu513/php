<?php
try{
  require_once("connectBooks.php");
  $sql = "select memName from member where memId=:memId";
  $pdo = new PDO( $dsn, $user, $password, $options); 
  $member = $pdo->prepare( $sql );
  $member->bindValue(":memId", $_REQUEST["memId"]);
  $member->execute();
  if( $member->rowCount() == 0 ){
    echo "此帳號可使用"; //可用
  }else{
    echo "此帳號已有人使用";//不可用 
  }	
}catch(PDOException $e){
  echo $e->getMessage();
}
?>