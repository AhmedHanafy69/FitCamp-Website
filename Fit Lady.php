<?php
include_once 'header1.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Fat Loss</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <style>
    .wow:first-child {
      visibility: hidden;
    }
    * {
  box-sizing: border-box;
}

body {
  background: url(fitladyy.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;

  margin: 0;
  font-family: Arial;
  font-size: 17px;
}
.center {
    margin-left: auto;

    display: block
}


.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}


  </style>

</head>
<body>

 <!-- Start Header  -->
 <header>
 	 <div class="container">
 	 	<div class="logo">
 	 		 <a href="HomePage.php">Fit <span>Camp</span></a>
 	 	</div>


			<nav class="menu">
			<input type="checkbox" id="menuToggle">
		<label for="menuToggle" class="menu-icon">
			<i class="fa fa-bars"></i></label>
			<ul>


				<li><a href="Blog.php"><b>Blog</b></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<li><a href="AboutUS.php"><b>AboutUs</b></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<li><a href="Facilites.php"><b>Facilities</b></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<li><a href="Classes.php"><b>Classes</b></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<li><a href="Partners.php"><b>Partners</b></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<li><a href="HomePage.php#Contact"><b>Contact Us</b></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php

				if (isset($_SESSION["useruid"])) {
			echo "<li style='   font-family:sans-serif;   font-weight: 700;'><a href='profile.php'>Your Profile</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "<li style='   font-family:sans-serif;   font-weight: 700;'><a href='logoutinc.php' >Log out</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			}
			else {
			echo "<li style='   font-family:sans-serif;   font-weight: 700;'><a href='signup.php'>Sign up</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "<li style='   font-family:sans-serif;   font-weight: 700;'><a href='login.php'>Log in</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			}
				?>

			</ul>

 	 </div>
 </header>
 <body>
   <div>
 <video class="center" src="lady2.mp4" controls loop width="400" >⁪</video>
</div>



   <div class="content">
     <h1><span style="color:red">Fit </span>Lady</h1>

     <p>FitLady is a ladies only class for all fitness levels that provide full body workout through combing different elements of strength, cardio and endurance workouts in order to create full body transformation based on each client goal.</p>

   </div>



   </body>
   </html>
