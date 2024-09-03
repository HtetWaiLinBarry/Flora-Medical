<?php  
session_start();
session_destroy();
session_regenerate_id();
echo "<script>window.alert('Success : Logout')</script>";
echo "<script>window.location='Staff_Login.php'</script>";
?>