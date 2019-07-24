<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
</head>
<body>
<?php 
$arr = array( array(1,2,3,4) , array(11,12,13,14), array(21,22,23,24), array(31,32,33,34));
echo "<table border='1' align='center' cellspacing='0'>";
$rows = count($arr);
for( $i=0; $i<$rows; $i++){
	echo "<tr>";
	$total = 0;
	$cols = count($arr[$i]);
	for( $j=0; $j<$cols; $j++){
		echo "<td> " , $arr[$i][$j] , "</td>";
		$total += $arr[$i][$j];
	}
	echo "<td> " , $total/4 , "</td>";
	echo "</tr>";
}
echo "</table>";
?>


</body>
</html>