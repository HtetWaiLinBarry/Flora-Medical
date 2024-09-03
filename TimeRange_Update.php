<?php 
	include('connect.php');
include('sheader.php');
 if(isset($_POST['btnUpdate']))
{
	$TimeRangeID=$_POST['cboTimeRangeID'];
	$StartTime=$_POST['txtstart'];
	$EndTime=$_POST['txtend'];
	$Duration=$_POST['duration'];
	$update=mysqli_query($connection,"UPDATE TimeRange SET StartTime='$StartTime',EndTime='$EndTime',Duration='$Duration' WHERE TimeRangeID='$TimeRangeID'");
	if($update)
	{
		echo "<script>alert('Role has been successfully updated!')</script>";
		echo "<script>location='Role_View.php'</script>";
	}
	else
	{
		echo mysqli_error($connection);
	}
}




 ?>

<html>
<head>
	<title>Role Update</title>
</head>
<body>
<form action="Role_View.php" method="post">
			<fieldset>
	<table width="70%" align="center">
		<tr>
			<td>Select Time Range ID</td>
			<td>
				<select name="cboTimeRangeID">
					<option>Choose Time Range</option>
					<?php  
					$RoQuery="SELECT * FROM TimeRange";
					$Ro_ret=mysqli_query($connection,$RoQuery);
					$Ro_count=mysqli_num_rows($Ro_ret);

					for($i=0;$i<$Ro_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($Ro_ret);
						$TimeRangeID=$arr['TimeRangeID'];
						$StartTime=$arr['StartTime'];
						$EndTime=$arr['EndTime'];
						$Duration=$arr['Duration'];

						echo "<option value='$TimeRangeID'>$TimeRangeID ~ $StartTime ~ $EndTime ~ $Duration</option>";
					}
					?>
				</select>
			</td>
		</tr>
	<tr>
	<td>Role Name</td>
	<td>
	<input type="text" name="txtrolename" required/>
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