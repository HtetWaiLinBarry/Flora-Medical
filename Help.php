 <?php 
include('connect.php');
if(isset($_REQUEST['pid']))
    {
    $pid=$_REQUEST['pid'];
    $select=mysqli_query($connection,"SELECT * FROM Patient WHERE PatientID='$pid'");
    $count=mysqli_num_rows($select);
    for($i=0; $i < $count; $i++) 
    {
      $data=mysqli_fetch_array($select);
      $paid=$data['PatientID'];
    }
    }
 ?>
<?php 
include ('pheader.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<td>
				How Do I Book?
			</td>
			<td>
				<td>To book an appointment, simple get to the Booking section and choose "Book an Appointment"</td>
				
				
				<td>To issue an appointment, the patient will have to choose the type of cure they need and the practitioner they want to book.</td>
			</td>
		</tr>
		<tr>
			<td>What is the Forums for?</td>
			<td>
				<td>The forums is for the details on the medications that the customers will need during their time of cure. These listings of medications are actually posted by our fellow doctors which can be very helpful to all other patients as well.</td>
			</td>
			<td>
				You can always hop onto our Forums page if you need any help in understanding the medicaiton you were given or maybe try to find some cure.
			</td>
		</tr>
		<tr>
			<td>If I have questions, where do I go?</td>
			<td>
				<td>You can always hop onto the customer service page whenever you want and we are always ready to help.</td>
				<td>
					If you need to consult in person, you can always come to our business's location shown in the customer service page.
				</td>
			</td>
		</tr>
	</table>
</body>
</html>



 <?php 
include ('footer.php');
  ?>