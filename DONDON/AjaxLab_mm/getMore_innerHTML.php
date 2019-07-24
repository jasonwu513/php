<?php
try{
  require_once("connectBooks.php");
  $sql = "select * from member where memId=:memId";
  $member = $pdo->prepare( $sql );
  $member->bindValue(":memId", $_REQUEST["memId"]);
  $member->execute();

  if( $member->rowCount() == 0 ){ //找不到
    //傳回空的字串
    echo "";
  }else{ //找得到
    //取回一筆資料
    
    //傳回html結構

  } 
  
}catch(PDOException $e){
  echo $e->getMessage();
}
?>