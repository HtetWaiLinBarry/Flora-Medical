<?php 

include('connect.php');
include('sheader.php');
 ?>
 <form>
 	<table border="1" width=100% align="center">
 		<tr>
 			<th>Role ID</th>
 			<th>Role Name></th>
 			<th>Functions</th>
 		</tr>
 		<?php 
 		$select=mysqli_query($connection,"SELECT * FROM Role");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$rid=$data['RoleID'];
 			$rname=$data['RoleName'];
 			echo "<tr>";
 			echo "<td>$rid</td>";
 			echo "<td>$rname</td>";
 			echo "<td>
 			<a href='Role_Update.php?rid=$rid'>Update</a> /
 			<a href='Role_Delete.php?rid=$rid'>Delete</a>
 			</td>";
 			echo "</tr>";
 		}


 		 ?>
 	</table>
 </form>
