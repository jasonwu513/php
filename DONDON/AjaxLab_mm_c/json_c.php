<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
<h2>json字串轉php物件</h2>
<?php 
$jsonStr = '{"empno":"7111","ename":"Ann","salary":33000,"phone":["03-4257387","03-168168","0933-168168"]}';
$emp = json_decode( $jsonStr);
echo "代號 : " ,$emp->empno,"<br>";
echo "姓名 : " ,$emp->ename,"<br>";
echo "電話 : " ,$emp->phone[0],"<br>";
?>   

<h2>php陣列轉json字串</h2>
<?php 
$arr = array("empno"=>"7111","ename"=>"Ann","salary"=>33000,"phone"=>array("03-4257387","03-168168","0933-168168"));
$jsonStr = json_encode( $arr);

echo "json 字串 : " ,$jsonStr,"<br>";
?>  

<h2>php物件轉json字串</h2>
<?php 
class Employee{
	public $empno;
	public $ename;
}

$emp = new Employee();
$emp->empno = "7777";
$emp->ename = "King";

$jsonStr = json_encode( $emp);

echo "json 字串 : " ,$jsonStr,"<br>";  //{"empno":"7777","ename":"King"}
?>   
</body>
</html>