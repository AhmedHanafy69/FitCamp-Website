<?php
include_once 'header1.php';
 ?><html>
<head>
	<title>About Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
  <style>
    .wow:first-child {
      visibility: hidden;
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

		<div class="timer">

			<style>
			p {
				display: inline;
				font-size: 40px;
				margin-top: 0px;
				color: red;
			}
			h2{
				display: inline;
				font-size: 40px;
				margin-top: 0px;
				color: red;
				}


			</style>

<p>Time till the gym closes :</p>

					<p id="days"></p>
					<p id="hours"></p>
					<p id="mins"></p>
					<p id="secs"></p>
					<h2 id="end"></h2>
					<script>
					// The data/time we want to countdown to
					var countDownDate = new Date("jan 19, 2022 22:37:52").getTime();

					// Run myfunc every second
					var myfunc = setInterval(function() {

					var now = new Date().getTime();
					var timeleft = countDownDate - now;

					// Calculating the days, hours, minutes and seconds left
					var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
					var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
					var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
					var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);

					// Result is output to the specific element
					document.getElementById("days").innerHTML = days + "d "
					document.getElementById("hours").innerHTML = hours + "h "
					document.getElementById("mins").innerHTML = minutes + "m "
					document.getElementById("secs").innerHTML = seconds + "s "

					// Display the message when countdown is over
					if (timeleft < 0) {
							clearInterval(myfunc);
							document.getElementById("days").innerHTML = ""
							document.getElementById("hours").innerHTML = ""
							document.getElementById("mins").innerHTML = ""
							document.getElementById("secs").innerHTML = ""
							document.getElementById("end").innerHTML = "Closed";
					}
					}, 1000);
					</script>



			<!-- <p style="background-color:tomato;">hello</p> -->

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
<section class="AboutUs" id="AboutUs">
  	  <div class="container">
  	  	  <div class="content">
  	  	  	   <div class="box">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="team.jpg" alt="AboutUs" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Who Are We</h4>
                       	   <p>FIT CAMP is a team of dynamic, positive professionals looking to make a difference. We are passionate about what we do and are committed to dramatically improving the health and fitness for all our members

</p>
                       </div>
  	  	  	   	   </div>
               </div>

  	  	  	   	<div class="box">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="FUNCTIONAL.jpg" alt="AboutUs" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Philosophy</h4>
                       	   <p>FITCAMP was founded to integrate the mindset we learn through training and sport into everything we pursue, and we take the same approach in our facility and the services we provide. The modern era of technology and information is giving rise to a new generation of individuals who are hungry to learn and willing to take risks to explore what life could look like on their own terms. FITCAMP is a collective of individuals who share this excitement for what is now possible. </p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  	   <div class="box">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="Kickk.jpg" alt="AboutUs" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Our Goal</h4>
                       	   <p>We don't have clients; we have partners in success and allies in the pursuit of health. We'll never aim for short-lived transformations and summer bodies: we'll strive for lifelong change and sustainable lifestyle reform that lasts across all Egypt through our services. We aim to be the prominent fitness group in transforming Egyptians to become ambassadors of health and fitness</p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>

          </div>


  	  </div>




  </section>
