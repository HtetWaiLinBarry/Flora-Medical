<?php 
include('connect.php');
include('header.php');
 ?>
 		<?php 
 		if(isset($_REQUEST['did']))
 		{
 		$DoctorID=$_REQUEST['did'];
 		$select=mysqli_query($connection,"SELECT * FROM Doctor WHERE DoctorID='$DoctorID'");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$dimage=$data['DoctorImage'];
 			$did=$data['DoctorID'];
 			$uname=$data['User_Name'];
 			$fname=$data['DFirstName'];
 			$lname=$data['DLastName'];
 			$email=$data['Email'];
 			$priv=$data['Privilege'];
 			$special=$data['Specialization'];
 			$field=$data['Field'];
 			$lang=$data['Languages'];
 			$lang2=$data['Languages2'];
 			$lang3=$data['Languages3'];
 			$stime=$data['StartTime'];
 			$etime=$data['EndTime'];
 			$nrc=$data['NRC'];
 			$mid=$data['Medical_ID'];
 			$certi=$data['Certification'];
 			$credit=$data['Credibility'];
 			$license=$data['License'];
 			$location=$data['Location'];
 			$phno=$data['Phone_No'];
 			$pass=$data['Password'];
 			$ccode=$data['City_Code'];
 			$country=$data['Country'];
 		}
 	}
 		 ?>
 	<form>
 		 <table width=40% align="center">
 		<tr>
 			<td>Doctor Image</td>
 			<?php echo "<td><image src='$dimage' width='100px' height='100px'></td>"; ?>
 		</tr>
 		<tr>
 			<td>Doctor ID</td>
 			<?php echo "<td>$did</td>" ?>
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
 			<td>Email</td>
 			<?php echo "<td>$email</td>"; ?>
 			
 		</tr>
 		<tr>
 			<td>Privilege</td>
 			<?php echo "<td>$priv</td>"; ?>
 			
 		</tr>
 		<tr>
 			<td>Specialization</td>
 			<?php echo "<td>$special</td>"; ?>
 			
 		</tr>	
 		<tr>
 			<td>Field</td>
 			<?php echo "<td>$field</td>"; ?>
 		</tr>
 		<tr>
 			<td>First Language</td>
 			<?php echo "<td>$lang</td>"; ?>
 		</tr>
 		<tr>
 			<td>Second Language</td>
			<?php echo "<td>$lang2</td>"; ?> 			
 		</tr>
 		<tr>
 			<td>Third Language</td>
 			<?php echo "<td>$lang3</td>"; ?>
 		</tr>
 		<tr>
 			<td>Start Time</td>
 			<?php echo "<td>$stime</td>"; ?>
 		</tr>
 		<tr>
 			<td>End Time</td>
 			<?php echo "<td>$etime</td>"; ?>
 		</tr>
 		<tr>
 			<td>NRC</td>
 			<?php echo "<td>$nrc</td>"; ?>
 		</tr>
 		<tr>
 			<td>Medical ID</td>
 			<?php echo "<td>$mid</td>"; ?>
 		</tr>
 		<tr>
 			<td>Certification</td>
 			<?php echo "<td>$certi</td>"; ?>
 		</tr>
 		<tr>
 			<td>Credibility</td>
 			<?php echo "<td>$credit</td>"; ?>
 		</tr>
 		<tr>
 			<td>License</td>
 			<?php echo "<td>$license</td>"; ?>
 		</tr>
 		<tr>
 			<td>Location</td>
 			<?php echo "<td>$location</td>"; ?>
 		</tr>
 		<tr>
 			<td>Phone Number</td>		
 			<?php echo "<td>$phno</td>"; ?>
 		</tr>
 		<tr>
 			<td>City Code</td>
 			<?php echo "<td>$ccode</td>"; ?>
 		</tr>
 		<tr>
 			<td>Country</td>
 			<?php echo "<td>$country</td>"; ?>
 		</tr>
 	</table>
 </form>

 <?php include ('footer.php'); ?>
