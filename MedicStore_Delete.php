<?php 
include('connect.php');

if(isset($_REQUEST['msid']))
{
	$MedicStoreID=$_REQUEST['msid'];
	$delete="DELETE From MedicStore WHERE MedicStoreID='$MedicStoreID'";
	$runquery=mysqli_query($connection,$delete);
	if($runquery)
{
	echo "<script>alert('Medic Store has been successfully Deleted')</script>";
	echo "<script>location='MedicStore_View.php'</script>";
}
}
 ?>