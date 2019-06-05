
<?php 
    echo "<h2> count() 計算array 長度 </h2>";
    echo '<h3> $Arr = [1,2,3,4] </h3>';
    echo '<h3> echo count($Arr) </h3>';
    $Arr = [1,2,3,4];
    echo count($Arr);
    echo "<h2> print_r();  </h2>";
    print_r($Arr);
    echo "<h2> array_serch() </h2>";
    echo "<h2> shuffle() </h2>";
    shuffle($Arr);
    print_r($Arr);
    echo "<br>";

    echo "<h2> in_array() </h2>";
    if (!in_array(4,$Arr)) {
        echo "123";
    } 
    // 

    
