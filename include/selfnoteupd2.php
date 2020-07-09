<!-- 連結mysql -->
<?php
$id1=$_POST["id"];
$note1=$_POST["note1"];

include "conn.php";//引入資料庫
 
$sql2="insert into selfnote (id,note1) ";
$sql2.="values('$id1','$note1')";
$db->exec($sql2);
echo "資料新增完成.";
echo "<br>";
$db=null; //結束與資料庫連線 




?>


<div>
   <form action="../index.php" method="post">
      <table>
         <tr>
            <td>新增成功</td>
         </tr>
         <tr>
         <input type="hidden" name="id" value="<?php echo $id1;?>">
         </tr>
      </table>
      <input type="submit" value="完成">
   </form>

</div>