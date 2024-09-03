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
 			<th>Patient ID</th>
 			<th>Booking ID</th>
 			<th>Desired Date</th>
 			<th>Desired Time</th>
 			<th>Medical Concern</th>
 			<th>Move_To</th>
 			<th>Status</th>
 			<th>Functions</th>
 		</tr>
 	<?php
 		if(isset($_REQUEST['pid']))
		{
		$pid=$_REQUEST['pid'];
 		$select=mysqli_query($connection,"SELECT * FROM Booking WHERE PatientID='$pid'");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$bid=$data['BookingID'];
 			$ddate=$data['DesiredDate'];
 			$dtime=$data['DesiredTime'];
 			$mco=$data['MedicalConcern'];
 			$mto=$data['Moved_To'];
 			$status=$data['Status'];
 			echo "<tr>";
 			echo "<td>$pid</td>";
 			echo "<td>$bid</td>";
 			echo "<td>$ddate</td>";
 			echo "<td>$dtime</td>";
 			echo "<td>$mco</td>";
 			echo "<td>$mto</td>";
 			echo "<td>$status</td>";
 			echo "<td>
 			<a href='Patient_Home.php?pid=$pid'>Take Me Back</a>
 			</td>";
 			echo "</tr>";
 		}
 	}


 		 ?>
 	</table>
 </form>
