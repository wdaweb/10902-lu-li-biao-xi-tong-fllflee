<!-- 連結mysql -->
<?php
$id1=$_POST["id"];
$name=$_POST["name"];
$src1=$_POST["src1"];
$src2=$_POST["src2"];
$note1=$_POST["note1"];
@$sh1=$_POST["show1"];
include "conn.php";//引入資料庫
 
$sql2="insert into portfolio (id,name,src1,src2,note1,show1) ";
$sql2.="values('$id1','$name','$src1','$src2','$note1','$sh1')";
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