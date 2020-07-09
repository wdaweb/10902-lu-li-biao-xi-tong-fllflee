<!-- 連結mysql -->
<?php
$id1=$_POST["id"];
?>




<div>
   <form action="portfolioadd2.php" method="post">
	 <table>
	  <tr>
			<td>作品名稱</td>
			<td><input class="input3" type="text" name="name"></td>
		</tr>
		<tr>
			<td>圖片連結</td>
    	<td><input class="input3" type="text" name="src1"></td>               
		</tr>
		<tr>
			<td>作品連結</td>		
			<td><input class="input3" type="text" name="src2" ></td>
		</tr>
		<tr>
			<td>說明</td>		    	
			<td><input class="input3" type="text" name="note1"></td>
		</tr>
		<tr>
			<td>是否顯示</td>		
			<td>
    		<select name="show1">
      	　<option value="1"  SELECTED>顯示</option>
      　	<option value="0" >不顯示</option>
     	 </select>
    	</td>
		</tr>
		<tr><td>
		<input type="hidden" name="id" value="<?php echo $id1;?>">
		<input type="submit" value="送出">
		</td>
		</tr>
		</table>
	 </form>
</div>

