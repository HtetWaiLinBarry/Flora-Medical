<?php 
include('connect.php');
include('pheader.php');
 ?>
 <form>
 	<table border="1" width=100% align="center">
 		<tr>
 			<th>Care Center Name</th>
 			<th>Type</th>
 			<th>Location</th>
 			<th>Phone Number</th>
 		</tr>
 		<?php 
 		$select=mysqli_query($connection,"SELECT * FROM CareCenter");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$cname=$data['CareCenterName'];
 			$type=$data['Type'];
 			$location=$data['Location'];
 			$phno=$data['Phone_No'];
 			echo "<td>$cname</td>";
 			echo "<td>$type</td>";
 			echo "<td>$location</td>";
 			echo "<td>$phno</td>";
 			echo "</tr>";
 		}


 		 ?>
 	</table>
 </form>

 <?php include('footer.php'); ?>
