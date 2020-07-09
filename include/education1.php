<link rel="stylesheet" href="../css/main1.css">
<?php
if (@$_POST['id']){
   $id1 = @$_POST['id'];
 }else{
   $id1 =1;
}
include "conn.php";//引入資料庫操作類 
//內容

$sql="Select * from education WHERE id ='".$id1."'";
$result=$db->query($sql);
$row=$result->fetchAll(PDO::FETCH_OBJ);

$db=null; //結束與資料庫連線

?>

<div >
   <table  class="table1">
   
      


         <?php
            foreach($row as $test1){ ?>
         <form action="educationedit.php" method="post"> 
               <tr>
               <?php
               echo'<td><input class="input3" type="text" name="schoolname"   value="'.$test1->schoolname.'" ></td>';
               echo'<td><input class="input3" type="text" name="department"   value="'.$test1->department.'" ></td>';               
               echo'<td><input class="input3" type="text" name="timestart"   value="'.$test1->timestart.'" ></td>';
               echo'<td><input class="input3" type="text" name="timeend"   value="'.$test1->timeend.'" ></td>';
               echo "<BR>";
               ?>
               <td>
                  <select name="show1">
                   　<option value="1" <?php if($test1->show1 == '1'){ echo ' SELECTED ';}?>>顯示</option>
                   　<option value="0" <?php if($test1->show1 == '0'){ echo ' SELECTED ';}?>>不顯示</option>
                  </select>
               </td>
              </tr>
              <tr><td>
            <input type="hidden" name="id" value="<?php echo $id1; ?>">
            <input type="hidden" name="sn" value="<?php echo $test1->sn; ?>">
            <input type ="submit" value="送出">  
            </td></tr>
         </form>
         <?php
            }
         ?>
         

    </table>
   </div>

   <div>
   <form action="educationadd1.php" method="post">
      <table>
         <tr>
         <input type="hidden" name="id" value="<?php echo $id1;?>">
         </tr>
      </table>
      <input type="submit" value="新增學歷">
   </form>

</div>

<div>
   <form action="educationdel.php" method="post">
      <table>
         <tr>
         <input type="hidden" name="id" value="<?php echo $id1;?>">
         </tr>
      </table>
      <input type="submit" value="刪除履歷">
   </form>

</div>