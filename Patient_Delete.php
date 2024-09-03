<?php 
include('connect.php');

if(isset($_REQUEST['pid']))
{
	$PatientID=$_REQUEST['pid'];
	$delete="DELETE From Patient WHERE PatientID='$PatientID'";
	$runquery=mysqli_query($connection,$delete);
	if($runquery)
{
	echo "<script>alert('Patient has been successfully Deleted')</script>";
	echo "<script>location='Patient_View.php'</script>";
}
}
 ?>