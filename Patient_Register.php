<?php 
include('connect.php');
include('sheader.php');
if (isset($_POST['btnregister']))
{
	$patientname=$_POST['txtpatientname'];
	$username=$_POST['txtusername'];
	$pfirstname=$_POST['txtpfirstname'];
	$plastname=$_POST['txtplastname'];
	$history=$_POST['txthistory'];
	$email=$_POST['txtemail'];
	$phnum=$_POST['txtphnum'];
	$add=$_POST['txtadd'];
	$pass=$_POST['txtpass'];
	$nrc=$_POST['txtnrc'];
	$citycode=$_POST['txtcitycode'];
	$country=$_POST['txtcountry'];
	$gender=$_POST['rdogen'];
	$age=$_POST['txtage'];
	$bloodtype=$_POST['txtbloodtype'];
	$bio=$_POST['txtbio'];
	$bookinghistory=['txtbooking'];	

	
	$select="SELECT count(PatientID) from Patient where Email='$email'";
	$ret=mysqli_query($connection,$select);
	$count=mysqli_num_rows($ret);
	if($count>0)
	{

		$insert="INSERT INTO Patient(PatientName,User_Name,PFirstName,PLastName,History,Email,Phone_No,Address,Password,NRC,City_Code,Country,Gender,Age,BloodType,Bio)
			 	 values('$patientname','$username','$pfirstname','$plastname','$history','$email','$phnum','$add','$pass','$nrc','$citycode','$country','$gender','$age','$bloodtype','$bio')";

		$ret1=mysqli_query($connection,$insert);
		$row = mysqli_fetch_array($ret);

		if ($ret1) 
		{
			
			
			echo "<script> alert('Patient has registered SUCCESSFULLY!') </script>";
			echo "<script>location='Patient_Login.php'</script>";
		}
		else
		{
			echo "<p>Something went wrong.".mysqli_error($connection)."</p>";
		}
	}
	else
	{
		echo "<p>Choose Another Email</p>";
	}

	
}

 ?>

<html>
<head>
	<title>Patient Registration</title>
</head>
<body>


<form action="Patient_Register.php" method="POST" >
	<table align=Left>

		<H1>Patient Registration</H1>
		<tr>
			<td>Patient First Name</td>
			<td><input type="text" name="txtpfirstname" placeholder="Enter First Name Here"></td>
		</tr>
		<tr>
			<td>Patient Last Name</td>
			<td><input type="text" name="txtplastname" placeholder="Enter Last Name Here"></td>
		</tr>
		<tr>
			<td>Patient Full Name</td>
			<td><input type="text" name="txtpatientname" placeholder="Enter Full Name" required></td>
		</tr>
		<tr>
			<td>UserName</td>
			<td><input type="text" name="txtusername" placeholder="Enter User Name"></td>
		</tr>	
		<tr>
			<td>Email</td>
			<td><input type="email" name="txtemail" placeholder="Enter Email" required></td>
		</tr>
		<tr>
			<td>Phone Number</td>
			<td><input type="text" name="txtphnum" placeholder="Enter your Phone Number"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="txtadd" placeholder="Enter your Address"></td>
		</tr>
		<tr>
			<td>History</td>
			<td><input type="text" name="txthistory" placeholder="Your History"></td>
		</tr>
		<tr>
			<td>NRC</td>
			<td><input type="text" name="txtnrc" placeholder="Enter your NRC"></td>
		</tr>
		<tr>
			<td>City Code</td>
			<td><input type="text" name="txtcitycode" placeholder="Your respective city code"></td>
		</tr>
		<tr>
			<td>Country</td>
			<td><input type="text" name="txtcountry" placeholder="Your country"></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><input type="radio" name="rdogen" value="Male">Male</td>
			<td><input type="radio" name="rdogen" value="Female">Female</td>
		</tr>
		<tr>
			<td>Age</td>
			<td><input type="text" name="txtage" placeholder="Your Age"></td>
		</tr>
		<tr>
			<td>Blood Type</td>
			<td><input type="text" name="txtbloodtype" placeholder="Your Blood Type"></td>
		</tr>
		<tr>
			<td>Bio</td>
			<td><input type="text" name="txtbio" placeholder="Please Enter Your Biography"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="txtpass" placeholder="Enter Password" required></td>
		</tr>
		
		
		<tr>
			<td></td>
			<td>
				<input type="submit" name="btnregister" value="Register">
				<input type="reset" name="btncancel" value="Cancel">
			</td>
		</tr>

	</table>

</form>
</body>
</html>