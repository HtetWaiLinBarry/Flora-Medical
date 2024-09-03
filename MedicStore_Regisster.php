<?php 
include('connect.php');
include('sheader.php');
if (isset($_POST['btnregister']))
{
	$storename=$_POST['txtstorename'];
	$certi=$_POST['txtcerti'];
	$loc=$_POST['txtlocation'];
	$phno=$_POST['txtphno'];
	$code=$_POST['txtcode'];

	
	$select="SELECT count(MedicStoreID) from MedicStore where MedicStoreName='$MedicStoreName'";
	$ret=mysqli_query($connection,$select);
	$count=mysqli_num_rows($ret);
	if($count>0)
	{

		$insert="INSERT INTO MedicStore(MedicStoreName,Certification,Location,Phone_No,Code)
			 	 values('$storename','$certi','$loc','$phno','$code')";

		$ret1=mysqli_query($connection,$insert);
		$row = mysqli_fetch_array($ret);

		if ($ret) 
		{
			
			
			echo "<script> alert('Medic Store has been SUCCESSFULLY Registered!') </script>";
			echo "<script>location='MedicStore_View.php'</script>";
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
	<title>Medic Store Registration</title>
</head>
<body>


<form action="MedicStore_Register.php" method="POST">
	<table align=left>

		<H1>Medic Store Registration</H1>
		<tr>
			<td>Medic Store Name</td>
			<td><input type="text" name="txtstorename"></td>
		</tr>
		<tr>
			<td>Certification</td>
			<td><input type="text" name="txtcerti"></td>
		</tr>
		<tr>
			<td>Location</td>
			<td><input type="text" name="txtlocation"></td>
		</tr>
		<tr>
			<td>Phone Number</td>
			<td><input type="text" name="txtphno"></td>
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