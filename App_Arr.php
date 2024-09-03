<?php 
include ('header.php');
include ('connect.php');
 ?>

 <form>
 	<table border="1" width=100% align="center">
 		<tr>
 			<th>Your ID</th>
 			<th>Patient's ID</th>
 			<th>Desired Time</th>
 			<th>Desired Date</th>
 			<th>Medical Concern</th>
 			<th>Status</th>
 			<th>Moved_To</th>
 			<th>Functions</th>
 		</tr>
 		<?php 
		if(isset($_REQUEST['did']))
		{
			$did=$_REQUEST['did'];
			$select=mysqli_query($connection,"SELECT * FROM Booking WHERE DoctorID='$did'");
 			$count=mysqli_num_rows($select);
 			for($i=0; $i < $count; $i++) {
				$data=mysqli_fetch_array($select);
 				$Docid=$data['DoctorID'];
 				$pid=$data['PatientID'];
 				$dtime=$data['DesiredTime'];
 				$ddate=$data['DesiredDate'];
 				$mcon=$data['MedicalConcern'];
 				$status=$data['Status'];
 				$mto=$data['Moved_To'];
 				echo "<tr>";
 				echo "<td>$Docid</td>";
 				echo "<td>$pid</td>";
 				echo "<td>$dtime</td>";
 				echo "<td>$ddate</td>";
 				echo "<td>$mcon</td>";
 				echo "<td>$status</td>";
 				echo "<td>$mto</td>";
 				echo "<td>
 				<a href='Booking_Confirm.php?pid=$pid&Docid=$Docid'>Confirm</a> /
 				<a href='Booking_Deny.php?pid=$pid&Docid=$Docid'>Deny</a> /
 				<a href='Booking_Move.php?pid=$pid&Docid=$Docid'>Move Date</a>
 				</td>";
 			}
		}

 ?>
