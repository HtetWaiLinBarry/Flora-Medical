<?php 

include('connect.php');
include('sheader.php');
 ?>
 <form>
 	<table border="1" width=100% align="center">
 		<tr>
 			<th>Privilege ID</th>
 			<th>Privilege></th>
 			<th>Salary</th>
 			<th>Functions</th>
 		</tr>
 		<?php 
 		$select=mysqli_query($connection,"SELECT * FROM Privilege");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$pid=$data['PrivilegeID'];
 			$pname=$data['PrivilegeName'];
 			echo "<tr>";
 			echo "<td>$pid</td>";
 			echo "<td>$pname</td>";
 			echo "<td>
 			<a href='Privilege_Update.php?pid=$pid'>Update</a> /
 			<a href='Privilege_Delete.php?pid=$pid'>Delete</a>
 			</td>";
 			echo "</tr>";
 		}


 		 ?>
 	</table>
 </form>
