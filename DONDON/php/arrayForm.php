<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
<?php 
echo "帳號: ", $_REQUEST["memId"],"<br>";

echo "<p>英語文能力: <br>";

if( isset($_REQUEST["ability"]) === true ){
	foreach( $_REQUEST["ability"] as $i=>$data){
		echo  $data,"<br>"; 
	}
}else{
	echo "不明~<br>";
}


echo "<p>專長: <br>";

if( isset($_REQUEST["specialty"]) === true ){
	foreach( $_REQUEST["specialty"] as $i=>$data){
		echo  $data,"<br>"; 
	}
}else{
	echo "不明~<br>";
}
?>    
</body>
</html>