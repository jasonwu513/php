








<?php 
class Human{
    public  $height = "100";
    private  $age = "100";
    protected  $weight = "100";
    static  $kind = "Human being ";
    public function jump(){
    echo "jump";
    }
    function HumanInfo(){
        // $this 后面部用在加$ 字號了, 另外 如果寫在字串中要連著寫.
    echo " height  $this->height <br> ";
    echo "age: " .  $this->age . "<br>";
    echo "weight: " .  $this->weight . "<br>";
    }
}


if(class_exists("Human")){
    // echo  Human::$kind;
}


    $jason = new Human();
    $jason -> HumanInfo();
    echo $jason -> height . "<br>";
    echo $jason -> age . "<br>";
    echo $jason -> weight . "<br>";
    // echo  "456" . $jason -> $height;
?>
<!-- 記得 variable 要加 static  public private 。 -->
<!-- static 靜態變數或方法 -->