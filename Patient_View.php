<?php 

include('connect.php');
include('sheader.php');

 ?>
 <form>
 	<table border="1" width=100% align="center">
 		<tr>
 			<th>Patient ID</th>
 			<th>Patient Name</th>
 			<th>User Name</th>
 			<th>First Name</th>
 			<th>Last Name</th>
 			<th>History</th>
 			<th>Email</th>
 			<th>Phone Number</th>
 			<th>Address</th>
 			<th>Gender</th>
 			<th>Age</th>
 			<th>Blood Type</th>
 			<th>Bio</th>
 			<th>Functions</th>
 		</tr>
 		<?php 
 		$select=mysqli_query($connection,"SELECT * FROM Patient");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$pid=$data['PatientID'];
 			$uname=$data['User_Name'];
 			$pname=$data['PatientName'];
 			$pfname=$data['PFirstName'];
 			$plname=$data['PLastName'];
 			$his=$data['History'];
 			$email=$data['Email'];
 			$phno=$data['Phone_No'];
 			$add=$data['Address'];
 			$gen=$data['Gender'];
 			$age=$data['Age'];
 			$btype=$data['BloodType'];
 			$bio=$data['Bio'];
 			echo "<tr>";
 			echo "<td>$pid</td>";
 			echo "<td>$pname</td>";
 			echo "<td>$uname</td>";
 			echo "<td>$pfname</td>";
 			echo "<td>$plname</td>";
 			echo "<td>$his</td>";
 			echo "<td>$email</td>";
 			echo "<td>$phno</td>";
 			echo "<td>$add</td>";
 			echo "<td>$gen</td>";
 			echo "<td>$age</td>";
 			echo "<td>$btype</td>";
 			echo "<td>$bio</td>";
 			echo "<td>
 			<a href='Patient_Update.php?pid=$pid'>Update</a> /
 			<a href='Patient_Delete.php?pid=$pid'>Delete</a>
 			</td>";
 			echo "</tr>";
 		}


 		 ?>
 	</table>
 </form>
