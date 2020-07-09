<?php
    include "conn.php";//引入資料庫操作類 
    //內容
    $sql="Select * from address";
    $result=$db->query($sql);
    $row=$result->fetch(PDO::FETCH_OBJ);

    $db=null; //結束與資料庫連線 
?>

<div>
   <form action="update1.php" method="post">
      <table>
         <tr>
            <td>目前住址:</td>
         </tr>
         <tr>
            <td><input class="input3" type="text" name="city1"   value="<?php echo $row->city;?>" ></td>
            <td><input class="input3" type="text" name="dist1"  value="<?php echo $row->dist;?>" ></td>
            <td><input class="input4" type="text" name="rd1"  value="<?php echo $row->rd;?>" ></td>
            <td><input class="input3" type="text" name="no1"  value="<?php echo $row->no;?>" >號</td>
            <td><input class="input2" type="text" name="floor1"  value="<?php echo $row->floor;?>" >樓</td>
         </tr>
      </table>
      <input type="hidden" name="id" value="<?php echo $row->id;?>">
      <input type="submit" value="送出修改">
   </form>

</div>
