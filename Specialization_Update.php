<?php 
	include('connect.php');
include('sheader.php');
 if(isset($_POST['btnUpdate']))
{
	$SpecialID=$_POST['cboSpecialID'];
	$SpecialName=$_POST['txtsname'];
	$Field=$_POST['txtfield'];
	$update=mysqli_query($connection,"UPDATE Specialization SET SpecialName='$SpecialName',Field='$Field' WHERE SpecialID='$SpecialID'");
	if($update)
	{
		echo "<script>alert('Specialization has been successfully updated!')</script>";
		echo "<script>location='Specialization_View.php'</script>";
	}
	else
	{
		echo mysqli_error($connection);
	}
}




 ?>

<html>
<head>
	<title>Specialization Update</title>
</head>
<body>
<form action="Specialization_View.php" method="post">
			<fieldset>
	<table width="70%" align="center">
		<tr>
			<td>Select Specialization</td>
			<td>
				<select name="cboSpecialID">
					<option>Choose Specialization</option>
					<?php  
					$RoQuery="SELECT * FROM Specialization";
					$Ro_ret=mysqli_query($connection,$RoQuery);
					$Ro_count=mysqli_num_rows($Ro_ret);

					for($i=0;$i<$Ro_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($Ro_ret);
						$SpecialID=$arr['SpecialID'];
						$SpecialName=$arr['SpecialName'];
						$Field=$arr['Field'];

						echo "<option value='$SpecialID'>$SpecialID ~ $SpecialName ~ $Field</option>";
					}
					?>
				</select>
			</td>
		</tr>
	<tr>
		<td>Specialization</td>
		<td>
			<input type="text" name="txtsname" required/>
		</td>
	</tr>
	<tr>
		<td>Field</td>
		<td>
			<input type="text" name="txtfield">
		</td>
	</tr>
<tr>
		<td>
			<input type="submit" name="btnUpdate" value="Update">
			<input type="reset" name="btnCancel" value="Cancel">
		</td>
	</tr>                                                                                                                                                                          
</table>
<legend align="center">Specialization Update</legend>
		</fieldset>
</form>
</body>
</html>