<?php 
	include('connect.php');
	include('header.php');

if(isset($_POST['btnUpdate']))
{
		$pid=$_POST['cbopid'];
		$Docid=$_POST['cbodocid'];
		$moto=$_POST['txtmoto'];

		$update=mysqli_query($connection,"UPDATE Booking SET Moved_To='$moto' WHERE PatientID='$pid' AND DoctorID='$Docid'");
		if($update)
		{
			echo "<script>alert('Booking has been Moved.')</script>";
			echo "<script>location='App_Arr.php?did=$Docid'</script>";
		}
		else
		{
			echo mysqli_error($connection);
		}
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<table>
 		<tr>
 			<td>Choose Doctor ID</td>
			<td>
				<select name="cbodocid">
					<?php  
					$DQuery="SELECT * FROM Doctor";
					$D_ret=mysqli_query($connection,$DQuery);
					$D_count=mysqli_num_rows($D_ret);

					for($i=0;$i<$D_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($D_ret);
						$DoctorID=$arr['DoctorID'];
						$DFirstName=$arr['DFirstName'];
						$DLastName=$arr['DLastName'];
						$Email=$arr['Email'];
						echo "<option value='$DoctorID'>$DoctorID ~ $DFirstName $DLastName ~ #Email </option>";
					}
					?>
				</select>
			</td>
 		</tr>
 		<tr>
 			<td>Choose Patient ID</td>
			<td>
				<select name="cbopid">
					<?php  
					$PQuery="SELECT * FROM Patient";
					$P_ret=mysqli_query($connection,$PQuery);
					$P_count=mysqli_num_rows($P_ret);

					for($i=0;$i<$P_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($P_ret);
						$PatientID=$arr['PatientID'];
						$PFirstName=$arr['PFirstName'];
						$PLastName=$arr['PLastName'];
						$Email=$arr['Email'];
						echo "<option value='$PatientID'>$PatientID ~ $PFirstName $PLastName ~ #Email </option>";
					}
					?>
				</select>
			</td>
 		</tr>
 		<tr>
 			<td>Move Date To</td>
 			<td>
 				<input type="date" name="txtmoto" required/>
 			</td>
 		</tr>
 		<tr>
 			<td>
 				<input type="submit" name="btnUpdate" value="Change">
 				<input type="reset" name="btnCancel" value="Cancel">
 			</td>
 		</tr>
 	</table>
 </body>
 </html>