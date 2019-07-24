<?php
ob_start();
session_start();
try {
	require_once("connectBooks.php");
	$sql = "select * from member where memId=:memId and memPsw=:memPsw";
	$member = $pdo->prepare( $sql );
	$member->bindValue(":memId", $_REQUEST["memId"]);
	$member->bindValue(":memPsw", $_REQUEST["memPsw"]);
	$member->execute();
	if( $member->rowCount() != 0){ //登入成功
	  $memRow = $member->fetch(PDO::FETCH_ASSOC);
	  echo $memRow["memName"];
	  $_SESSION["memNo"] = $memRow["no"];
	  $_SESSION["memId"] = $memRow["memId"];
	  $_SESSION["memName"] = $memRow["memName"];
	  $_SESSION["email"] = $memRow["email"];
	}else{
	  echo "error";	
	}

}catch(PDOException $ex){
  	echo "錯誤行號 : ", $ex->getLine(), "<br>";
 	echo "錯誤訊息 : ", $ex->getMessage(), "<br>";
}
?>