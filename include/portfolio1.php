<link rel="stylesheet" href="../css/main1.css">
<?php
if (@$_POST['id']){
   $id1 = @$_POST['id'];
 }else{
   $id1 =1;
}
include "conn.php";//引入資料庫操作類 
//內容

$sql="Select * from portfolio WHERE id ='".$id1."'";
$result=$db->query($sql);
$row=$result->fetchAll(PDO::FETCH_OBJ);

$db=null; //結束與資料庫連線

?>

<div >
   <table  class="table1">
   

         <?php
            foreach($row as $test1){ ?>
         <form action="portfolioedit.php" method="post"> 
               <tr>
               <?php
                               echo '<td><a href="';
                               echo $test1->src2;
                               echo '" target="_blank">';
                               echo '<img src="';
                               echo $test1->src1;
                               echo '" width="100px" height="100px">';
                               echo '</a></td>';
                     
               echo'<td><input class="input3" type="text" name="src1"   value="'.$test1->src1.'" ></td>';
               echo'<td><input class="input3" type="text" name="src2"   value="'.$test1->src2.'" ></td>';               
               echo'<td><input class="input3" type="text" name="name"   value="'.$test1->name.'" ></td>';
               echo'<td><input class="input3" type="text" name="note1"   value="'.$test1->note1.'" ></td>';
               ?>
               <td>
                  <select name="show1">
                   　<option value="1" <?php if($test1->show1 == '1'){ echo ' SELECTED ';}?>>顯示</option>
                   　<option value="0" <?php if($test1->show1 == '0'){ echo ' SELECTED ';}?>>不顯示</option>
                  </select>
               </td>
              
              <td>
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
   <form action="portfolioadd1.php" method="post">
      <table>
         <tr>
         <input type="hidden" name="id" value="<?php echo $id1;?>">
         </tr>
      </table>
      <input type="submit" value="新增作品">
   </form>

</div>

<div>
   <form action="portfoliodel.php" method="post">
      <table>
         <tr>
         <input type="hidden" name="id" value="<?php echo $id1;?>">
         </tr>
      </table>
      <input type="submit" value="刪除作品">
   </form>

</div>