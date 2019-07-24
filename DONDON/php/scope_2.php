<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>scope</title>
</head>
<body>
<?php 

//$amount:10000
function getAmount(){
  //....
  //....
  $GLOBALS["amount"] = 100000;  
}

function showAmount(){ //amount??
  echo "營業額: ", $GLOBALS["amount"],"<br>";
}

getAmount();
showAmount();

?>
<h2>static variable</h2>
<?php 
function myStatic(){
  static $i=0;     // i :3
  $i +=1;
  return $i;
}
echo "呼叫my函數第1次, i : " , myStatic(), "<br>";
echo "呼叫my函數第2次, i : " , myStatic(), "<br>";
echo "呼叫my函數第3次, i : " , myStatic(), "<br>";
echo "呼叫my函數第4次, i : " , myStatic(), "<br>";
?>
</body>
</html>