<?php 

include('connect.php');
include('sheader.php');
 ?>
 <form>
 	<table border="1" width=100% align="center">
 		<tr>
 			<th>Medic Store ID</th>
 			<th>Medic Store Name</th>
 			<th>Certification</th>
 			<th>Location</th>
 			<th>Phone Number</th>
 			<th>Code</th>
 			<th>Function</th>
 		</tr>
 		<?php 
 		$select=mysqli_query($connection,"SELECT * FROM MedicStore");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$msid=$data['MedicStoreID'];
 			$msname=$data['MedicStoreName'];
 			$certi=$data['Certification'];
 			$loc=$data['Location'];
 			$phnum=$data['Phone_No'];
 			$cd=$data['Code'];
 			echo "<tr>";
 			echo "<td>$msid</td>";
 			echo "<td>$msname</td>";
 			echo "<td>$certi</td>";
 			echo "<td>$loc</td>";
 			echo "<td>$phnum</td>";
 			echo "<td>$code</td>";
 			echo "<td>
 			<a href='MedicStore_Update.php?msid=$msid'>Update</a> /
 			<a href='MedicStore_Delete.php?msid=$msid'>Delete</a>
 			</td>";
 			echo "</tr>";
 		}


 		 ?>
 	</table>
 </form>
