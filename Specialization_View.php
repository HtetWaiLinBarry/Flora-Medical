<?php 

include('connect.php');
include('sheader.php');
 ?>
 <form>
 	<table border="1" width=100% align="center">
 		<tr>
 			<th>Specialization ID</th>
 			<th>Specialization</th>
 			<th>Field</th>
 		</tr>
 		<?php 
 		$select=mysqli_query($connection,"SELECT * FROM Specialization");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$spid=$data['SpecializationID'];
 			$special=$data['Specialization'];
 			$field=$data['Field'];
 			echo "<tr>";
 			echo "<td>$spid</td>";
 			echo "<td>$special</td>";
 			echo "<td>$field</td>";
 			echo "<td>
 			<a href='Specialization_Update.php?spid=$spid'>Update</a> /
 			<a href='Specialization_Delete.php?spid=$spid'>Delete</a>
 			</td>";
 			echo "</tr>";
 		}


 		 ?>
 	</table>
 </form>
