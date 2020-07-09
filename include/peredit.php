<?php
    include "conn.php";//引入資料庫操作類 
    //內容
    $sql="Select * from personal";
    $result=$db->query($sql);
    $row=$result->fetch(PDO::FETCH_OBJ);

    $db=null; //結束與資料庫連線 
?>

<div>
   <form action="update2.php" method="post">
      <table>
         <tr>
            <td>個人資料:請勾選要顯示的資料</td>
         </tr>
         <tr>
            <td>
               <input type="checkbox" name="lnd" value="1" <?php if($row->lnd == 1){echo "checked";} ?>>姓:
               <input class="input3" type="text" name="ln1"  value="<?php echo $row->lastname;?>" >
            </td>
         </tr>
         <tr>
            <td>
               <input type="checkbox" name="fnd" value="1" <?php if($row->fnd == 1){echo "checked";} ?>>名:
               <input class="input3" type="text" name="fn1"   value="<?php echo $row->firstname;?>" ></td>
         </tr>
            <td>
               <input type="checkbox" name="ged" value="1" <?php if($row->ged == 1){echo "checked";} ?>>性別:
                  <select name="ge1">
                     <option value="f" <?php if($row->gender == "f"){echo "selected";} ?>>女</option>
                     <option value="m" <?php if($row->gender == "m"){echo "selected";} ?>>男</option>
                     <option value="o" <?php if($row->gender == "o"){echo "selected";} ?>>其他</option>
                  </select>
            </td>
         </tr>
         <tr>
            <td>
              生日
            </td>
         </tr>
         <tr>
            <td>
               <input type="checkbox" name="byd" value="1" <?php if($row->byd == 1){echo "checked";} ?>>年
               <input class="input4" type="text" name="by1"  value="<?php echo $row->birthy;?>" >
            </td>
         </tr>
         <tr>
            <td>
               <input type="checkbox" name="bmd" value="1" <?php if($row->bmd == 1){echo "checked";} ?>>月
               <input class="input4" type="text" name="bm1"  value="<?php echo $row->birthm;?>" >
            </td>
         </tr>
         <tr>
            <td>
               <input type="checkbox" name="bdd" value="1" <?php if($row->bdd == 1){echo "checked";} ?>>日
               <input class="input4" type="text" name="bd1"  value="<?php echo $row->birthd;?>" >
            </td>
         </tr>
      </table>
      <input type="hidden" name="id" value="<?php echo $row->id;?>">
      <input type="submit" value="送出修改">
   </form>

</div>
