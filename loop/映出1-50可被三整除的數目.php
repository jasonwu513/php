<?php 



for ($i=1; $i < 50 ; $i++) { 

    static $b =0;
    if($i%3 == 0){
        echo $i . "<br>";
        $b = $b +$i;
    }

    
}
echo "summary is " . $b;



?>