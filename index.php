<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1, h2, h3, h4, h5, h6, p, blockquote {
   margin: 0;
   padding: 0;
}
body {
   font-family: "Helvetica Neue", Helvetica, "Hiragino Sans GB", Arial, sans-serif;
   font-size: 13px;
   line-height: 18px;
   color: #737373;
   background-color: white;
   margin: 10px 13px 10px 13px;
}
table {
   margin: 10px 0 15px 0;
   border-collapse: collapse;
}
td,th {	
   border: 1px solid #ddd;
   padding: 3px 10px;
}
th {
   padding: 5px 10px;	
}

a {
   color: #0069d6;
}
a:hover {
   color: #0050a3;
   text-decoration: none;
}
a img {
   border: none;
}
p {
   margin-bottom: 9px;
}

h1, h2, h3, h4, h5, h6 {
   color: #404040;
   line-height: 36px;
   text-align: center;
}
h1 {
   margin-bottom: 18px;
   font-size: 30px;
}
h2 {
   font-size: 24px;
}
h3 {
   font-size: 18px;
}
h4 {
   font-size: 16px;
}
h5 {
   font-size: 14px;
}
h6 {
   font-size: 13px;
}
hr {
   margin: 0 0 19px;
   border: 0;
   border-bottom: 1px solid #ccc;
}
blockquote {
   padding: 13px 13px 21px 15px;
   margin-bottom: 18px;
   font-family:georgia,serif;
   font-style: italic;
}
/* blockquote:before {
   content:"\201C";
   font-size:40px;
   margin-left:-10px;
   font-family:georgia,serif;
   color:#eee;
} */
blockquote p {
   font-size: 14px;
   font-weight: 300;
   line-height: 18px;
   margin-bottom: 0;
   font-style: italic;
}
code, pre {
   font-family: Monaco, Andale Mono, Courier New, monospace;
}
code {
   background-color: #fee9cc;
   color: rgba(0, 0, 0, 0.75);
   padding: 1px 3px;
   font-size: 12px;
   -webkit-border-radius: 3px;
   -moz-border-radius: 3px;
   border-radius: 3px;
}
pre {
   display: block;
   padding: 14px;
   margin: 0 0 18px;
   line-height: 16px;
   font-size: 11px;
   border: 1px solid #d9d9d9;
   white-space: pre-wrap;
   word-wrap: break-word;
}
pre code {
   background-color: #fff;
   color:#737373;
   font-size: 11px;
   padding: 0;
}
sup {
   font-size: 0.83em;
   vertical-align: super;
   line-height: 0;
}
* {
   -webkit-print-color-adjust: exact;
}
@media screen and (min-width: 914px) {
   body {
      width: 854px;
      margin:10px auto;
   }
}
@media print {
   body,code,pre code,h1,h2,h3,h4,h5,h6 {
      color: black;
   }
   table, pre {
      page-break-inside: avoid;
   }
}

    </style>
</head>
<body>

<h1>php 練習目錄</h1>
    
<?php

include("./lib/Parsedown.php");





function globDir($dirname, $type=''){
$ignoreFile = ["lib","css","DONDON"];
$ignoreFileLength = count($ignoreFile);

    
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
            

            if (strpos($v, '.md') == false) {
                echo  "<a href=\"" .$site. substr( $v , 2 )."\">".substr( $v , 2 )." </a> <br>";
            }
        }elseif(is_dir($v) && !in_array(substr($v,2), $ignoreFile)){
            // echo 'levelfoler: ' ." ". $dirInfoLevel. "<br> ";
              echo   substr($v,2) . "<br>";
            globDir($v);
        }
        if ($i == $len - 1) {
            $dirInfoLevel--;
            echo "<br>";
        }
        $i++;
        
    }
}

globDir('.');




include_once("./include/footerMarkdown.php");


?>


</body>
</html>


