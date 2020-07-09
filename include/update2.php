<!-- 連結mysql -->
<?php
$lnd=$_POST["lnd"];
$ln=$_POST["ln1"];
$fnd=$_POST["fnd"];
$fn=$_POST["fn1"];
$ged=$_POST["ged"];
$ge=$_POST["ge1"];
$byd=$_POST["byd"];
$by=$_POST["by1"];
$bmd=$_POST["bmd"];
$bm=$_POST["bm1"];
$bdd=$_POST["bdd"];
$bd=$_POST["bd1"];
$id1=$_POST["id"];


if(!$ln || !$fn || !$by || !$bm || !$bd ) {
  echo "資料欠缺,請補充.";
} else {
  
  include "conn.php";//引入資料庫

    $sql = "UPDATE personal SET fnd=?,firstname=?,lnd=?,lastname=?,ged=?,gender=?,byd=?,birthy=?,bmd=?,birthm=?,bdd=?,birthd=? WHERE id=?";
    $result = $db->prepare($sql);
    $result->execute(array($fnd,$fn,$lnd,$ln,$ged,$ge,$byd,$by,$bmd,$bm,$bdd,$bd,1));
    $db=null; //結束與資料庫連線 
}





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