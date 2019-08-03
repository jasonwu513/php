<?php 
$numbers=range(1,9);
$cars=['benz','toyota','bmw'];
// echo $numbers[1];
// print_r($numbers);
foreach ($cars as $car)
    echo $car."<br>";
// echo "<br>";
sort($cars);

echo "<br>";
echo "sort";
echo "<br>";
foreach ($cars as $car)
    echo $car."<br>";
// print_r($rise);
echo "<br>";
// print_r(rsort($cars));
// echo "<br>";

rsort($cars);
echo "<br>";
echo "rsort";
echo "<br>";
foreach ($cars as $car)
    echo $car."<br>";
// print_r($rise);
echo "<br>";


?>

<?php 
$people=array('name','sex','nation','birth');
foreach ($people as $mychrs)
    echo $mychrs." ";
sort($people);
echo "<br />---排序后---<br />";
foreach ($people as $mychrs)
    echo $mychrs." ";
?>




<?php
echo "<br>";
echo "ksort  sort by  key";
echo "<br>";
$age=array("Will"=>"20","Steve"=>"56","mark"=>"31");
ksort($age);
foreach($age as $person){
    echo $person."<br>";
}

?>