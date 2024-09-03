<?php 
include('connect.php');
include('sheader.php');
if (isset($_POST['btnregister']))
{
	$specialname=$_POST['txtspecialname'];
	$field=$_POST['txtfield'];

	
	$select="SELECT count(SpecialID) from Specialization where SpecialName='$specialname'";
	$ret=mysqli_query($connection,$select);
	$count=mysqli_num_rows($ret);
	if($count>0)
	{

		$insert="INSERT INTO Specialization(SpecialName,Field)
			 	 values('$specialname','$field')";

		$ret1=mysqli_query($connection,$insert);
		$row = mysqli_fetch_array($ret);

		if ($ret) 
		{
			
			
			echo "<script> alert('Specialization has been SUCCESSFULLY Registered!') </script>";
			echo "<script>location='Specialization_View.php'</script>";
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
	<title>Specialization Registration</title>
</head>
<body>


<form action="Specialization_Register.php" method="POST">
	<table align=left>

		<H1>Specialization Registration</H1>
		<tr>
			<td>Specialization</td>
			<td><input type="text" name="txtspecialname"></td>
		</tr>
		<tr>
			<td>Field</td>
			<td><input type="text" name="txtfield"></td>
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