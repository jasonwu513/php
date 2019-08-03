<?php 

class yellowHuman{
    static $kind = "yellow Human";
    public $gender = "boy";
    protected $skinColor = "yellow";
    private $age =0 ;

    private function showSkinColor(){
        echo $this->skinColor;
    }
    function giveAge($givedAge){
        $this->age = $givedAge;
    }

    function showAge(){
        echo $this->age;
    }

    function undressShowSkin(){
        $this->showSkinColor();
        $this->showAge();
    }

}
// static 不用創建物件即可使用
echo yellowHuman::$kind . "<br>";

// public 須建立物件, 類別外也可以使用
$jack = new yellowHuman();
$jack->giveAge(15); // 因為$age 為 private 無法使用 $jack->age = 15 賦值ㄤ
echo $jack->gender. "<br>";

// protected 須建立物件,此類別和子類別可使用,類別外不可以使用
//echo $jack->skinColor. "<br>";  // show error
//$jack->showSkinColor(); // show error if showSkinColor function is private;
echo $jack->undressShowSkin(). "<br>"  ; 

// private 須建立物件,此類別可使用子類別不可用,類別外不可以使用
//$jack->age = 22;
//echo $jack->age. "<br>";
$jack->showAge();


echo "<hr>";


class YellowMan extends yellowHuman 
{
    private $age =1 ;

    function undressShowSkin2(){
        $this->showSkinColor();
        $this->showAge();
        echo "<br>";
    }

    function showskin2(){
        echo $this->skinColor;
        echo "<br>";
    }
    function showage2(){
        echo $this->age;
        echo "<br>";
    }
}
$jason = new YellowMan();
// $jason->giveAge(22);


// private 方法 & function 無法繼承 , 如果 繼承的public function 有用到 private 屬性or 方法 會回到父類尋找

// $jason->undressShowSkin2(); // error
// $jason->undressShowSkin(); // OK
$jason->showskin2();
$jason->showage2();







?>