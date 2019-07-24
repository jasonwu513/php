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

	public function smile(){
		echo $this->name , " 笑一個~~ <br>";
	}
}

class Man extends Person{
    public function smile(){
    	echo $this->name , " Ha! Ha!! Ha!!!  <br>";
    }

    public function fight(){
    	echo $this->name , " 衝! 衝!! 衝!!!  <br>";
    }
}

$p1 = new Man();
$p1->name = "Adam";
$p1->smile();
$p1->fight();


$p2 = new Person();
$p2->name = "Henry";
$p2->smile();
// $p2->fight();
?>

</body>
</html>