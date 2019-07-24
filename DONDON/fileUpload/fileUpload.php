<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
<?php
switch($_FILES["upFile"]["error"] ){
	case UPLOAD_ERR_OK :
		if( file_exists("images") == false){
			mkdir("images"); //make directory
		}
		$from = $_FILES["upFile"]["tmp_name"];
		$to = "images//" . mb_convert_encoding($_FILES["upFile"]["name"],"big5","utf-8");
		copy( $from, $to);
		echo "上傳成功<br>";
		break;
	case UPLOAD_ERR_INI_SIZE:
	    echo "上傳檔案太大,不能超過 ", ini_get("upload_max_filesize") , "<br>";
	    break;
	case UPLOAD_ERR_FORM_SIZE:
	    echo "上傳檔案太大,不能超過 ", $_POST["MAX_FILE_SIZE"] , "<br>";
	    break;
    case UPLOAD_ERR_PARTIAL:
    	echo "上傳失敗<br>";
    	break;
    case UPLOAD_ERR_NO_FILE:
        echo "没有上傳檔案<br>";
        break;
    default:
        echo "上傳檔案失敗，錯誤代碼: ",$_FILES["error"],"請通知系統開發人員<br>";

}

 ?>
</body>
</html>
