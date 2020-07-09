<!-- 連結mysql -->

<?php

function addr1($id1,$a1){
	//phpinfo();
	include "conn.php";//引入資料庫操作類 
	//內容
	$sql="Select * from address where id = ".$id1;
	$result=$db->query($sql);
	$row=$result->fetch(PDO::FETCH_OBJ);

	switch($a1){
		case "city":
			echo $row->city;
		break;
		case "dist":
			echo $row->dist; 
		break;
		case "rd":
			echo $row->rd; 
		break;
		case "no":
			echo $row->no; 
		break;
		case "floor":
			echo $row->floor; 
		break;
		default:
			echo $a1;
			echo "錯誤";
	}

	$db=null; //結束與資料庫連線
}
				

?>