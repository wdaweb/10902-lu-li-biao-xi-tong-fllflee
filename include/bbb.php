<?php
    $page=isset($_GET['page'])?$_GET['page']:0;//從零開始
    $imgnums = 10;    //每頁顯示的圖片數
    $path="../images/";   //圖片儲存的目錄
    $handle = opendir($path);
    $i=0;
    while (false !== ($file = readdir($handle))) {
       list($filesname,$ext)=explode(".",$file);
       if($ext=="gif" or $ext=="jpg" or $ext=="png" or $ext=="JPG" or $ext=="GIF" or $ext=="PNG") {
           if (!is_dir('./'.$file)) {
              $array[]=$file;//儲存圖片名稱
              ++$i;
           }
       }
    }
    if($array){
       rsort($array);//修改日期倒序排序
    }
    echo '<div>';
    echo '<form action="edit1.php" method="post">';
    echo '<table>';
    for($j=$imgnums*$page; $j<($imgnums*$page+$imgnums) && $j<$i; ++$j){
         echo '<tr>';
         echo '<td>';
         echo "<img src=".$path."/".$array[$j].">";
         echo '</td>';
         echo '<td>';
         echo '<input type ="radio" name="imgsrc1" value="'.$array[$j].'">';
         echo $array[$j],'';
         echo '<input type ="submit" value="送出">';
         echo '</td>';
         echo '</tr>';
       }
    echo '</form>';
    echo '<td>';

    $realpage = @ceil($i / $imgnums) - 1;
    $Prepage = $page-1;
    $Nextpage = $page+1;
    if($Prepage<0){
       echo "上一頁 ";
       echo "<a href=?page=$Nextpage>下一頁</a> ";
       echo "<a href=?page=$realpage>最末頁</a> ";
    }elseif($Nextpage >= $realpage){
       echo "<a href=?page=0>首頁</a> ";
       echo " <a href=?page=$Prepage>上一頁</a> ";
       echo " 下一頁";
    }else{
       echo "<a href=?page=0>首頁</a> ";
       echo "<a href=?page=$Prepage>上一頁</a> ";
       echo "<a href=?page=$Nextpage>下一頁</a> ";
       echo "<a href=?page=$realpage>最末頁</a> ";
    }
    echo '</td>';
    echo '</tr>';
    echo '</table>';
    echo '</div>';
?> 