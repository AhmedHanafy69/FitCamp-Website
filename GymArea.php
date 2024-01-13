<?php
include_once 'header1.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Gym Area</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
  <style>

    * {
  box-sizing: border-box;
}

body {
  background: url(GYMAREA.png) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;

  margin: 0;
  font-family: Arial;
  font-size: 17px;
}
body{position:absolute;top:0;left:0;}

.raw{
height:40vw;
width:100vw;
position:relative;
top:0;left:0;
margin-top:5vw;
margin-bottom:5vw;
}

.img{
    width:50%;
    height:80%;
    position:absolute;
    left:5%;
    top:10%;
    border-radius:15px;
}
.text{
    width:50%;
    height:80%;
    position:absolute;
    right:2%;
    top:10%;
}




.content {
  position: fixed;
	top: 10;
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
<br><br><br><br><br><br>
	 <div class="content" style="text-align: center">
	 	<h1><span style="color:red">Gym</span> Area</h1>

	 	<p> A 500sm space designed for our members to have access to all equipments they need for a fantastic workout.

	 </p>

	 <script language="JavaScript">
    var i = 0; var images = new Array();

    // LIST OF IMAGES
		images[0] ="fitcampo.jfif";


		images[1] = "gym1.jfif";
		images[2] = "gym2.jfif";
		images[3] = "gym3.jfif";

    function swapImage()
    {
    document.slideshow.src = images[i];
    if(i < images.length - 1) i++;
    else i = 0;
    setTimeout("swapImage()",3000);
    }
    window.onload=swapImage;
    </script>
    <img height="700" name="slideshow" src="https://via.placeholder.com/150" width="1200"/>






   </div>



   </body>
   </html>