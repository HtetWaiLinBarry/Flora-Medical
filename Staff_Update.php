<?php 
	include('connect.php');
include('sheader.php');
if(isset($_REQUEST['sid']))
{
	$StaffID=$_REQUEST['sid'];
	$roleid=$_POST['cboroleid'];
	$privid=$_POST['cboprivid'];
	$username=$_POST['txtuname'];
	$fname=$_POST['txtfname'];
	$lname=$_POST['txtlname'];
	$email=$_POST['txtemail'];
	$phno=$_POST['txtphno'];
	$pass=$_POST['txtpass'];
	$add=$_POST['txtadd'];
	$rname=$_POST['cborolename'];
	$nrc=$_POST['txtnrc'];
	$ccode=$_POST['txtccode'];
	$country=$_POST['txtcountry'];
	$gen=$_POST['rdogen'];
	$priv=$_POST['cboprivilege'];
	$salary=$_POST['txtsalary'];


	$update=mysqli_query($connection,"UPDATE Staff SET RoleID='$roleid',PrivilegeID='$privid',User_Name='$username',FirstName='$fname',LastName='$lname',Email='$email',Phone_No='$phno',Password='$pass',Address='$Address',RoleName='$rname',NRC='$nrc',City_Code='$ccode',Country='$country',Gender='$gen',Privilege='$priv',Salary='$salary' WHERE StaffID='$StaffID'");
	if($update)
	{
		echo "<script>alert('Staff has been successfully updated!')</script>";
		echo "<script>location='Staff_View.php'</script>";
	}
	else
	{
		echo mysqli_error($connection);
	}
}




 ?>

<html>
<head>
	<title>Staff Update</title>
</head>
<body>
<form action="Staff_View.php" method="post">
			<fieldset>
	<table width="70%" align="center">
	<tr>
			<td>Choose Role ID</td>
			<td>
				<select name="cboroleid">
					<?php  
					$RQuery="SELECT * FROM Role";
					$R_ret=mysqli_query($connection,$RQuery);
					$R_count=mysqli_num_rows($R_ret);

					for($i=0;$i<$R_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($R_ret);
						$RoleID=$arr['RoleID'];
						$RoleName=$arr['RoleName'];
						echo "<option value='$RoleID'>$RoleID ~ $RoleName </option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Choose Privilege ID</td>
			<td>
				<select name="cboprivid">
					<option>Choose Privilege ID</option>
					<?php  
					$PQuery="SELECT * FROM Privilege";
					$P_ret=mysqli_query($connection,$PQuery);
					$P_count=mysqli_num_rows($P_ret);

					for($i=0;$i<$P_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($P_ret);
						$PrivilegeID=$arr['PrivilegeID'];
						$PrivilegeName=$arr['PrivilegeName'];
						$Salary=$arr['Salary'];
						echo "<option value='$PrivilegeID'>$PrivilegeID ~ $PrivilegeName ~ $Salary </option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Chosen Role</td>
			<td>
				<select name="cborolename">
					<?php  
					$RnQuery="SELECT * FROM Role WHERE RoleID='3'";
					$Rn_ret=mysqli_query($connection,$RnQuery);
					$Rn_count=mysqli_num_rows($Rn_ret);

					for($i=0;$i<$Rn_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($Rn_ret);
						$RoleID=$arr['RoleID'];
						$RoleName=$arr['RoleName'];
						echo "<option value='$RoleName'>$RoleID ~ $RoleName</option>";
					}
					?>
				</select>
			</td>
			
		</tr>
		<tr>
			<td>User Name</td>
			<td><input type="text" name="txtuname"></td>
		</tr>
		<tr>
			<td>First Name</td>
			<td><input type="text" name="txtfname"></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="txtlname"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="txtemail"></td>
		</tr>
		<tr>
			<td>Phone Number</td>
			<td><input type="text" name="txtphno"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="txtadd"></td>
		</tr>
		<tr>
			<td>NRC</td>
			<td><input type="text" name="txtnrc"></td>
		</tr>
		<tr>
			<td>City Code</td>
			<td><input type="text" name="txtccode"></td>
		</tr>
		<tr>
			<td>Country</td>
			<td><input type="text" name="txtcountry"></td>
		</tr>
		<tr>
			<td>Choose Gender</td>
			<td><input type="radio" name="rdogen" value="Male">Male</td>
			<td><input type="radio" name="rdogen" value="Female">Female</td>
		</tr>
		<tr>
			<td>Choose Privilege</td>
			<td>
				<select name="cboprivilege">
					<option>Choose Privilege</option>
					<?php  
					$PvQuery="SELECT * FROM Privilege";
					$Pv_ret=mysqli_query($connection,$PvQuery);
					$Pv_count=mysqli_num_rows($Pv_ret);

					for($i=0;$i<$Pv_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($Pv_ret);
						$PrivilegeID=$arr['PrivilegeID'];
						$PrivilegeName=$arr['PrivilegeName'];
						$Salary=$arr['Salary'];
						echo "<option value='$PrivilegeName'>$PrivilegeID ~ $PrivilegeName</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Salary</td>
			<td>
				<select name="txtsalary">
					<option>Choose Salary</option>
					<?php  
					$SQuery="SELECT * FROM Privilege";
					$S_ret=mysqli_query($connection,$SQuery);
					$S_count=mysqli_num_rows($S_ret);

					for($i=0;$i<$S_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($S_ret);
						$PrivilegeID=$arr['PrivilegeID'];
						$Salary=$arr['Salary'];
						echo "<option value='$Salary'>$PrivilegeID ~ $Salary</option>";
					}
					?>
				</select>
			</td>
		</tr>

		<tr>
			<td>Password</td>
			<td><input type="password" name="txtpass"></td>
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