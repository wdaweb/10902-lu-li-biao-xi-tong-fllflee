<!-- 連結mysql -->
<?php
$name=$_POST["name"];
$pw=$_POST["pw"];


if(!$name || !$pw ) {
  echo "資料欠缺,請補充.";
} else {
  
  include "conn.php";//引入資料庫操作類 
  //內容

  $sql="Select COUNT(*) from pw WHERE name ='".$name."'";
  $result=$db->prepare($sql);
  $result->execute();
  $rowCount=$result->fetchColumn();

  if ($rowCount==0){
    ECHO "查無此人或密碼錯誤<br>";
  }else{
    $sql="Select * from pw WHERE  name ='".$name."'";
    $result=$db->query($sql);
    $row=$result->fetch(PDO::FETCH_OBJ);
    $db=null; //結束與資料庫連線 

    if($row->password != $pw){
      ECHO "查無此人或密碼錯誤<br>";
    }else{

    
?>





  <div>
   <form action="../index.php" method="post">
      <table>
         <tr>
            <td>login成功</td>
         </tr>
         <tr>
         <input type="hidden" name="id" value="<?php echo $row->id;?>">
         </tr>
      </table>
      <input type="submit" value="完成">
   </form>

</div>
    
<?php
}
}
}
?>

