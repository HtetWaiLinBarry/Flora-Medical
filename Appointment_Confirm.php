<?php
session_start();
include ('connect.php');
if(isset($_POST['btnlogin']))
{
     $DoctorID=$_POST['txtdid'];
     $Email= $_POST['txtemail'];
     $Password= $_POST['txtpassword'];

     $select=" SELECT * FROM Doctor 
               where Email='$Email' 
               AND Password='$Password'
               AND DoctorID='$DoctorID'";

     $run=mysqli_query($connection,$select);
     $count=mysqli_num_rows($run);
    
     if ($count==0) 
     {
        $select="SELECT * FROM Doctor 
                Where Email='$Email' 
                AND Password='$Password'
                AND DoctorID='$DoctorID'";

        $Doctor_run=mysqli_query($connection,$select) ;
        $Doctor_count=mysqli_num_rows($Doctor_run);
        if ($Doctor_count>0) 
        {
            echo "<script>window.alert('Your account has been confirmed.')</script>";
            echo "<script>window.location='App_Arr.php?did=$DoctorID'</script>";
                
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
            echo "<script>window.alert('Your account has been confirmed.')
            
            window.location='App_Arr.php?did=$DoctorID'</script>";
            
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
      <p>Confirm your Account</p>
      <h3 class="heading">Account Confirmation</h3>
      <p>To view your appointments, we will need to reconfirm your account information</p>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
</body>
</html>
        <form action="" method="POST" class="row contact_form" novalidate ="novalidate">
        <table align="center" width="40%" height="50%">
            <br>
            <br>
            <tr>
                <td>Doctor ID</td>
                <td><input type="text" class="form-control" name="txtdid" placeholder="Enter your ID"></td>
            </tr>
            <tr>
                 <td>Email:</td>
                 <td><input type="text" class="form-control" name="txtemail" placeholder="Enter Email"></td>

            </tr>
            <tr>
                 <td>Password:</td>
                 <td><input type="password" class="form-control" name="txtpassword" placeholder="Enter Password"></td>

            </tr>
            <tr>
                 <td></td>
                 <td>
                    <input type="submit" name="btnlogin" class="btn submit_btn" value="Arrange Appointments">
                    <input type="reset" name="btncancel"  class="btn submit_btn" value="Cancel">
                </td>

            </tr>
        </table>
        </form>
                    </div>
                </div>
            </div>
        </section>
 <?php 
}
  ?> 

<!DOCTYPE html>
<html>
<head>
    <title> </title>
</head>
<body>
    <br>
    <br>
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="heading">What is this about?</h6>
      <p>As a medical service system, we provide every patient with a lot of interactions to finish their booking to the doctors available depending on the medical attention they require with little to no fees at all.</p>
      <p class="btmspace-30"></p>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="https://www.facebook.com"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" href="https://www.google.com"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a class="faicon-linkedin" href="https://www.instagram.com"><i class="fab fa-linkedin"></i></a></li>
        <li><a class="faicon-twitter" href="https://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Our top comments!</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#">This website is very good, I had so much troubling getting in touch with the practitioner I need and to be able to seek help like this is a world to me. Thank you! &hellip;</a></p>
            <time class="block font-xs" datetime="2045-04-06">Monday, 6<sup>th</sup> April 2020</time>
          </article>
        </li>
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#">A very good system and very helpful community. I recommended this website to my friends and they are thankful as well. &hellip;</a></p>
            <time class="block font-xs" datetime="2045-04-05">Saturday, 15<sup>th</sup> August 2020</time>
          </article>
        </li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Special Thanks to</h6>
      <p class="nospace btmspace-15">Flora Cares Team Members and the practitioners for making this happen.</p>
      <form method="post" action="#">
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2019 - All Rights Reserved - <a href="#">Flora Cares</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">Mark Robinson</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
</body>
</html>
   
