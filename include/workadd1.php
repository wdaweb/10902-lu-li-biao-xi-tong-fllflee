<!-- 連結mysql -->
<?php
$id1=$_POST["id"];
?>




<div>
   <form action="workadd2.php" method="post">
	 <table>
	  <tr>
			<td>公司名稱</td>
			<td><input class="input3" type="text" name="name"></td>
		</tr>
		<tr>
			<td>職務名稱</td>
    	<td><input class="input3" type="text" name="department"></td>               
		</tr>
		<tr>
			<td>開始</td>		
			<td><input class="input3" type="text" name="timestart" ></td>
		</tr>
		<tr>
			<td>結束</td>		    	
			<td><input class="input3" type="text" name="timeend"></td>
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

