<?php
session_start();
include ('connect.php'); 
if(isset($_POST['btnlogin']))
{
     $Email= $_POST['txtemail'];
     $Password= $_POST['txtpassword'];

     $select=" SELECT * FROM Staff 
               where Email='$Email' 
               AND Password='$Password'";

     $run=mysqli_query($connection,$select);
     $count=mysqli_num_rows($run);
    
     if ($count==0) 
     {
        $select="SELECT * FROM Staff 
                Where Email='$Email' 
                AND Password='$Password'";

        $Staff_run=mysqli_query($connection,$select) ;
        $Staff_count=mysqli_num_rows($Staff_run);
        if ($Staff_count>0) 
        {
            echo "<script>window.alert('Staff Login Successful')</script>";
            echo "<script>window.location='Staff_Home.php'</script>";
                
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
            $_SESSION['StaffID']=$row['StaffID'];
            echo "<script>window.alert('Staff Login Successful')
            
            window.location='Staff_Home.php'</script>";
            
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
      <p>Welcome to Flora Cares Medical Service</p>
      <h3 class="heading">Log In Form</h3>
      <p>Seek medical attention from various practitioners and get the treatment you need!</p>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
</body>
</html>
              
        <form action="" method="POST" class="row contact_form" novalidate ="novalidate">
        <table align="center">
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
                    <input type="submit" name="btnlogin" class="btn submit_btn" value="Login">
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


<?php include('footer.php'); ?> 
