<?php 
include('connect.php');
include('sheader.php');

if (isset($_POST['btnregister']))
{
	$centername=$_POST['txtname'];
	$type=$_POST['txttype'];
	$location=$_POST['txtlocation'];
	$phnum=$_POST['txtphnum'];
	$code=$_POST['txtcode'];

	
	$select="SELECT count(CareCenterID) from CareCenter where CareCenterName='$centername'";
	$ret=mysqli_query($connection,$select);
	$count=mysqli_num_rows($ret);
	if($count>0)
	{

		$insert="INSERT INTO CareCenter(CareCenterName,Type,Location,Phone_No,Code)
			 	 values('$centername','$type','$location','$phnum','$code')";

		$ret1=mysqli_query($connection,$insert);
		$row = mysqli_fetch_array($ret);

		if ($ret) 
		{
			
			
			echo "<script> alert('Care Center has been SUCCESSFULLY Registered!') </script>";
			echo "<script>location='CareCenter_View.php'</script>";
		}
		else
		{
			echo "<p>Something went wrong.".mysqli_error($connection)."</p>";
		}
	}
	else
	{
		echo "<p>Something's wrong!</p>";
	}

	
}

 ?>

<html>
<head>
	<title>Care Center Registration</title>
</head>
<body>


<form action="CareCenter_Register.php" method="POST">
	<table align=left>

		<H1>Care Center Registration</H1>
		<tr>
			<td>Care Center Name</td>
			<td><input type="text" name="txtname"></td>
		</tr>
		<tr>
			<td>Type</td>
			<td><input type="text" name="txttype"></td>
		</tr>
		<tr>
			<td>Location</td>
			<td><input type="text" name="txtlocation"></td>
		</tr>
		<tr>
			<td>Phone Number</td>
			<td><input type="text" name="txtphnum"></td>
		</tr>
		<tr>
			<td>Code</td>
			<td><input type="text" name="txtcode"></td>
		</tr>


		<tr>
			<td></td>
			<td>
				<input type="submit" name="btnregister" value="Register">
				<input type="reset" name="btncancel" value="Cancel">
			</td>
		</tr>
	</table>

</form>
</body>
</html>