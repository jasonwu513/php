<?php


$ages = array("peter"=>"35" ,"Ben"=>"36","jason"=>"30");

foreach($ages as $age){
    echo "age: $age \n";
}

echo "<br>";


$ages = ["peter"=>"35" ,"Ben"=>"36","jason"=>"30"];

foreach($ages as $name => $value ){
    echo " $name".":".  "$value \n ";
}

echo "<br>";








?>