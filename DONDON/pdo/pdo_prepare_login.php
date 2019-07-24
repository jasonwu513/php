<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>prepare</title>
</head>
<body>
<?php 
try {
  $memId = $_REQUEST["memId"];
  $memPsw = $_REQUEST["memPsw"];
  require_once("connectBooks.php");
  //======
  // $sql="select * from member where memId=:memId and memPsw=:memPsw";
  // $member = $pdo->prepare( $sql );
  // $member->bindValue(":memId" , $memId);
  // $member->bindValue(":memPsw" , $memPsw);
  // $member->execute();
  //======

  //======
  $sql="select * from member where memId=? and memPsw=?";
  $member = $pdo->prepare( $sql );
  $member->bindValue(1 ,  $memId);  //bindValue可以bind值或變數
  $member->bindValue(2 , $memPsw);
  // $member->bindValue(1 ,  'Sara');
  // $member->bindValue(2 , '111');
  $member->execute();
  //======

  if( $member->rowCount() != 0 ){
	$memRow=$member->fetch(PDO::FETCH_ASSOC);
	echo $memRow["memName"],"您好<br>";
	echo "<a href='#'>進入會員專區</a><br>";
	echo "<a href='#'>進入商品區</a>";
  }else{
    echo "<div>帳密錯誤，請<a href='25Login.htm'>重新登入</a></div>";
  }
} catch (PDOException $e) {
  echo "錯誤行號 : ", $e->getLine(), "<br>";
  echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
}
?>    
</body>
</html>