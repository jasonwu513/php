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
}

class Woman extends Person{
    public function smile(){
    	echo $this->name , " 微微一笑  <br>";
    }
}

function showHappiness( $persons ){
  $len = count( $persons);
  for( $i=0; $i<$len ; $i++){
  	$persons[$i]->smile();
  }
}

$p[0] = new Person();
$p[0]->name = "Henry";

$p[1] = new Man();
$p[1]->name = "Adam";

$p[2] = new Woman();
$p[2]->name = "Marry";

showHappiness($p);
?>

</body>
</html>