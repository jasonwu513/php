<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>

</head>
<body>

<h1>php 練習目錄</h1>
<?php

// include("./lib/Parsedown.php");
// include("./lib/globDir.php");
include("./lib/globDir2.php");

globDir2('.');
include_once $_SERVER['DOCUMENT_ROOT'].'/include/footerMarkdown.php';

print_r(globDir2('./loop2'));

?>


</body>
</html>


