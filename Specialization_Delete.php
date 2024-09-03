<?php 
include('connect.php');

if(isset($_REQUEST['spid']))
{
	$SpecialID=$_REQUEST['spid'];
	$delete="DELETE From Specialization WHERE SpecialID='$SpecialID'";
	$runquery=mysqli_query($connection,$delete);
	if($runquery)
{
	echo "<script>alert('Specialization has been successfully Deleted')</script>";
	echo "<script>location='Specialization_View.php'</script>";
}
}
 ?>