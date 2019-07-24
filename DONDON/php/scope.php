<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>scope</title>
</head>
<body>
<?php 
//$amount : 0;
$amount = 0;
function getAmount(){
  global $amount;
  //....
  //....
  $amount = 100000;  
}

function showAmount(){ //amount??
  global $amount;	
  echo "營業額: ",$amount,"<br>";
}

getAmount();
showAmount();



?>

</body>
</html>