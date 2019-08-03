<?php 
function globDir2($dirname, $type=''){
    //glob 資料夾和文件可能交錯, 故將資料夾加入
    $thisLevelFolder = [];
    //忽略的資料夾
    $ignoreFile = ["lib","css","DONDON"];
    // $ignoreFileLength = count($ignoreFile);
    // $site ='http://php.yaoshou365.com/'; 原本是用在印link 的時候, 但因為在跟目錄,沒有網址連結也可以用
    $dirInfo = glob($dirname.'/*');
    // 如果要篩選檔案type 可以參考以下code,此處我們沒有要篩選檔案.
    if($type ==''){
        $dirInfo = glob($dirname.'/*');
    }else{
        $dirInfo = glob($dirname.'/*.'.$type);
    }
    //計算有幾個資料夾和檔案
    $len = count($dirInfo);
    // 紀錄處理到第N個檔案
    $nthFile = 0;
    foreach ($dirInfo  as $v) { 
        // 記錄處理到第幾層的檔案 初始為0  static 只有在迴圈起始時會賦值
        static $dirInfoLevel = 0;
        // 進入subfolder 的時候,在第一個檔案位置時,將$dirInfoLevel+1
        if ($nthFile == 0) {
    $dirInfoLevel = $dirInfoLevel +1;
    // echo "new layer data at $dirInfoLevel <br>";
    }

    
    //如果是檔案
    if(is_file($v)){
            // 如果不是markdown 的檔案
            // echo $v.'<br>';
            if (strpos($v, '.md') == false) {
                // 印出檔名and 連結
                echo  "<a href=\"" . substr( $v , 2 )."\">".substr( $v , 2 )." </a> <br>";
            }
    //如果是資料夾
    }elseif(is_dir($v) && !in_array(substr($v,2), $ignoreFile)){
            // 印出資料夾名稱
            // echo  "<h4>". substr($v,2) ."</h4>". '<br>';
            //使用globDir function 掃描這個資料夾
            // globDir2($v);
            // echo $v.'<br>';
            
            // print_r($thisLevelFolder);
            array_push($thisLevelFolder, substr($v,2) );
            // print_r($thisLevelFolder);
            // echo substr( $v , 2 ). "<br>";
            // 
            // echo substr($v,2). "<br>";
    }
    $nthFile++;
    // echo "第".$nthFile."個檔案<br>";
    //當處理到最後一個檔案
    if ($nthFile == $len) {
        // echo "last". $nthFile ;
        // echo "last". $len ;
        
        if(is_array($thisLevelFolder) && !empty($thisLevelFolder)){
            foreach ($thisLevelFolder as $folder) {
            echo  "<h4>". $folder ."</h4>". '<br>';
            $scanDir = './'.$folder;
            // echo $scanDir."<br>";
            globDir2($scanDir);
            
            }
            
        }

        //即將回到上一層 將$dirInfoLevel-1  
            $dirInfoLevel--;
            // echo "$dirInfoLevel"."<br>";
        }
        
    }
    
}
?>