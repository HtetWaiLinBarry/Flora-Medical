<?php 
include('connect.php');

if(isset($_REQUEST['tid']))
{
	$TimeRangeID=$_REQUEST['tid'];
	$delete="DELETE From TimeRange WHERE TimeRangeID='$TimeRangeID'";
	$runquery=mysqli_query($connection,$delete);
	if($runquery)
{
	echo "<script>alert('Time Range has been successfully Deleted')</script>";
	echo "<script>location='TimeRange_View.php'</script>";
}
}
 ?>