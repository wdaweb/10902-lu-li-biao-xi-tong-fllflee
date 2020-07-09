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
   
               <form action="portfoliode1.php" method="post"> 
         <?php
            foreach($row as $test1){ ?>
            <tr>
            <td>
            <input type="radio" name="sn" value="<?php echo $test1->sn; ?>">
               <?php
                                              echo '<a href="';
                                              echo $test1->src2;
                                              echo '" target="_blank">';
                                              echo '<img src="';
                                              echo $test1->src1;
                                              echo '" width="50px" height="50px">';
                                              echo '</a><br>';
                                              echo "作品名:";
               echo $test1->name;
               echo "<br>圖片連結:";
               echo $test1->src1;
               echo "<br>作品連結:";
               echo $test1->src2;
               echo "<br>作品簡介:";
               echo $test1->note1;
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
   <form action="portfolioadd1.php" method="post">
      <table>
           <tr>
         <input type="hidden" name="id" value="<?php echo $id1;?>">
         </tr>
      </table>
      <input type="submit" value="新增作品">
   </form>

</div>