<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>cookie</title>
</head>
<body>
<?php
try{
	require_once("connectBooks.php");
	$pdo = new PDO($dsn,$user,$password,$options);
	$sql = "select * from member where memId = :memId and memPsw = :memPsw";
	$member = $pdo->prepare($sql);
	$member -> bindValue(":memId",$_REQUEST["memId"]);
	$member -> bindValue(":memPsw",$_REQUEST["memPsw"]);
	$member -> execute();

	if( $member->rowCount() !=0 ){
	    $memRow = $member->fetch(PDO::FETCH_ASSOC);
		echo $memRow["memName"] , "您好<br>";
		//登入成功，將登入者資訊寫入cookie

	        // ???
	        // ???
	        // ???

		echo "<a href='cookieMember.php'>會員專區</a> ";
	}else{
		echo "查無此帳密，請重新登入";
	}
}catch(PDOException $ex){
	echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
	echo "行號：",$ex->getLine(),"<br>";
}
?>	
</body>
</html>