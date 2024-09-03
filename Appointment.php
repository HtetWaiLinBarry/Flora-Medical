<?php 
	session_start();
	include('connect.php');
include('sheader.php');
	if (isset($_POST['btnsearch'])) 
	{
		$input=$_POST['txtsearchvalue'];
		$query="SELECT * FROM Doctor WHERE Field LIKE ('%$input%') OR Specialization LIKE ('%$input%') OR Languages LIKE ('%$input%') OR Languages2 LIKE ('%$input%') OR Languages3 LIKE ('%$input%')";
		$select=mysqli_query($connection,$query);
		$count=mysqli_num_rows($select);
	}
	else
	{
		$select=mysqli_query($connection,"SELECT * FROM Doctor");
		$count=mysqli_num_rows($select);
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Search Doctor</title>
 </head>
 <body>
 	<form action="Appointment.php" method="post">

 		<input type="text" name="txtsearchvalue" placeholder="Search">
 		<input type="submit" name="btnsearch" value="Search">

 		<?php 
 			for ($i=0; $i < $count; $i++) 
 			{ 
 				$row=mysqli_fetch_array($select);
 				$fname=$row['DFirstName'];
 				$lname=$row['DLastName'];
 				$Field=$row['Field'];
 				$Specialization=$row['Specialization'];
 				$dimage=$row['DoctorImage'];
 				$l1=$row['Languages'];
 				$l2=$row['Languages2'];
 				$l3=$row['Languages3'];
 				echo "<div>"; 
 					echo "<table border='1'> <br>";
 					echo "<tr>";
 					echo "<td>$fname $lname</td>";
 					echo "</tr>";
 					echo "<tr>";
 					echo "<td><image src='$dimage' width='300px' height='300px'></td>";
 					echo "<tr>";
 					echo "<td>$Field</td>";
 					echo "</tr>";
 					echo "<tr>";
 					echo "<td>$Specialization</td>";
 					echo "</tr>";
 					echo "<tr>";
 					echo "<td>$l1</td>";
 					echo "</tr>";
 					echo "<tr>";
 					echo "<td>$l2</td>";
 					echo "</tr>";
 					echo "<tr>";
 					echo "<td>$l3</td>";
 					echo "</tr>";
 					echo "<tr>";
 					echo "<td><a href='DoctorProfile.php' value='$did'>Book</a></td>";
 					echo "</tr>";
 					echo "</table>";
 				echo "</div>";
 			}
 		 ?>
 	</form>
 </body>
 </html>
