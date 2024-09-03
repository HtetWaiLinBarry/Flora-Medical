<?php 
include('connect.php');
include('header.php');
 ?>
 		<?php 
 		if(isset($_REQUEST['StaffID']))
 		{
 		$StaffID=$_REQUEST['StaffID'];
 		$select=mysqli_query($connection,"SELECT * FROM Staff WHERE StaffID='$StaffID'");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$sid=$data['StaffID'];
 			$role=$data['RoleName'];
 			$uname=$data['User_Name'];
 			$fname=$data['FirstName'];
 			$lname=$data['LastName'];
 			$gen=$data['Gender'];
 		}
 	}
 		 ?>
 	<form>
 		 <table width=40% align="center">
 		<tr>
 			<td>Staff ID</td>
 			<?php echo "<td>$sid</td>" ?>
 		</tr>
 		<tr>
 			<td>Role</td>
 			<?php echo "<td>$role</td>"; ?>
 		</tr>
 		<tr>
 			<td>User Name</td>
 			<?php echo "<td>$uname</td>"; ?>
 		</tr>
 		<tr>
 			<td>Full Name</td>
 			<?php echo "<td>$fname $lname</td>"; ?>
 		</tr>
 		<tr>
 			<td>Gender</td>
 			<?php echo "<td>$gen</td>"; ?>
 		</tr>
 	</table>
 </form>

 <?php include ('footer.php'); ?>
