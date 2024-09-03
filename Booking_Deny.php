<?php 
	include('connect.php');

if(isset($_REQUEST['pid']))
{
	if(isset($_REQUEST['Docid']))
	{
	$pid=$_REQUEST['pid'];
	$Docid=$_REQUEST['Docid'];

	$update=mysqli_query($connection,"UPDATE Booking SET Status='Denied' WHERE PatientID='$pid' AND DoctorID='$Docid'");
	if($update)
	{
		echo "<script>alert('Booking has been Denied.')</script>";
		echo "<script>location='App_Arr.php?did=$Docid'</script>";
	}
	else
	{
		echo mysqli_error($connection);
	}
}
}
 ?>