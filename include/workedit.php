<!-- 連結mysql -->
<?php
$id1=$_POST["id"];
$sn1=$_POST["sn"];
$name1=$_POST["name"];
$dp1=$_POST["department"];
$ts1=$_POST["timestart"];
$te1=$_POST["timeend"];
@$sh1=$_POST["show1"];
include "conn.php";//引入資料庫
echo $id1;
echo "/";
echo $sn1;

$sql = "UPDATE work SET name1=?,department=?,timestart=?,timeend=?,show1=? WHERE sn=? AND id=?" ;
$result = $db->prepare($sql);
$result->execute(array($name1,$dp1,$ts1,$te1,$sh1,$sn1,$id1));

$db=null; //結束與資料庫連線 


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