<?php 
include('connect.php');
include('sheader.php');
if (isset($_POST['btnregister']))
{
	$starttime=$_POST['txtstarttime'];
	$endtime=$_POST['txtendtime'];
	$duration=$_POST['duration'];

	
	$select="SELECT count(TimeRangeID) from TimeRange where Duration='$duration'";
	$ret=mysqli_query($connection,$select);
	$count=mysqli_num_rows($ret);
	if($count>0)
	{

		$insert="INSERT INTO TimeRange(StartTime,EndTime,Duration)
			 	 values('$starttime','$endtime','$duration')";

		$ret1=mysqli_query($connection,$insert);
		$row = mysqli_fetch_array($ret);

		if ($ret) 
		{
			
			
			echo "<script> alert('Time Range has been SUCCESSFULLY Registered!') </script>";
			echo "<script>location='TimeRange_View.php'</script>";
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
	<title>Time Range Registration</title>
</head>
<body>


<form action="TimeRange_Register.php" method="POST">
	<table align=left>

		<H1>Time Range Registration</H1>
		<tr>
			<td>Time Range Start Time</td>
			<td><input type="date" name="txtstarttime"></td>
		</tr>
		<tr>
			<td>Time Range End Time</td>
			<td><input type="date" name="txtendtime"></td>
		</tr>
		<tr>
			<td>Duration</td>
			<td><input type="text" name="duration"></td>
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