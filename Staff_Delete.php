<?php 
include('connect.php');

if(isset($_REQUEST['sid']))
{
	$StaffID=$_REQUEST['sid'];
	$delete="DELETE From StaffID WHERE StaffID='$StaffID'";
	$runquery=mysqli_query($connection,$delete);
	if($runquery)
{
	echo "<script>alert('Staff has been successfully Deleted')</script>";
	echo "<script>location='Staff_View.php'</script>";
}
}
 ?>