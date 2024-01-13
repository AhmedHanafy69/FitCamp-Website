<?php
include_once 'header1.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Facilites</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
  <title>Facilites</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
 <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> <link rel="stylesheet" href="./style.css">
  <style>
    .wow:first-child {
      visibility: hidden;
    }
    * {
      box-sizing: border-box;
      padding: 0;
      margin: 0;
    }

    body {
      font-family: 'Roboto', sans-serif;
      background: #333;
      color: white;
    }

    .container1 {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-gap: 10px;
    }

    .container1 > div {
      height: 350px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background-position: center;
      background-size: cover;
      background-attachment: fixed;

      transition: all ease 0.5s;
    }

    .container1 > div:hover {
      transform: scale(0.98);
      opacity: .7;
    }

    div h2 {
      font-size: 3em;
      margin: 10px;
    }

    div p {
      font-size: 2em;
    }

    .container1 > div:nth-of-type(1) {
      grid-column: 1 / 3;
    }

    .container1 > div:nth-of-type(6) {
      grid-column: 3 / 5;
    }

    .container1 > div:nth-of-type(9) {
      grid-column: 3 / 5;
    }

    .container1 > div:nth-of-type(10) {
      grid-column: 1 / 3;
    }



    .bg-1 {
      background-image: url(FACILITIES.png);



    }

    .bg-2 {
      background-image: url(FACILITIES.png);
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
   <div class='container1'>
     <div class='bg-1'>
       <a href="HomePage.php"><h2><span style="color:#C11325">Facilites</span></h2></a>
       <a href="HomePage.php"><p><span style="color:#ffffff">Available now at Fit Camp</span></p></a>
     </div>
     <div class='bg-1'>
     <h2><i class="fas fa-chart-area"></i></h2>
      <a href="GymArea.php"><p><span style="Color:#C11325">Gym Area</span></p></a>
     </div>
     <div class='bg-2'>
       <h2><i class="fas fa-dumbbell"></i></h2>
      <a href="Free Weights&Resistance.php"><p><span style="Color:#C11325">Free Weights & Resistance</span></p></a>
     </div>
     <div class='bg-1'>
       <h2><i class="fas fa-heartbeat"></i></h2>
       <a href="Fast&PowerAcademy.php"><p style="font-size:2.4vw"><span style="Color:#C11325">Fast&PowerAcademy</span></p></a>
     </div>
     <div class='bg-1'>
       <h2><i class="fas fa-running"></i></h2>

       <a href="Cardio.php"><p><span style="Color:#C11325">Cardio Equipment</span></p></a>
     </div>
     <div class='bg-2'>
       <h2><i class="fas fa-apple-alt"></i></i></h2>
       <a href="Nutrition.php"><p><span style="Color:#C11325">Nutrition</span></p></a>
     </div>
     <div class='bg-1'>
       <h2><i class="fas fa-biking"></i></i></h2>

       <a href="Functional Training Area.php"><p><span style="Color:#C11325">Functional Training Area</span></p></a>
     </div>
     <div class='bg-2'>
       <h2><i class="fas fa-map-marker"></i></i></h2>
       <a href="Studios.php"><p><span style="Color:#C11325">Studios</span></p></a>
     </div>
     <div class='bg-1'>
       <h2><i class="fas fa-dice-d6"></i></i></h2>

       <a href="Ice Pack.php"><p><span style="Color:#C11325">Ice Pack</span></p></a>
     </div>


   </div>
 </body>
