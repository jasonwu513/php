<?php 
// 引入 Parsedown
include_once $_SERVER['DOCUMENT_ROOT'].'/lib/Parsedown.php';
$Parsedown = new Parsedown();
// echo basename(__FILE__, '.php');
// echo $_SERVER['SCRIPT_FILENAME']."<br>";

//$_SERVER['SCRIPT_FILENAME'] 呼叫頁面路徑
$fileNameMd = substr($_SERVER['SCRIPT_FILENAME'],0,-4).".md";
// echo "mdpath : " . $fileNameMd;

//確認同路徑下是否有同名但副檔名為md 的檔案
if(file_exists ( $fileNameMd )){
    // 存取markdown file 文件 
    $markdownFile = fopen (basename($_SERVER['SCRIPT_FILENAME'] , '.php') . '.md'  , 'r');
    // 印出 markdown file
    echo $Parsedown->text(fread($markdownFile,filesize(basename($_SERVER['SCRIPT_FILENAME'], '.php') . '.md')));

}    


?>