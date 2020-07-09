<!-- 連結mysql -->
<?php
$id1=$_POST["id"];
?>




<div>
   <form action="selfnoteadd2.php" method="post">
		<textarea name="note1">內容</textarea>
    <input type="hidden" name="id" value="<?php echo $id1;?>">
		<input type="submit" value="送出">
	 </form>
</div>

