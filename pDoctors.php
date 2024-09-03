<?php 

include('connect.php');
include('pheader.php');
 ?>
 <?php 
include('connect.php');
if(isset($_REQUEST['pid']))
    {
    $pid=$_REQUEST['pid'];
    $select=mysqli_query($connection,"SELECT * FROM Patient WHERE PatientID='$pid'");
    $count=mysqli_num_rows($select);
    for($i=0; $i < $count; $i++) 
    {
      $data=mysqli_fetch_array($select);
      $paid=$data['PatientID'];
    }
    }
 ?>
 <form>
 	<table border="1" width=100% align="center">
 		<tr>
 			<th>Doctor Image</th>
 			<th>User Name</th>
 			<th>Full Name</th>
 			<th>Email</th>
 			<th>Specialization</th>
 			<th>Field</th>
 			<th>First Language</th>
 			<th>Second Language</th>
 			<th>Third Language</th>
 			<th>Start Time</th>
 			<th>End Time</th>
 			<th>Functions</th>
 		</tr>
 		<?php 
 		$select=mysqli_query($connection,"SELECT * FROM Doctor");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$did=$data['DoctorID'];
 			$dimage=$data['DoctorImage'];
 			$uname=$data['User_Name'];
 			$fname=$data['DFirstName'];
 			$lname=$data['DLastName'];
 			$email=$data['Email'];
 			$special=$data['Specialization'];
 			$field=$data['Field'];
 			$lang=$data['Languages'];
 			$lang2=$data['Languages2'];
 			$lang3=$data['Languages3'];
 			$stime=$data['StartTime'];
 			$etime=$data['EndTime'];
 			echo "<tr>";
 			echo "<td><image src='$dimage' width='100px' height='100px'></td>";
 			echo "<td>$uname</td>";
 			echo "<td>$fname $lname</td>";
 			echo "<td>$email</td>";
 			echo "<td>$special</td>";
 			echo "<td>$field</td>";
 			echo "<td>$lang</td>";
 			echo "<td>$lang2</td>";
 			echo "<td>$lang3</td>";
 			echo "<td>$stime</td>";
 			echo "<td>$etime</td>";
 			echo "<td>
 			<a href='Doctor_Profile.php?did=$did'>View</a>
 			</td>";
 			echo "</tr>";
 		}


 		 ?>
 	</table>
 </form>

 <?php include('footer.php'); ?>
