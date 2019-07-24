<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>class define</title>
</head>
<body>
<?php 
class Pet{
	public $name;
	private $weight=200;

	public function smile(){
		echo $this->name , "笑一個~~ <br>";
	}

	public function eat( $amount){
		$this->weight += $amount * 0.3 ;
	}

	public function getWeight(){
		return $this->weight ;
	}
}

$p1 = new Pet();
$p1->name = "Happy";
$p2 = new Pet();
$p2->name = "Kitty";

$p1->eat(20);//================
echo "p1 重量 : " , $p1->getWeight() , "<br>";

echo "p2 重量 : " , $p2->getWeight() , "<br>";
?>

</body>
</html>