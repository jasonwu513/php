<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>class define</title>
</head>
<body>
<?php 
class Person{
	const STEP="生老病死";
	public $name;
	private $birthday;

	// public function Person($data){
	// 	$this->name = $data;
	// }

	public function __construct($data){
		$this->name = $data;
	}

	public function smile(){
		echo $this->name , "笑一個~~ <br>";
	}
}

$p1 = new Person("Adam");  //$p1 = new Person;  __construct("Adam");
$p1->smile();


$p2 = new Person("Alice");
$p2->smile();


echo "<hr>階段: " , Person::STEP;

?>

</body>
</html>