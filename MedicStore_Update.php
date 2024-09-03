<?php 
	include('connect.php');
include('sheader.php');
if(isset($_REQUEST['ccid']))
{
	$MedicStoreName=$_POST['txtname'];
	$Certification=$_POST['txtcerti'];
	$Location=$_POST['txtlocation'];
	$Phno=$_POST['txtphno'];
	$Code=$_POST['txtcode'];

	$update=mysqli_query($connection,"UPDATE MedicStore SET MedicStoreName='$MedicStoreName',Certification='$Certification',Location='$Location',Phone_No='$Phno',Code='$Code' WHERE MedicStoreID='$MedicStoreID'");
	if($update)
	{
		echo "<script>alert('Medic Store has been successfully updated!')</script>";
		echo "<script>location='MedicStore_View.php'</script>";
	}
	else
	{
		echo mysqli_error($connection);
	}
}




 ?>

<html>
<head>
	<title>Medic Store Update</title>
</head>
<body>
<form action="MedicStore_View.php" method="post">
			<fieldset>
	<table width="70%" align="center">
	<tr>
		<td>Medic Store Name</td>
		<td>
			<input type="text" name="txtname" required/>
		</td>
	</tr>
	<tr>
		<td>Certification</td>
		<td>
			<input type="text" name="txtcerti" required/>
		</td>
	</tr>
	<tr>
		<td>Location</td>
		<td>
			<input type="text" name="txtlocation" required/>
		</td>
	</tr>
	<tr>
		<td>Phone Number</td>
		<td>
			<input type="text" name="txtphno" required/>
		</td>
	</tr>
	<tr>
		<td>Code</td>
		<td>
			<input type="text" name="txtcode" required/>
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" name="btnUpdate" value="Update">
			<input type="reset" name="btnCancel" value="Cancel">
		</td>
	</tr>                                                                                                                                                                          
</table>
<legend align="center">Medic Store Update</legend>
		</fieldset>
</form>
</body>
</html>