<?php 
	include('connect.php');
include('sheader.php');
if(isset($_REQUEST['ccid']))
{
	$CareCenterName=$_POST['txtname'];
	$Type=$_POST['txttype'];
	$Location=$_POST['txtlocation'];
	$Phno=$_POST['txtphno'];
	$Code=$_POST['txtcode'];

	$update=mysqli_query($connection,"UPDATE CareCenter SET CareCenterName='$CareCenterName',Type='$Type',Location='$Location',Phone_No='$Phno',Code='$Code' WHERE CareCenterID='$CareCenterID'");
	if($update)
	{
		echo "<script>alert('Care Center has been successfully updated!')</script>";
		echo "<script>location='CareCenter_View.php'</script>";
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
		<td>Care Center Name</td>
		<td>
			<input type="text" name="txtname" required/>
		</td>
	</tr>
	<tr>
		<td>Type</td>
		<td>
			<input type="text" name="txttype" required/>
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
<legend align="center">Care Center Update</legend>
		</fieldset>
</form>
</body>
</html>