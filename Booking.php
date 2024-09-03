<?php 
include('connect.php');
include('pheader.php');

if(isset($_REQUEST['pid']))
    {
    $pid=$_REQUEST['pid'];
    }

if (isset($_POST['btnregister']))
{
	$patientid=$_POST['txtpid'];
	$doctorid=$_POST['cbodid'];
	$privilegeid=$_POST['cboprid'];
	$specialid=$_POST['cbosid'];
	$timerangeid=$_POST['cbotid'];
	$carecenterid=$_POST['cboccid'];
	$sdate=$_POST['txtsdate'];
	$edate=$_POST['txtedate'];
	$mcon=$_POST['txtmcon'];
	
	$select="SELECT count(BookingID) from Booking where PatientID='$patientid'";
	$ret=mysqli_query($connection,$select);
	$count=mysqli_num_rows($ret);
	if($count>0)
	{

		$insert="INSERT INTO Booking(RoleID,PatientID,DoctorID,PrivilegeID,SpecialID,TimeRangeID,CareCenterID,DesiredTime,DesiredDate,MedicalConcern,Status,Moved_To) values ('2','$patientid','$doctorid','$privilegeid','$specialid','$timerangeid','$carecenterid','$sdate','$edate','$mcon','Unconfirmed','Unchanged')";

		$ret1=mysqli_query($connection,$insert);
		$row = mysqli_fetch_array($ret);

		if ($ret) 
		{
			
			
			echo "<script> alert('Your appointment has been successfully booked.') </script>";
			echo "<script>location='Patient_Home.php'</script>";
		}
		else
		{
			echo "<p>Something went wrong.".mysqli_error($connection)."</p>";
		}
	}
	else if($patientid!=$_POST['txtpid'])
	{
		echo "<p>Wrong ID".mysqli_error($connection)."</p>";
	}
	else
	{
		echo "<p>Something's wrong!</p>";
	}

	
}

 ?>

<html>
<head>
</head>
<body>
<form action="Booking.php" method="POST">
	<table align=left>

		<H1 align="center">Booking</H1>
		<tr>
			<td>Enter Patient ID</td>
			<td>
				<input type="text" name="txtpid" placeholder="Enter your Patient ID">
			</td>
			</td>
		</tr>
		<tr>
			<td>Choose Doctor</td>
			<td>
				<select name="cbodid">
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
						$Field=$arr['Field'];
						echo "<option value='$DoctorID'>$DoctorID ~ $DFirstName $DLastName ~ $Field</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Your Privilege</td>
			<td>
				<select name="cboprid">
					<?php  
					$PrQuery="SELECT * FROM Privilege";
					$Pr_ret=mysqli_query($connection,$PrQuery);
					$Pr_count=mysqli_num_rows($Pr_ret);

					for($i=0;$i<$Pr_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($Pr_ret);
						$PrivilegeID=$arr['PrivilegeID'];
						$PrivilegeName=$arr['PrivilegeName'];
						$Salary=$arr['Salary'];
						echo "<option value='$PrivilegeID'>$PrivilegeName</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Choose Specialization</td>
			<td>
				<select name="cbosid">
					<?php  
					$SpQuery="SELECT * FROM Specialization";
					$Sp_ret=mysqli_query($connection,$SpQuery);
					$Sp_count=mysqli_num_rows($Sp_ret);

					for($i=0;$i<$Sp_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($Sp_ret);
						$SpecialID=$arr['SpecialID'];
						$SpecialName=$arr['SpecialName'];
						echo "<option value='$SpecialID'>$SpecialID ~ $SpecialName</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Choose Time Range</td>
			<td>
				<select name="cbotid">
					<?php  
					$TQuery="SELECT * FROM TimeRange";
					$T_ret=mysqli_query($connection,$TQuery);
					$T_count=mysqli_num_rows($T_ret);

					for($i=0;$i<$T_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($T_ret);
						$TimeRangeID=$arr['TimeRangeID'];
						$StartTime=$arr['StartTime'];
						$EndTime=$arr['EndTime'];
						echo "<option value='$TimeRangeID'>$StartTime ~ $EndTime</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Choose Care Center</td>
			<td>
				<select name="cboccid">
					<?php  
					$CcQuery="SELECT * FROM CareCenter";
					$Cc_ret=mysqli_query($connection,$CcQuery);
					$Cc_count=mysqli_num_rows($Cc_ret);

					for($i=0;$i<$Cc_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($Cc_ret);
						$CareCenterID=$arr['CareCenterID'];
						$CareCenterName=$arr['CareCenterName'];
						$Type=$arr['Type'];
						$Location=$arr['Location'];
						$Phnum=$arr['Phone_No'];
						echo "<option value='$CareCenterID'>$CareCenterName ~ $Type ~ $Phnum</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Desired Time</td>
			<td>
				<select name="txtsdate">
				<option>Choose Desired Time (range)</option>
					<option>6:00 AM</option>
					<option>7:00 AM</option>
					<option>8:00 AM</option>
					<option>9:00 AM</option>
					<option>10:00 AM</option>
					<option>11:00 AM</option>
					<option>12:00 AM</option>
					<option>1:00 PM</option>
					<option>2:00 PM</option>
					<option>3:00 PM</option>
					<option>4:00 PM</option>
					<option>5:00 PM</option>
					<option>6:00 PM</option>
					<option>7:00 PM</option>
					<option>8:00 PM</option>
					<option>9:00 PM</option>
					<option>10:00 PM</option>
					<option>11:00 PM</option>
					<option>12:00 AM</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Desired Date</td>
			<td>
				<input type="date" name="txtedate">
			</td>
		</tr>
		<tr>
			<td>Medical Concern</td>
			<td>
				<input type="text" name="txtmcon">
			</td>
			
		</tr>


		<tr>
			<td></td>
			<td>
				<input type="submit" name="btnregister" value="Book"><br>
				<input type="reset" name="btncancel" value="Cancel">
			</td>
		</tr>
	</table>

</form>
</body>
</html>