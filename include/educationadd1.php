<!-- 連結mysql -->
<?php
$id1=$_POST["id"];
?>




<div>
   <form action="educationadd2.php" method="post">
	 <table>
	  <tr>
			<td>學校名稱</td>
			<td><input class="input3" type="text" name="schoolname"></td>
		</tr>
		<tr>
			<td>系所名稱</td>
    	<td><input class="input3" type="text" name="department"></td>               
		</tr>
		<tr>
			<td>入學年</td>		
			<td><input class="input3" type="text" name="timestart" ></td>
		</tr>
		<tr>
			<td>畢業年</td>		    	
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

