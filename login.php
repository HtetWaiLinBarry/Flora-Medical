<?php
session_start();
include ('connect.php');
if(isset($_POST['btnlogin']))
{
     $Email= $_POST['txtemail'];
     $Password= $_POST['txtpassword'];

     $select=" SELECT * FROM Doctor 
               where Email='$Email' 
               AND Password='$Password'";

     $run=mysqli_query($connection,$select);
     $count=mysqli_num_rows($run);
    
     if ($count==0) 
     {
        $select="SELECT * FROM Doctor 
                Where Email='$Email' 
                AND Password='$Password'";

        $Doctor_run=mysqli_query($connection,$select) ;
        $Doctor_count=mysqli_num_rows($Doctor_run);
        if ($Doctor_count>0) 
        {
            echo "<script>window.alert('Doctor Login Successful')</script>";
            echo "<script>window.location='Doctor_Home.php'</script>";
                
        }
        else
        {
            if(isset($_SESSION['count']))

           {
            $_SESSION['count']=1;
           }
        else
        {
            $_SESSION['count']+=1;
        }

        if($_SESSION['count']>=3)
        {
            echo "<script>window.alert('Login failed. Try again.')</script>";
        }
            echo "<script>window.alert('Incorrect Data')</script>";
        }
     }
     else
     {
            $row = mysqli_fetch_array($run);
            $_SESSION['DoctorID']=$row['DoctorID'];
            echo "<script>window.alert('Doctor Login Successful')
            
            window.location='Doctor_Home.php'</script>";
            
     }
}

  if (isset($_SESSION['check']))
  {
    echo "<p><time id='countdown'>3:00</time></p>";
    echo "<p style='font-size:50px;'>You will be able to access the Website after 3 minutes</p>";
    unset($_SESSION['check']); 
  }
  else
  {

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="txtemail">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="txtpassword">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<input type="submit" name="btnlogin">
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="Doctor_Register.php">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

<?php 
}
?>