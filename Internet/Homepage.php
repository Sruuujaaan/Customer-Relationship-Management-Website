<!DOCTYPE html>
<html>
<title>CRM For Internet Service Provider</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidenav to 120px */
.w3-sidenav {width: 180px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidenav (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body>
<form method="post">
<?php
	
	include("connect.php");
	 session_start();
	if(isset($_POST['adminlogin']))
	{
		 $uname=$_POST['auname'];
		   $pass=$_POST['apass'];
		   if(empty($uname)||empty($pass))
			   {
				   echo "<script>alert('Please Fill username and Password');</script>";
			   }
			   else
			   {
	   $sel="select * from admin where uname='$uname' and pwd='$pass'";
	   $result=$con->query($sel);
			
			if($row=mysqli_fetch_array($result))				
		   {
					$_SESSION['aid']=$row['uname'];
					$aid= $_SESSION['aid'];
				
					echo "<script>window.location.href='createplan.php'</script>";  
			}
			else
			{
				echo "<script>alert('Invalid Username or Password');</script>";
	      	}
   }
		
	}
	
	if(isset($_POST['emplogin']))
	{
		 $uname=$_POST['euname'];
		   $pass=$_POST['epass'];
		   if(empty($uname)||empty($pass))
			   {
				   echo "<script>alert('Please Fill username and Password');</script>";
			   }
			   else
			   {
	   $sel="select * from employee where email='$uname' and eid='$pass'";
	   $result=$con->query($sel);
			
			if($row=mysqli_fetch_array($result))				
		   {
					$_SESSION['eid']=$row['eid'];
					$eid= $_SESSION['eid'];
				
					echo "<script>window.location.href='solvecom.php'</script>";  
			}
			else
			{
				echo "<script>alert('Invalid Username or Password');</script>";
	      	}
   }
		
	}
	
	?>
<!-- Icon Bar (Sidenav - hidden on small screens) -->
<nav class="w3-sidenav w3-center w3-small w3-green w3-hide-small">
  <!-- Avatar image in top left corner -->
  <br><br><br><br>
  <a class="w3-padding-large  w3-hover-white" href="#">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a class="w3-padding-large  w3-hover-white" href="#about">
    <i class="fa fa-info w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  
  <a class="w3-padding-large w3-hover-white" href="#admin">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ADMIN</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <ul class="w3-navbar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <li class="w3-left" style="width:25% !important"><a href="#">HOME</a></li>
    <li class="w3-left" style="width:25% !important"><a href="#about">ABOUT</a></li>

    <li class="w3-left" style="width:25% !important"><a href="#admin">ADMIN</a></li>
  </ul>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center " id="home">
    <h1 class="w3-jumbo">CRM For Internet Service Provider</h1>
    <p>Choose your Internet service and plan</p>
    <img src="images/banner.jpg"  class="w3-image" width="800" height="800">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-green">About</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Some text about me. Some text about me. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
      adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Some text about me. Some text about me. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
      adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Some text about me. Some text about me. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
      adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    
	</p>
    
  
  <!-- Portfolio Section -->
  
   <div class="w3-padding-64 w3-content" id="admin">
   <br>
    <h2 class="w3-text-light-green">Admin Login</h2>
    <hr style="width:200px" class="w3-opacity">

     <p><input class="w3-input w3-padding-16" type="text" placeholder="Username"  name="auname" style='width:50%'></p>
      <p><input class="w3-input w3-padding-16" type="password" placeholder="Password" name="apass" style='width:50%'></p>
  <br><button class="w3-btn w3-light-green w3-padding-large" type="submit" name='adminlogin'>
         Login
        </button>
		
  </div>
  
  <div class="w3-padding-64 w3-content" id="employee">
   <br>
    <h2 class="w3-text-light-green">Employee Login</h2>
    <hr style="width:200px" class="w3-opacity">

     <p><input class="w3-input w3-padding-16" type="text" placeholder="Username"  name="euname" style='width:50%'></p>
      <p><input class="w3-input w3-padding-16" type="password" placeholder="Password" name="epass" style='width:50%'></p>
  <br><button class="w3-btn w3-light-green w3-padding-large" type="submit" name='emplogin'>
         Login
        </button>
		
  </div>
  
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <p class="w3-medium">Powered by <a href="" target="_blank" class="w3-hover-text-green">CRM For Internet Service</a></p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>
</form>
</body>
</html>
