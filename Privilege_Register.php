<?php 
include('connect.php');
include('sheader.php');
if (isset($_POST['btnregister']))
{
	$priname=$_POST['txtpriname'];
	$salary=$_POST['txtsalary'];

	
	$select="SELECT count(PrivilegeID) from Privilege where PrivilegeName='$priname'";
	$ret=mysqli_query($connection,$select);
	$count=mysqli_num_rows($ret);
	if($count>0)
	{

		$insert="INSERT INTO Privilege(PrivilegeName,Salary)
			 	 values('$priname','$salary')";

		$ret1=mysqli_query($connection,$insert);
		$row = mysqli_fetch_array($ret);

		if ($ret) 
		{
			
			
			echo "<script> alert('Privilege has been SUCCESSFULLY Registered!') </script>";
			echo "<script>location='Privilege_View.php'</script>";
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
	<title>Privilege Registration</title>
</head>
<body>


<form action="Privilege_Register.php" method="POST">
	<table align=left>

		<H1>Privilege Registration</H1>
		<tr>
			<td>Privilege Name</td>
			<td><input type="text" name="txtpriname" placeholder="Enter Privilege Name"></td>
		</tr>
		<tr>
			<td>Salary</td>
			<td><input type="text" name="txtsalary" placeholder="Enter Salary"></td>
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