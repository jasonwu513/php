<?php 

preg_match("/[^\/]+$/", "http://www.mydomainname.com/m/groups/view/test.txt", $matches);
$last_word = $matches[0]; // test

echo $last_word."<br>";

	if (false !== $pos = strripos($last_word, '.')) {
	    $last_word = substr($last_word, 0, $pos);
    }
    
echo $last_word;


    // $values = explode('/', "substr($v,2)");
    // $firstword = $values['0']; 
    // preg_match("/[^\/]+$/", "substr($v,2)", $matches);
    // $last_word = $matches[0];
    // if (false !== $pos = strripos($last_word, '.')) {
    //     $last_word = substr($last_word, 0, $pos);
    // }

?>