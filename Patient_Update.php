<?php 
	include('connect.php');
include('sheader.php');
if(isset($_REQUEST['pid']))
{
	$PatientID=$_REQUEST['pid'];
	$PName=$_POST['txtpname'];
	$Username=$_POST['txtuname'];
	$Pfname=$_POST['txtfname'];
	$Plname=$_POST['txtlname'];
	$History=$_POST['txthistory']	;
	$Email=$_POST['txtemail'];
	$phno=$_POST['txtphno'];
	$add=$_POST['txtadd'];
	$pass=$_POST['txtpass'];
	$nrc=$_POST['txtnrc'];
	$ccode=$_POST['txtccode'];
	$country=$_POST['txtcountry'];
	$gender=$_POST['txtgen'];
	$age=$_POST['txtage'];
	$btype=$_POST['txtbtype'];
	$bio=$_POST['txtbio'];

	$update=mysqli_query($connection,"UPDATE Patient SET PatientName='$PName',User_Name='$Username',PFirstName='$Pfname',PLastName='$Plname',History='$History',Email='$Email',Phone_No='$phno',Address='$add',Password='$pass',NRC='$nrc',City_Code='$ccode',Country='$country',Gender='$gender',Age='$age',BloodType='$btype',Bio='$bio' WHERE PatientID='$PatientID'");
	if($update)
	{
		echo "<script>alert('Patient data has been successfully updated!')</script>";
		echo "<script>location='Patient_View.php'</script>";
	}
	else
	{
		echo mysqli_error($connection);
	}
}




 ?>

<html>
<head>
	<title>Care Center Update</title>
</head>
<body>
<form action="CareCenter_View.php" method="post">
			<fieldset>
	<table width="70%" align="center">
	<tr>
		<td>Patient Full Name</td>
		<td>
			<input type="text" name="txtpname" required/>
		</td>
	</tr>
	<tr>
		<td>Patient First Name</td>
		<td>
			<input type="text" name="txtfname" required/>
		</td>
	</tr>
	<tr>
		<td>Patient Last Name</td>
		<td>
			<input type="text" name="txtlname" required/>
		</td>
	</tr>
	<tr>
		<td>User Name</td>
		<td>
			<input type="text" name="txtuname" required/>
		</td>
	</tr>
	<tr>
		<td>History</td>
		<td>
			<input type="text" name="txthistory" required/>
		</td>
	</tr>
	<tr>
		<td>Email</td>
		<td>
			<input type="email" name="txtemail" required> 
		</td>
	</tr>
	<tr>
		<td>Phone Number</td>
		<td>
			<input type="text" name="txtphno" required>
		</td>
	</tr>
	<tr>
		<td>Address</td>
		<td>
			<input type="text" name="txtadd" required>
		</td>
	</tr>
	<tr>
		<td>Password</td>
		<td>
			<input type="password" name="txtpass" required>
		</td>
	</tr>
	<tr>
		<td>NRC</td>
		<td>
			<input type="text" name="txtnrc" required>
		</td>
	</tr>
	<tr>
		<td>City Code</td>
		<td>
			<input type="text" name="txtccode" required>
		</td>
	</tr>
	<tr>
		<td>Country</td>
		<td>
			<input type="text" name="txtcountry" required>
		</td>
	</tr>
	<tr>
		<td>Gender</td>
		<td>
			<input type="text" name="txtgen" required>
		</td>
	</tr>
	<tr>
		<td>Age</td>
		<td>
			<input type="text" name="txtage" required>
		</td>
	</tr>
	<tr>
		<td>Blood Type</td>
		<td>
			<input type="text" name="txtbtype" required>
		</td>
	</tr>
	<tr>
		<td>Bio</td>
		<td>
			<input type="text" name="txtbio" required>
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" name="btnUpdate" value="Update">
			<input type="reset" name="btnCancel" value="Cancel">
		</td>
	</tr>                                                                                                                                                                          
</table>
<legend align="center">Care Center Update</legend>
		</fieldset>
</form>
</body>
</html>