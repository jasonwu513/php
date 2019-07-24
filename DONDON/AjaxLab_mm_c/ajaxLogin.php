<?php
ob_start();
session_start();

try{
  require_once("connectBooks.php");
  $pdo = new PDO( $dsn, $user, $password, $options); 

  if( $member->rowCount()==0){ //查無此人
	  echo "error";
  }else{ //登入成功
    //自資料庫中取回資料

	  //寫入session

    //送出登入者的姓名資料
  }
}catch(PDOException $e){
  echo $e->getMessage();
}
?>