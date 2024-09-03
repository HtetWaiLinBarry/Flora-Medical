<?php 
include('connect.php');
if(isset($_REQUEST['did']))
    {
    $did=$_REQUEST['did'];
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
        <li><a href="index.php"><i class="fas fa-home"></i></a></li>
        <li><a href="General_Help.php" title="Help Centre"><i class="far fa-life-ring"></i></a></li>
        <li><a href="Logout.php" title="Log Out"><i class="fas fa-sign-in-alt"></i></a></li>
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
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      <!-- ################################################################################################ -->
      <h1><a href="index.php">Flora Cares</a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a class="drop" href="#">Booking</a>
          <ul>
            <li><?php echo "<a href='App_Arr.php?did=$did'>Appointment Management</a>" ?></li>
          </ul>
        </li>
        <li><?php echo "<a href='General_Help.php?did=$did'>General Help</a>" ?></li>
        <li><?php echo "<a href='Doctor_Profile.php?did=$did'>View My Profile</a>" ?></li>
        <li><a href="Logout.php">Log Out</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </header>
</div>
<div class="wrapper bgded overlay gradient" style="background-image:url('images/demo/backgrounds/doctor.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <p>Welcome to Flora Cares Medical Service</p>
      <h3 class="heading">Explore</h3>
      <p>Seek medical attention from various practitioners and get the treatment you need!</p>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
</body>
</html>