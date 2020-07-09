<!-- 連結mysql -->
<?php
$city=$_POST["city1"];
$dist=$_POST["dist1"];
$rd=$_POST["rd1"];
$no=$_POST["no1"];
$floor=$_POST["floor1"];
$id1=$_POST["id"];


if(!$city || !$dist || !$rd || !$no || !$floor ) {
  echo "資料欠缺,請補充.";
} else {
  
  include "conn.php";//引入資料庫

    $sql = "UPDATE address SET city=?,dist=?,rd=?,no=?,floor=? WHERE id=?";
    $result = $db->prepare($sql);
    $result->execute(array($city,$dist,$rd,$no,$floor,1));

		$db=null; //結束與資料庫連線 
		
}





?>
<div>
   <form action="../index.php" method="post">
      <table>
         <tr>
            <td>資料更新完成</td>
         </tr>
         <tr>
         <input type="hidden" name="id" value="<?php echo $id1;?>">
         </tr>
      </table>
      <input type="submit" value="完成">
   </form>

</div>
