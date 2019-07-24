<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>build in</title>
</head>
<body>
<h2>time(), date()</h2>
<?php 
$now = time();
echo "現在時刻 : ", $now ,"<br>";
echo "現在時刻 : ", date("Y-m-d H:i:s" , $now) ,"<br>";

$birth_time = mktime(11,30,10,3,21,1960);
echo "生日 : ", date("Y-m-d H:i:s" , $birth_time) ,"<br>";

echo "rand(1,42) : ", rand(1,42) , "<br>";
echo "rand() : ", rand() , "<br>";

?> 

<h2>substr() , strlen()</h2>
<?php 
$birthday = "2017-04-18";
$mm = substr( $birthday , 5 , 2);
echo "出生月 : ", $mm , "<br>";

$str = "QQDDEE";
echo "strlen('QQDDEE') : ", strlen($str)  , "<br>";
?>   

<h2>ceil() , floor()</h2>
<?php 
echo " ceil(1.6) : ", ceil(1.6) , "<br>"; //2
echo " ceil(2) : ", ceil(2) , "<br>";     //2
echo " floor(1.6) : ", floor(1.6) , "<br>"; //1
echo " floor(2) : ", floor(2) , "<br>"; //2
?>  
</body>
</html>