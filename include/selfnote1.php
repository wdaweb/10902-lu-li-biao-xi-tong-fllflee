<link rel="stylesheet" href="../css/main1.css">
<?php
if (@$_POST['id']){
   $id1 = @$_POST['id'];
 }else{
   $id1 =1;
}
include "conn.php";//引入資料庫操作類 
//內容

$sql="Select MAX(sn) from selfnote WHERE id ='".$id1."'";
$result=$db->prepare($sql);
$result->execute();
$rowCount=$result->fetchColumn();

$sql="Select * from selfnote WHERE id ='".$id1."'";
$result=$db->query($sql);
$row=$result->fetchAll(PDO::FETCH_OBJ);

$db=null; //結束與資料庫連線

?>

<div >
   <table  class="table1">

      <?php
            echo '<form action="selfnoteedit.php" method="post">';
            foreach($row as $test1){
            echo '<tr>';
            echo '<td>';
            echo $test1->note1;
            echo '</td>';
            echo '<td>';
            echo '<input type ="radio" name="sn" value="'.$test1->sn.'"';
            if($test1->show1 == '1'){
               echo ' checked ';   
            }
            echo '>顯示';
            echo '<input type ="submit" value="送出">';
            echo '<input type="hidden" name="totle" value="'.$rowCount.'">';
            echo "<br>";
            echo '</td>';
            echo '</tr>';
         }
         

         echo '<input type="hidden" name="id" value="'.$id1.'">';
         echo '</form>';
      ?>
    </tr>

    </table>
   </div>

   <div>
   <form action="selfnoteadd1.php" method="post">
      <table>
         <tr>
            <td>新增履歷</td>
         </tr>
         <tr>
         <input type="hidden" name="id" value="<?php echo $id1;?>">
         </tr>
      </table>
      <input type="submit" value="新增履歷">
   </form>
   <form action="selfnotedel.php" method="post">
      <table>
         <tr>
            <td>刪除履歷</td>
         </tr>
         <tr>
         <input type="hidden" name="id" value="<?php echo $id1;?>">
         </tr>
      </table>
      <input type="submit" value="刪除履歷">
   </form>
   <form action="selfnoteupd.php" method="post">
      <table>
         <tr>
            <td>修改履歷</td>
         </tr>
         <tr>
         <input type="hidden" name="id" value="<?php echo $id1;?>">
         </tr>
      </table>
      <input type="submit" value="刪除履歷">
   </form>
</div>