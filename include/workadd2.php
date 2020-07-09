<!-- 連結mysql -->
<?php
$id1=$_POST["id"];
$name1=$_POST["name"];
$dp1=$_POST["department"];
$ts1=$_POST["timestart"];
$te1=$_POST["timeend"];
@$sh1=$_POST["show1"];
include "conn.php";//引入資料庫
 
$sql2="insert into work (id,name1,department,timestart,timeend,show1) ";
$sql2.="values('$id1','$name1','$dp1','$ts1','$te1','$sh1')";
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