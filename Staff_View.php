<?php 

include('connect.php');
include('sheader.php');
 ?>
 <form>
 	<table border="1" width=100% align="center">
 		<tr>
 			<th>Staff ID</th>
 			<th>Role</th>
 			<th>Privilege</th>
 			<th>User Name</th>
 			<th>Full Name</th>
 			<th>Email</th>
 			<th>Phone Number</th>
 			<th>Address</th>
 			<th>NRC</th>
 			<th>City Code</th>
 			<th>Country</th>
 			<th>Gender</th>
 			<th>Salary per Month</th>
 			<th>Function</th>
 		</tr>
 		<?php 
 		$select=mysqli_query($connection,"SELECT * FROM Staff");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$sid=$data['StaffID'];
 			$rname=$data['RoleName'];
 			$pri=$data['Privilege'];
 			$uname=$data['User_Name'];
 			$fname=$data['FirstName'];
 			$lname=$data['LastName'];
 			$email=$data['Email'];
 			$phno=$data['Phone_No'];
 			$add=$data['Address'];
 			$nrc=$data['NRC'];
 			$ccode=$data['City_Code'];
 			$country=$data['Country'];
 			$gender=$data['Gender'];
 			$salary=$data['Salary'];
 			echo "<tr>";
 			echo "<td>$sid</td>";
 			echo "<td>$rname</td>";
 			echo "<td>$pri</td>";
 			echo "<td>$uname</td>";
 			echo "<td>$fname $lname</td>";
 			echo "<td>$email</td>";
 			echo "<td>$phno</td>";
 			echo "<td>$add</td>";
 			echo "<td>$nrc</td>";
 			echo "<td>$ccode</td>";
 			echo "<td>$country</td>";
 			echo "<td>$gender</td>";
 			echo "<td>$salary</td>";
 			echo "<td>
 			<a href='Staff_Update.php?sid=$sid'>Update</a> /
 			<a href='Staff_Delete.php?sid=$sid'>Delete</a>
 			</td>";
 			echo "</tr>";
 		}


 		 ?>
 	</table>
 </form>
