<?php 
	include('connect.php');
include('sheader.php');
 if(isset($_POST['btnUpdate']))
{
	$PrivilegeID=$_POST['cboPrivilegeID'];
	$PrivilegeName=$_POST['txtpriname'];
	$Salary=$_POST['txtsalary'];
	$update=mysqli_query($connection,"UPDATE Privilege SET PrivilegeName='$PrivilegeName', Salary='$Salary' WHERE PrivilegeID='$PrivilegeID'");
	if($update)
	{
		echo "<script>alert('Privilege has been successfully updated!')</script>";
		echo "<script>location='Privilege_View.php'</script>";
	}
	else
	{
		echo mysqli_error($connection);
	}
}




 ?>

<html>
<head>
	<title>Privilege Update</title>
</head>
<body>
<form action="Privilege_View.php" method="post">
			<fieldset>
	<table width="70%" align="center">
		<tr>
			<td>Select PrivilegeID ID</td>
			<td>
				<select name="cboPrivilegeID">
					<option>Choose Privilege</option>
					<?php  
					$RoQuery="SELECT * FROM Privilege";
					$Ro_ret=mysqli_query($connection,$RoQuery);
					$Ro_count=mysqli_num_rows($Ro_ret);

					for($i=0;$i<$Ro_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($Ro_ret);
						$PrivilegeID=$arr['PrivilegeID'];
						$PrivilegeName=$arr['PrivilegeName'];
						$Salary=$arr['Salary'];

						echo "<option value='$PrivilegeID'>$PrivilegeID ~ $PrivilegeName ~ $Salary</option>";
					}
					?>
				</select>
			</td>
		</tr>
	<tr>
	<td>Privilege Name</td>
	<td>
	<input type="text" name="txtpriname" required/>
	</td>
	</tr>

	<tr>
	<td>Salary</td>
	<td>
	<input type="text" name="txtsalary" required/>
	</td>
	</tr>
<tr>
		<td>
			<input type="submit" name="btnUpdate" value="Update">
			<input type="reset" name="btnCancel" value="Cancel">
		</td>
	</tr>                                                                                                                                                                          
</table>
<legend align="center">Role Update</legend>
		</fieldset>
</form>
</body>
</html>