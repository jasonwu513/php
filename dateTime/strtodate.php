<?php 
echo $yesterday = strtotime("-1 day");
echo $today = strtotime("now");  
// 如果用 today 時間不會走
echo "<br>";
echo $yesterday - $today;
echo "<br>";

echo date('Y-m-d H:i:s', strtotime("-1 day",$today))


?>