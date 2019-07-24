<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
<h2>byValue_byRef</h2>
<?php 
function sum( $a, &$b){
  $total = $a + $b;
  $a = $a + 100;
  $b = $b + 100;
  return $total;
}

$x = 10;
$y = 20;

echo "$x + $y = " , sum($x, $y) , "<br>" ;
echo "x : $x <br>"; //10
echo "y : $y <br>"; //120 

?>   
<h2>交換資料</h2>   
<?php 
function swap(&$x , &$y){
	$temp = $x;
	$x = $y;
	$y = $temp;	
	return;
}


$x = 10;
$y = 20;

swap( $x , $y);

echo "x : $x <br>"; 
echo "y : $y <br>";
?>
</body>
</html>