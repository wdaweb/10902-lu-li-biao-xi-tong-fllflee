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
   
               <form action="educationde1.php" method="post"> 
         <?php
            foreach($row as $test1){ ?>
            <tr>
            <td>
            <input type="radio" name="sn" value="<?php echo $test1->sn; ?>">
               <?php
               echo $test1->schoolname;
               echo "/";
               echo $test1->department;
               echo "/";
               echo $test1->timestart;
               echo "~";
               echo $test1->timeend;
               echo "<BR>";
               ?>
            </td>
             <td>
                  <select name="show1">
                   　<option value="1" <?php if($test1->show1 == '1'){ echo ' SELECTED ';}?>>顯示</option>
                   　<option value="0" <?php if($test1->show1 == '0'){ echo ' SELECTED ';}?>>不顯示</option>
                  </select>
               </td>
              </tr>
            <?php
            }
            ?>
                    
              <tr><td>
            <input type="hidden" name="id" value="<?php echo $id1; ?>">
            <input type ="submit" value="送出">  
            </td></tr>

         </form>
         </table>


   </div>

   <div>
   <form action="educationadd1.php" method="post">
      <table>
         <tr>
            <td>新增學歷</td>
         </tr>
         <tr>
         <input type="hidden" name="id" value="<?php echo $id1;?>">
         </tr>
      </table>
      <input type="submit" value="新增履歷">
   </form>

</div>