<?php 
include('connect.php');
include('sheader.php');
if (isset($_POST['btnregister']))
{
	$rolename=$_POST['txtrolename'];

	
	$select="SELECT count(RoleID) from Role where RoleName='$rolename'";
	$ret=mysqli_query($connection,$select);
	$count=mysqli_num_rows($ret);
	if($count>0)
	{

		$insert="INSERT INTO Role(RoleName)
			 	 values('$rolename')";

		$ret1=mysqli_query($connection,$insert);
		$row = mysqli_fetch_array($ret);

		if ($ret1) 
		{
			
			
			echo "<script> alert('Role has been SUCCESSFULLY Registered!') </script>";
			echo "<script>location='Role_View.php'</script>";
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
	<title>Role Registration</title>
</head>
<body>


<form action="Role_Register.php" method="POST">
	<table align=left>

		<H1>Role Registration</H1>
		<tr>
			<td>Role Name</td>
			<td><input type="text" name="txtrolename" placeholder="Enter Role Name"></td>
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