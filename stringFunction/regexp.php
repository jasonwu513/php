<?php 
$string1 = "./test/lib/libnxme";
if(preg_match("([^\/]+$)",$string1)){
    echo $string."contains libname";
}else{
    echo $string."dosn't contains libname";
}


?>