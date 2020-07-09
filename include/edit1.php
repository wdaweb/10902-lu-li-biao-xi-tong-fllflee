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

$sql="Select * from portfolio WHERE id ='".$id1."' AND show1 ='1'";
$result=$db->query($sql);
$rowshow3=$result->fetchAll(PDO::FETCH_OBJ);

$sql="Select * from work WHERE id ='".$id1."' AND show1 ='1'";
$result=$db->query($sql);
$rowshow4=$result->fetchAll(PDO::FETCH_OBJ);

$db=null; //結束與資料庫連線 
?>
<div class="menu">
<?php //include "include/menu1.php";?>

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
        <form action="include/peredit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id1;?>">   
            <input type="submit" value="修改個資">
        </form>
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
        <form action="include/addr1.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id1;?>">   
            <input type="submit" value="修改地址">
        </form>
        <?php
        }
        ?>
    </div>
            
    <div class="data3">自傳:<br>
        <?php echo $rowshow1;?>
        <?php 
        if($flag==1){
        ?>
        <form action="include/selfnote1.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id1;?>">   
            <input type="submit" value="管理自傳">
        </form>
        <?php
        }
        ?>
    </div>



    <div class="data4">學歷:<br>
        <?php
            foreach($rowshow2 as $test1){
                echo $test1->schoolname;
                echo "/";
                echo $test1->department;
                echo "/";
                echo $test1->timestart;
                echo "~";
                echo $test1->timeend;
                echo "<BR>";
            }
        ?>
       
        <?php 
        if($flag==1){
        ?>
        <form action="include/education1.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id1;?>">   
            <input type="submit" value="管理學歷">
        </form>
        <?php
        }
        ?>
    </div>


    <div class="data5">作品:<br>
    <?php
            foreach($rowshow3 as $test1){
                echo '<a href="';
                echo $test1->src2;
                echo '" target="_blank">';
                echo '<img src="';
                echo $test1->src1;
                echo '" width="100px" height="100px">';
                echo '</a>';
                echo $test1->name;
                echo "/";
                echo $test1->note1;
                echo "/";
                echo "<BR>";
            }
        ?>
        <?php 
        if($flag==1){
        ?>
        <form action="include/portfolio1.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id1;?>">   
            <input type="submit" value="作品管理">
        </form>
        <?php
        }
        ?>
    </div>

    <div class="data6">經歷:<br>
        <?php
            foreach($rowshow4 as $test1){
                echo $test1->name1;
                echo "/";
                echo $test1->department;
                echo "/";
                echo $test1->timestart;
                echo "~";
                echo $test1->timeend;
                echo "<BR>";
            }
        ?>
         <?php 
        if($flag==1){
        ?>
        <form action="include/work1.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id1;?>">   
            <input type="submit" value="管理經歷">
        </form>
        <?php
        }
        ?>
    </div>
</div>



