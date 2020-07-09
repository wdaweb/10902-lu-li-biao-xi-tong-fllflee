<!-- 連結mysql -->

<?php
include "gender.php";
function per1($id1,$p1){
	//phpinfo();
include "conn.php";//引入資料庫操作類

	//內容
	$sql="Select * from personal where id = ".$id1;
	$result=$db->query($sql);
	$row=$result->fetch(PDO::FETCH_OBJ);
	switch($p1){
		case "fn":
			if($row->fnd==1){
				echo $row->firstname;
			} else {
				echo "不顯示";
			}
		break;
		case "ln":
			if($row->lnd==1){
				echo $row->lastname; 
			} else {
				echo "不顯示";
			}
		break;
		case "ge":
			if($row->ged==1){
				ge1($row->gender);
			} else {
				echo "不顯示";
			}
		break;
		case "by":
			if($row->byd==1){
				echo $row->birthy; 
			} else {
				echo "不顯示";
			}
		break;
		case "bm":
			if($row->bmd==1){
				echo $row->birthm; 
			} else {
				echo "不顯示";
			}
		break;
		case "bd":
			if($row->bdd==1){
				echo $row->birthd; 
			} else {
				echo "不顯示";
			}
		break;
		default:
			echo $p1;
			echo "錯誤";
	}
	$db=null; //結束與資料庫連線
}
				

?>