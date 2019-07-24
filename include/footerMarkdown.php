<?php 

$Parsedown = new Parsedown();

echo basename(__FILE__, '.php');
// $markdownFile = fopen ( basename(__FILE__, '.php') . '.md'  , 'r');
$markdownFile = fopen (basename($_SERVER['SCRIPT_FILENAME'] , '.php') . '.md'  , 'r');
echo $Parsedown->text(fread($markdownFile,filesize(basename($_SERVER['SCRIPT_FILENAME'], '.php') . '.md')));



?>