<?php 
include('connect.php');

if(isset($_REQUEST['rid']))
{
	$RoleID=$_REQUEST['rid'];
	$delete="DELETE From Role WHERE RoleID='$RoleID'";
	$runquery=mysqli_query($connection,$delete);
	if($runquery)
{
	echo "<script>alert('Role has been successfully Deleted')</script>";
	echo "<script>location='Role_View.php'</script>";
}
}
 ?>