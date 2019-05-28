<?php

$path    = './';
$files = scandir($path);

$dirArr = glob('./*');
// 返回指定檔案類型
// function globDir($dirname, $type=''){
//    if($type ==''){
//        $dirInfo = glob($dirname.'/*');
//    }else{
//        $dirInfo = glob($dirname.'/*.'.$type);
//    }
//    return $dirInfo;
// }

// $info = globDir('.','php');

// echo "<pre>";
// print_r($info);

// 辨識所有目錄
//$global $dirInfoLevel ;
       // $dirInfoLevel = 0;
function globDir($dirname, $type=''){

    
    $site ='http://php.yaoshou365.com/';

    $dirInfo = glob($dirname.'/*');
       if($type ==''){
           $dirInfo = glob($dirname.'/*');
       }else{
           $dirInfo = glob($dirname.'/*.'.$type);
       }

    
    
    $i = 0;
    $len = count($dirInfo);

    
    foreach ($dirInfo  as $v) { 
    	if ($i == 0) {
    		static $dirInfoLevel = 0;
    		$dirInfoLevel = $dirInfoLevel +1;
    	}
    	
    
        if(is_file($v)){
            
            // echo 'levelNfile: ' .$dirInfoLevel;
            // echo $v ."</br>";
            // echo substr( $v , 2 ) ."</br>";
            // echo basename($v) . "<br>";

            if (strpos($v, '.md') == false) {
                echo  "<a href=\"" .$site. substr( $v , 2 )."\">".substr( $v , 2 )." </a> <br>";
            }
            

           
        }elseif(is_dir($v)){

            echo 'levelfoler: ' ." ". $dirInfoLevel. "<br> ";
            //  echo   "<a href=\"" .$site.$files[$i]."\">".$files[$i]." </a><br>";
            globDir($v);
        }
        if ($i == $len - 1) {
        	$dirInfoLevel--;
        }
        $i++;
        
    }
}

globDir('.');


echo '<h2>' . "php 練習目錄" . '</h2>';

// echo $files;
echo "<pre>";
// print_r($files);
// print_r($dirArr);
// echo "<pre>";

// for ($i=4; $i < count($files); $i++) { 
//     $site = 'http://php.yaoshou365.com/';
//     echo   "<a href=\"" .$site.$files[$i]."\">".$files[$i]." </a><br>";
// }




?>