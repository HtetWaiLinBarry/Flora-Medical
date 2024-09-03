<?php 
include('connect.php');

if(isset($_REQUEST['ccid']))
{
	$CareCenterID=$_REQUEST['ccid'];
	$delete="DELETE From CareCenter WHERE CareCenterID='$CareCenterID'";
	$runquery=mysqli_query($connection,$delete);
	if($runquery)
{
	echo "<script>alert('Care Center has been successfully Deleted')</script>";
	echo "<script>location='CareCenter_View.php'</script>";
}
}
 ?>