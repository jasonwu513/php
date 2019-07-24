<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>user-defined function </title>
<style type="text/css">
	h2 {color:deepPink;}
</style>
</head>
<body>
<h2>參數預設值</h2>
<?php
function printMark($classId="前端工程師養成班"){
	echo "<p>";
	echo "******<br>";
	echo "******<br>";
	echo "******<br>";
	echo "******<br>";
	echo "******<br>";
	echo "****** $classId</p>";
}

printMark("BD101");
printMark("AD105");
printMark();
?>

<h2>無參數, 無傳回值</h2>
<?php 
function sayHello(){
	echo "早安，您好~~<br>";
	return;
}

sayHello();
?>  

<h2>有參數, 無傳回值</h2>
<?php 
function sayHelloToSomeone( $name ){
	echo "早安，{$name}您好~~<br>";
}

sayHelloToSomeone("慕晨");
?> 

<h2>有參數, 有傳回值</h2>
<?php 
function sum2num( $a, $b){
  $total = $a + $b;
  return $total;
}

$aa = sum2num(1000,2000);
echo $aa ; 
?>  

<h2>有參數, 有傳回值===</h2>
<?php 
function sumMany( $array ){
  $total = 0; //區域變數 : $array , $total , $len , $i
  if( is_array($array) === true ){
	  $len = count( $array);    
	  for( $i=0; $i<$len; $i++){  
	  	$total += $array[$i];
	  }  	
  }else{
  	 return $array;
  }	

  return $total;
}

$arr = array(10,20,30);  //$arr : 10,20,30
echo "10+20+30 = " , sumMany( $arr ) , "<br>";


$arr = array(10,20,30,40);  //$arr : 10,20,30
echo "10+20+30+40 = " , sumMany( $arr ) , "<br>";

$arr = 10;  //$arr : 10,20,30
echo "10= " , sumMany( $arr ) , "<br>";
?>   

<h2>byValue_byRef</h2>
<?php 
function sum_byValue_byRef( $a, &$b){
  $total = $a + $b;
  $a = $a + 100;
  $b = $b + 100;
  return $total;
}

$x = 10;
$y = 20;

echo "$x + $y = " , sum_byValue_byRef($x, $y) , "<br>" ;
echo "x : $x <br>"; 
echo "y : $y <br>";
?>  

<h2>陣列: 以call by reference的方式來傳</h2>
<?php
function adjustSalary_byRef(&$dataArr,$amt){
	 $len = count($dataArr);
     for($i=0; $i<$len; $i++){
     	$dataArr[$i] += $amt;
     }
}
$salaryArr = array(10000,20000,30000,40000);
adjustSalary_byRef( $salaryArr, 2000);

print_r( $salaryArr);
?>

<h2>陣列: 以call by value的方式來傳</h2>
<?php
function adjustSalary($dataArr,$amt){
	 $len = count($dataArr);
     for($i=0; $i<$len; $i++){
     	$dataArr[$i] += $amt;
     }
     return $dataArr;
}
$salaryArr = array(10000,20000,30000,40000);
$salaryArr = adjustSalary( $salaryArr, 2000);

print_r( $salaryArr);
?>



</body>
</html>