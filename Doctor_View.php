<?php 

include('connect.php');
include('sheader.php');
 ?>
 <form>
 	<table border="1" width=100% align="center">
 		<tr>
 			<th>Doctor Image</th>
 			<th>Doctor ID</th>
 			<th>User Name</th>
 			<th>Full Name</th>
 			<th>Email</th>
 			<th>Privilege</th>
 			<th>Specialization</th>
 			<th>Field</th>
 			<th>First Language</th>
 			<th>Second Language</th>
 			<th>Third Language</th>
 			<th>Start Time</th>
 			<th>End Time</th>
 			<th>NRC</th>
 			<th>Medical ID</th>
 			<th>Location</th>
 			<th>Phone Number</th>
 			<th>City Code</th>
 			<th>Country</th>
 			<th>Functions</th>
 		</tr>
 		<?php 
 		$select=mysqli_query($connection,"SELECT * FROM Doctor");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$dimage=$data['DoctorImage'];
 			$did=$data['DoctorID'];
 			$uname=$data['User_Name'];
 			$fname=$data['DFirstName'];
 			$lname=$data['DLastName'];
 			$email=$data['Email'];
 			$priv=$data['Privilege'];
 			$special=$data['Specialization'];
 			$field=$data['Field'];
 			$lang=$data['Languages'];
 			$lang2=$data['Languages2'];
 			$lang3=$data['Languages3'];
 			$stime=$data['StartTime'];
 			$etime=$data['EndTime'];
 			$nrc=$data['NRC'];
 			$mid=$data['Medical_ID'];
 			$location=$data['Location'];
 			$phno=$data['Phone_No'];
 			$pass=$data['Password'];
 			$ccode=$data['City_Code'];
 			$country=$data['Country'];
 			echo "<tr>";
 			echo "<td><image src='$dimage' width='100px' height='100px'></td>";
 			echo "<td>$did</td>";
 			 echo "<td>
 			<a href='Doctor_Update.php?did=$did'>Update</a>
 			<a href='Doctor_Delete.php?did=$did'>Delete</a>
 			</td>";
 			echo "<td>$uname</td>";
 			echo "<td>$fname $lname</td>";
 			echo "<td>$email</td>";
 			echo "<td>$priv</td>";
 			echo "<td>$special</td>";
 			echo "<td>$field</td>";
 			echo "<td>$lang</td>";
 			echo "<td>$lang2</td>";
 			echo "<td>$lang3</td>";
 			echo "<td>$stime</td>";
 			echo "<td>$etime</td>";
 			echo "<td>$nrc</td>";
 			echo "<td>$mid</td>";
 			echo "<td>$location</td>";
 			echo "<td>$phno</td>";
 			echo "<td>$ccode</td>";
 			echo "<td>$country</td>";
 			echo "</tr>";
 		}


 		 ?>
 	</table>
 </form>
