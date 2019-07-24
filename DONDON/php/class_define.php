<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>class define</title>
</head>
<body>
<?php 
class Person{
	public $name;
	private $birthday;

	public function smile( $sound ="笑一個" ){
		echo $this->name , " {$sound}~~ <br>";
	}
}

$p1 = new Person();
$p1->name = "Adam";
$p1->classId = "BD102";
$p1->smile("Ha");
echo "classId: ", $p1->classId ,"<br>";

$p2 = new Person();
$p2->name = "Alice";
$p2->smile();
?>

</body>
</html>