<?php 

include('connect.php');
include('sheader.php');
 ?>
 <form>
 	<table border="1" width=100% align="center">
 		<tr>
 			<th>Care Center ID</th>
 			<th>Care Center Name</th>
 			<th>Type</th>
 			<th>Location</th>
 			<th>Phone Number</th>
 			<th>Code</th>
 			<th>Function</th>
 		</tr>
 		<?php 
 		$select=mysqli_query($connection,"SELECT * FROM CareCenter");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$ccid=$data['CareCenterID'];
 			$ccname=$data['CareCenterName'];
 			$type=$data['Type'];
 			$loc=$data['Location'];
 			$phnum=$data['Phone_No'];
 			$cd=$data['Code'];
 			echo "<tr>";
 			echo "<td>$ccid</td>";
 			echo "<td>$ccname</td>";
 			echo "<td>$type</td>";
 			echo "<td>$loc</td>";
 			echo "<td>$phnum</td>";
 			echo "<td>$cd</td>";
 			echo "<td>
 			<a href='CareCenter_Update.php?ccid=$ccid'>Update</a> /
 			<a href='CareCenter_Delete.php?ccid=$ccid'>Delete</a>
 			</td>";
 			echo "</tr>";
 		}


 		 ?>
 	</table>
 </form>
