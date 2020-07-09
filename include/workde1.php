<?php
$id1=$_POST["id"];
$sn1=$_POST["sn"];

include "conn.php";//引入資料庫
  
  $sql1 = "DELETE FROM work WHERE sn ='".$sn1."'";
  //刪除sn為sn1的這筆資料
  $db->exec($sql1);
  echo "資料刪除完成.";
  echo "<br>";

$db=null; //結束與資料庫連線 

?>
<div>
   <form action="../index.php" method="post">
      <table>
         <tr>
            <td>刪除成功</td>
         </tr>
         <tr>
         <input type="hidden" name="id" value="<?php echo $id1;?>">
         </tr>
      </table>
      <input type="submit" value="完成">
   </form>

</div>