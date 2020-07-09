<!-- 連結mysql -->
<?php
$sn=$_POST["sn"];
$id1=$_POST["id"];
$totle=$_POST["totle"];

echo $sn;
echo $id1;
echo $totle;
  
  include "conn.php";//引入資料庫
  
for ($i=1;$i<=$totle;$i++){
   $sql = "UPDATE selfnote SET show1=? WHERE id=? AND sn='".$i."'";
   $result = $db->prepare($sql);
   $result->execute(array(0,$id1));
}


    $sql1 = "UPDATE selfnote SET show1=? WHERE id=? AND sn=?";
    $result = $db->prepare($sql1);
    $result->execute(array(1,$id1,$sn));


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
