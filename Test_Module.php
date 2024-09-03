<?php 

include('connect.php');

 ?>
 <form>
 	<table border="1" width=100% align="center">
 		<tr>
 			<th>Doctor ID</th>
 			<th>Functions</th>
 		</tr>
 		<?php 
 		$select=mysqli_query($connection,"SELECT * FROM Doctor");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$did=$data['DoctorID'];
 			echo "<tr>";
 			echo "<td>$did</td>";
 			echo "<td>
 			<a href='Doctor_Profile.php?did=$did'>View Profile</a>
 			</td>";
 			echo "</tr>";
 		}


 		 ?>
 	</table>
 </form>
