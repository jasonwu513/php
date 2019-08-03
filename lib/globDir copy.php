<?php 
function globDir($dirname, $type=''){
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
    }
    //如果是檔案
    if(is_file($v)){
            // 如果不是markdown 的檔案
            if (strpos($v, '.md') == false) {
                // 印出檔名and 連結
                echo  "<a href=\"" . substr( $v , 2 )."\">".substr( $v , 2 )." </a> <br>";
            }
    //如果是資料夾
    }elseif(is_dir($v) && !in_array(substr($v,2), $ignoreFile)){
            // 印出資料夾名稱
            echo  "<h4>". substr($v,2) ."</h4>". '<br>';
            //使用globDir function 掃描這個資料夾
            globDir($v);
    }
    $nthFile++;
    //當處理到最後一個檔案
    if ($nthFile == $len - 1) {

        //即將回到上一層 將$dirInfoLevel-1
            $dirInfoLevel--;
    }
    
    }
}
?>