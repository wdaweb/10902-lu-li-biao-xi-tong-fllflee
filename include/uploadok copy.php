<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
$uploaddir = 'http://localhost/resume1/images/';
$file = $uploaddir.basename($_FILES['file']['name']);
 
if(is_uploaded_file($_FILES['file']['tmp_name'])){
		if($_FILES['file']['type']=='image/png' || $_FILES['file']['type']=='image/jpeg'){//判斷檔名是否為圖檔
    		if(move_uploaded_file($_FILES['file']['tmp_name'], iconv("utf-8", "big5", $file))){
 
            echo '<br>';
            echo $_FILES['file']['name'];//檔案名稱
            echo '<br>';
            echo $_FILES['file']['size'], ' byte';//檔案大小
            echo '<br>';
            echo $file, '上傳成功。';
            echo '<p><img src="',$file,'"></p>';
        }else{
					echo '上傳失敗。';
        }
    }else{//如果不為圖檔的話
				
				echo '此副檔名需為jpg.jpge.png';
    }
}else{
    echo '請選擇檔案。';
}


?>