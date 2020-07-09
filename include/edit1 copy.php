<?php
include "conn.php";//引入資料庫操作類 

if (@$_POST['imgsrc1']){
    $imgsrc1 = @$_POST['imgsrc1'];  
    $sql = "UPDATE img1 SET imgsrc=? WHERE id=?";
    $result = $db->prepare($sql);
    $result->execute(array($imgsrc1,'1'));
}
if (@$_POST['id']){
    $id1 = @$_POST['id'];
    $flag=1;
}else{
    $id1 =1;
    $flag=0;
}


$sql1="select imgsrc from img1 where id = 1";
$result1=$db->prepare($sql1);
$result1->execute();
$row1=$result1->fetchColumn();

$sql="Select note1 from selfnote WHERE id ='".$id1."' AND show1 ='1'";
$result=$db->prepare($sql);
$result->execute();
$rowshow1=$result->fetchColumn();

$sql="Select * from education WHERE id ='".$id1."' AND show1 ='1'";
$result=$db->query($sql);
$rowshow2=$result->fetchAll(PDO::FETCH_OBJ);

$db=null; //結束與資料庫連線 
?>
<div class="menu">
<?php include "include/menu1.php";?>
</div>

<div class="main1">
    <div class="pic1"   style="background-image: url(images/<?php echo $row1 ?>);"></div>
 
    <div class="data1">
        <?php include "include/per1.php";?>
        姓:<?php per1($id1,"ln");?>
        <br>
        名:<?php per1($id1,"fn");?>
        <br>
        性別:<?php per1($id1,"ge");?>
        <br>        
        出生生月日:<?per1($id1,"by");?>/<?per1($id1,"bm");?>/<?per1($id1,"bd");?>
        <br>
        <?php 
        if($flag==1){
        ?>
        <a href="include/peredit.php">修改個資</a>
        <br>
        <form action="include/image1.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id1;?>">   
            <input type="submit" value="更換圖片">
        </form>
        <?php
        }
        ?>
    </div>

    <div class="data2">住址:
        <?php include "include/addr.php";addr1($id1,"city");addr1($id1,"dist");addr1($id1,"rd");addr1($id1,"no");?>
        號<?php addr1($id1,"floor");?>樓
        <br>
        <?php 
        if($flag==1){
        ?>
        <a href="include/addr1.php">修改地址</a>
        <?php
        }
        ?>
    </div>
            
    <div class="data3">自傳:<br>
        <?php echo $rowshow1;?>
        <?php 
        if($flag==1){
        ?>
        <a href="include/selfnote1.php">管理自傳</a>
        <?php
        }
        ?>
    </div>

    <div class="data4">學歷:<br>
        <?php echo $rowshow2->schoolname;?>
        /
        <?php echo $rowshow2->department;?>
        /
        <?php echo $rowshow2->timestart;?>
        ~
        <?php echo $rowshow2->timeend;?>
        <?php 
        if($flag==1){
        ?>
        <a href="include/selfnote1.php">管理學歷</a>
        <?php
        }
        ?>
    </div>
</div>



