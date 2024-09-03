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
        <li><?php echo "<a href='Patient_Home.php?pid=$pid'><i class='fas fa-home'></i></a>"; ?></li>
        <li><?php echo "<a href='Help.php?pid=$pid'><i class='far fa-life-ring'></i></a>"; ?></li>
        <li><?php echo "<a href='Logout.php'><i class='fas fa-sign-in-alt'></i></a>"; ?></li>
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
      <h1><?php echo "<a href='Patient_Home.php?pid=$pid'>Flora Cares</a>" ?></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><?php echo "<a href='Patient_Home.php?pid=$pid'><i class='fas fa-home'></i></a>"; ?></li>
        <?php 
        echo "<li><a class='drop' href='#''>Pages</a>";
          echo "<ul>";
            echo "<li><a href='pDoctors.php?pid=$pid'>Our Doctors</a></li>";
            echo "<li><a href='pAbout_Us.php?pid=$pid'>About Us</a></li>";
            echo "<li><a href='pContact_Us.php?pid=$pid'>Contact Us</a></li>";
          echo "</ul>";
        echo "</li>";
        ?>
        <?php 
        echo "<li><a class='drop' href='#''>Booking</a>";
          echo "<ul>";
            echo "<li><a href='Booking.php?pid=$pid'>Book an Appointment</a></li>";
            echo "<li><a class='drop' href='#'>Booking Info</a>";
              echo "<ul>";
                echo "<li><a href='Help.php?pid=$pid'>Help</a></li>";
                echo "<li><a href='Care_Center.php?pid=$pid'>Care Center</a>Call</li>";
                echo "<li><a href='#?pid=$pid'>01 5543882</a></li>";
              echo "</ul>";
            echo "</li>";
          echo "</ul>";
        echo "</li>";
        ?>
        <?php echo "<li><a href='Service.php?pid=$pid'>Service</a></li>" ?>
        <?php echo "<li><a href='Patient_Logout.php?pid=$pid'>Log Out</a></li>" ?>
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