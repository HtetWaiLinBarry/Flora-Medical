<?php 
include('connect.php');
if (isset($_POST['btnregister']))
{
	$roleid=$_POST['cboroleid'];
	$privid=$_POST['cboprivid'];
	$speid=$_POST['cbospeid'];
	$trid=$_POST['cbotrid'];
	$ccid=$_POST['cboccid'];
	$username=$_POST['txtuname'];
	$fname=$_POST['txtfname'];
	$lname=$_POST['txtlname'];
	$email=$_POST['txtemail'];
	$priv=$_POST['cboprivilege'];
	$spe=$_POST['cbospecial'];
	$field=$_POST['cbofield'];
	$language=$_POST['cbolanguage'];
	$l1=$_POST['cbol1'];
	$l2=$_POST['cbol2'];
	$stime=$_POST['txtstime'];
	$etime=$_POST['txtetime'];
	$nrc=$_POST['txtnrc'];
	$mid=$_POST['txtmid'];
	$certi=$_POST['txtcerti'];
	$credit=$_POST['cbocredit'];
	$license=$_POST['txtlic'];
	$location=$_POST['txtloc'];
	$phno=$_POST['txtphno'];
	$pass=$_POST['txtpass'];
	$ccode=$_POST['txtccode'];
	$country=$_POST['txtcountry'];
	$image=$_FILES['fileimage']['name'];
		if ($image) 
		{
			$folder="Images/";
			$path=$folder.$image;
			$copied=copy($_FILES['fileimage']['tmp_name'], $path);
		}

	
	$select="SELECT count(DoctorID) from Doctor where User_Name='$username'";
	$ret=mysqli_query($connection,$select);
	$count=mysqli_num_rows($ret);
	if($count>0)
	{

		$insert="INSERT INTO Doctor(RoleID,PrivilegeID,SpecialID,TimeRangeID,CareCenterID,User_Name,DFirstName,DLastName,Email,Privilege,Specialization,Field,Languages,Languages2,Languages3,StartTime,EndTime,NRC,Medical_ID,Certification,Credibility,License,Location,Phone_No,DoctorImage,Password,City_Code,Country) values('$roleid','$privid','$speid','$trid','$ccid','$username','$fname','$lname','$email','$priv','$spe','$field','$language','$l1','$l2','$stime','$etime','$nrc','$mid','$certi','$credit','$license','$location','$phno','$dimage','$pass','$ccode','$country')";

		$ret1=mysqli_query($connection,$insert);
		$row = mysqli_fetch_array($ret);

		if ($ret) 
		{
			
			
			echo "<script> alert('Doctor has been SUCCESSFULLY Registered!') </script>";
			echo "<script>location='Doctor_Login.php'</script>";
		}
		else
		{
			echo "<p>Something went wrong.".mysqli_error($connection)."</p>";
		}
	}
	else
	{
		echo "<p>Something's wrong!</p>";
	}

	
}

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Flora Cares</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
    <body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_left"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <li><i class="fas fa-phone rgtspace-5"></i> 01 5036950</li>
        <li><i class="far fa-envelope rgtspace-5"></i>lazykarma2002@gmail.com</li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
    <div class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
          <div>
            <form action="#" method="post">
            </form>
          </div>
        </li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
</div>
<div class="wrapper bgded overlay gradient" style="background-image:url('images/demo/backgrounds/doctor.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <p>Welcome to Flora Cares Medical Service</p>
      <h3 class="heading">Register Form</h3>
      <p>Seek medical attention from various practitioners and get the treatment you need!</p>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
</body>
</html>

<html>
<head>
	<title>Doctor Registration</title>
</head>
<body>


<form action="Doctor_Register.php" method="POST">
	<table align=left>

		<H1>Doctor Registration</H1>
		<tr>
			<td>Choose Role ID</td>
			<td>
				<select name="cboroleid">
					<?php  
					$RQuery="SELECT * FROM Role";
					$R_ret=mysqli_query($connection,$RQuery);
					$R_count=mysqli_num_rows($R_ret);

					for($i=0;$i<$R_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($R_ret);
						$RoleID=$arr['RoleID'];
						$RoleName=$arr['RoleName'];
						echo "<option value='$RoleID'>$RoleID ~ $RoleName </option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Choose Privilege ID</td>
			<td>
				<select name="cboprivid">
					<option>Choose Privilege ID</option>
					<?php  
					$PQuery="SELECT * FROM Privilege";
					$P_ret=mysqli_query($connection,$PQuery);
					$P_count=mysqli_num_rows($P_ret);

					for($i=0;$i<$P_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($P_ret);
						$PrivilegeID=$arr['PrivilegeID'];
						$PrivilegeName=$arr['PrivilegeName'];
						$Salary=$arr['Salary'];
						echo "<option value='$PrivilegeID'>$PrivilegeID ~ $PrivilegeName ~ $Salary </option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Choose Specialization</td>
			<td>
				<select name="cbospeid">
					<?php  
					$SQuery="SELECT * FROM Specialization";
					$S_ret=mysqli_query($connection,$SQuery);
					$S_count=mysqli_num_rows($S_ret);

					for($i=0;$i<$S_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($S_ret);
						$SpecialID=$arr['SpecialID'];
						$SpecialName=$arr['SpecialName'];
						echo "<option value='$SpecialID'>$SpecialID ~ $SpecialName</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Choose Time Range</td>
			<td>
				<select name="cbotrid">
					<?php  
					$TQuery="SELECT * FROM TimeRange";
					$T_ret=mysqli_query($connection,$TQuery);
					$T_count=mysqli_num_rows($T_ret);

					for($i=0;$i<$T_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($T_ret);
						$TimeRangeID=$arr['TimeRangeID'];
						$StartTime=$arr['StartTime'];
						$EndTime=$arr['EndTime'];
						echo "<option value='$TimeRangeID'>$StartTime ~ $EndTime</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Choose Care Center</td>
			<td>
				<select name="cboccid">
					<?php  
					$CcQuery="SELECT * FROM CareCenter";
					$Cc_ret=mysqli_query($connection,$CcQuery);
					$Cc_count=mysqli_num_rows($Cc_ret);

					for($i=0;$i<$Cc_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($Cc_ret);
						$CareCenterID=$arr['CareCenterID'];
						$CareCenterName=$arr['CareCenterName'];
						$Type=$arr['Type'];
						$Location=$arr['Location'];
						$Phnum=$arr['Phone_No'];
						echo "<option value='$CareCenterID'>$CareCenterName ~ $Type ~ $Phnum</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>User Name</td>
			<td><input type="text" name="txtuname"></td>
		</tr>
		<tr>
			<td>First Name</td>
			<td><input type="text" name="txtfname"></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="txtlname"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="txtemail"></td>
		</tr>
		<tr>
			<td>Upload Image</td>
			<td><input type="file" name="fileimage"></td>
		</tr>
		<tr>
			<td>Phone Number</td>
			<td><input type="text" name="txtphno"></td>
		</tr>
		<tr>
			<td>Choose Privilege</td>
			<td>
				<select name="cboprivilege">
					<?php  
					$PvQuery="SELECT * FROM Privilege";
					$Pv_ret=mysqli_query($connection,$PvQuery);
					$Pv_count=mysqli_num_rows($Pv_ret);

					for($i=0;$i<$Pv_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($Pv_ret);
						$PrivilegeID=$arr['PrivilegeID'];
						$PrivilegeName=$arr['PrivilegeName'];
						echo "<option value='$PrivilegeName'>$PrivilegeID ~ $PrivilegeName</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Choose Specialization</td>
			<td>
				<select name="cbospecial">
					<?php  
					$SpQuery="SELECT * FROM Specialization";
					$Sp_ret=mysqli_query($connection,$SpQuery);
					$Sp_count=mysqli_num_rows($Sp_ret);

					for($i=0;$i<$Sp_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($Sp_ret);
						$SpecialID=$arr['SpecialID'];
						$SpecialName=$arr['SpecialName'];
						echo "<option value='$SpecialName'>$SpecialID ~ $SpecialName</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Choose Field</td>
			<td>
				<select name="cbospecial">
					<?php  
					$SpfQuery="SELECT * FROM Specialization";
					$Spf_ret=mysqli_query($connection,$SpfQuery);
					$Spf_count=mysqli_num_rows($Spf_ret);

					for($i=0;$i<$Spf_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($Spf_ret);
						$SpecialName=$arr['SpecialName'];
						$Field=$arr['Field'];
						echo "<option value='$SpecialName'>$Field ~ $SpecialName</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>First Language</td>
			<td>
				<select name="cbolanguage">
					<option>Choose First Language</option>
					<option>English</option>
					<option>Italian</option>
					<option>Arabic</option>
					<option>Indian</option>
					<option>Mandarin</option>
					<option>French</option>
					<option>Thai</option>
					<option>Spanish</option>
					<option>Irish</option>
					<option>Bangladesh</option>
					<option>Burmese</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Second Language</td>
			<td>
				<select name="cbol1">
				<option>Choose Second Language</option>
					<option>None</option>
					<option>English</option>
					<option>Italian</option>
					<option>Arabic</option>
					<option>Indian</option>
					<option>Mandarin</option>
					<option>French</option>
					<option>Thai</option>
					<option>Spanish</option>
					<option>Irish</option>
					<option>Bangladesh</option>
					<option>Burmese</option>
			</td>
			</select>
		</tr>
		<tr>
			<td>Third Language</td>
			<td>
				<select name="cbol2">
				<option>Choose Third Language</option>
					<option>None</option>
					<option>English</option>
					<option>Italian</option>
					<option>Arabic</option>
					<option>Indian</option>
					<option>Mandarin</option>
					<option>French</option>
					<option>Thai</option>
					<option>Spanish</option>
					<option>Irish</option>
					<option>Bangladesh</option>
					<option>Burmese</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Start Time</td>
			<td>
				<select name="txtstime">
				<option>Choose Start Time</option>
					<option>6:00 AM</option>
					<option>7:00 AM</option>
					<option>8:00 AM</option>
					<option>9:00 AM</option>
					<option>10:00 AM</option>
					<option>11:00 AM</option>
					<option>12:00 AM</option>
					<option>1:00 PM</option>
					<option>2:00 PM</option>
					<option>3:00 PM</option>
					<option>4:00 PM</option>
					<option>5:00 PM</option>
					<option>6:00 PM</option>
					<option>7:00 PM</option>
					<option>8:00 PM</option>
					<option>9:00 PM</option>
					<option>10:00 PM</option>
					<option>11:00 PM</option>
					<option>12:00 AM</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>End Time</td>
			<td>
				<select name="txtetime">
				<option>Choose End Time</option>
					<option>8:00 AM</option>
					<option>9:00 AM</option>
					<option>10:00 AM</option>
					<option>11:00 AM</option>
					<option>12:00 AM</option>
					<option>1:00 PM</option>
					<option>2:00 PM</option>
					<option>3:00 PM</option>
					<option>4:00 PM</option>
					<option>5:00 PM</option>
					<option>6:00 PM</option>
					<option>7:00 PM</option>
					<option>8:00 PM</option>
					<option>9:00 PM</option>
					<option>10:00 PM</option>
					<option>11:00 PM</option>
					<option>12:00 AM</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>NRC</td>
			<td><input type="text" name="txtnrc"></td>
		</tr>
		<tr>
			<td>Medical ID </td>
			<td><input type="text" name="txtmid"></td>
		</tr>
		<tr>
			<td>Certification</td>
			<td><input type="text" name="txtcerti"></td>
		</tr>
		<tr>
			<td>Credibility</td>
			<td>
				<select name="cbocredit">
					<option>Choose Credibility</option>\
					<option>None</option>
					<option>20%</option>
					<option>40%</option>
					<option>60%</option>
					<option>80%</option>
					<option>100%</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>License</td>
			<td><input type="text" name="txtlic"></td>
		</tr>
		<tr>
			<td>Location</td>
			<td><input type="text" name="txtloc"></td>
		</tr>

		<tr>
			<td>City Code</td>
			<td><input type="text" name="txtccode"></td>
		</tr>

		<tr>
			<td>Country</td>
			<td><input type="text" name="txtcountry"></td>
		</tr>

		<tr>
			<td>Password</td>
			<td><input type="password" name="txtpass"></td>
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