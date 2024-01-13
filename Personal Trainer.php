<?php
include_once 'header1.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Personal Trainer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
  <style>
    .wow:first-child {
      visibility: hidden;
    }


    * {
    	box-sizing: border-box;

    }

    body {
    	font-family: sans-serif;
    	overflow: hidden;
    }



    label {
    	background: #444;
    	color: #fff;
    	transition: transform 400ms ease-out;
    	display: inline-block;
      min-height: 100%;
    	width: 100vw;
    	height: 200vh;
    	position: relative;
    	z-index: 1;
    	text-align: center;
    	line-height: 100vh;
    }

    form {
    	position: absolute;
    	top: 0;
    	left: 0;
    	bottom: 0;
    	right: 0;
    	white-space: nowrap;
    }
    input {
    	position: absolute;
    }

    .keys {
    	position: fixed;
    	z-index: 10;
    	bottom: 0;
    	left: 0;
    	right: 0;
    	padding: 1rem;
    	color: #fff;
    	text-align: center;
    	transition: all 300ms linear;
    	opacity: 0;
    }

    input:focus ~ .keys {
    	opacity: 0.8;
    }

    input:nth-of-type(1):checked ~ label:nth-of-type(1),
    input:nth-of-type(2):checked ~ label:nth-of-type(2),
    input:nth-of-type(3):checked ~ label:nth-of-type(3),
    input:nth-of-type(4):checked ~ label:nth-of-type(4){
       z-index: 0;
    }

    input:nth-of-type(1):checked ~ label {
    	transform: translate3d(0, 0, 0);
    }

    input:nth-of-type(2):checked ~ label {
    	transform: translate3d(-100%, 0, 0);
    }

    input:nth-of-type(3):checked ~ label {
    	transform: translate3d(-200%, 0, 0);
    }

    input:nth-of-type(4):checked ~ label {
    	transform: translate3d(-300%, 0, 0);
    }

    label {
    	background:#2C2C2B;
    	background-size: cover;
    	font-size: 3rem;
    }

    label[for="spades"],
    label[for="hearts"] {
    	background: #cc0000;
    }

    label:before,
    label:after {
    	color: white;
    	display: block;
    	background: rgba(255,255,255,0.2);
    	position: absolute;
    	padding: 1rem;
    	font-size: 3rem;
    	height: 10rem;
    	vertical-align: middle;
    	line-height: 10rem;
    	top: 50%;
    	transform: translate3d(0, -50%, 0);
    	cursor: pointer;
    }

    label:before {
    	content: "\276D";
    	right: 100%;
    	border-top-left-radius: 50%;
    	border-bottom-left-radius: 50%;
    }

    label:after {
    	content: "\276C";
    	left: 100%;
    	border-top-right-radius: 50%;
    	border-bottom-right-radius: 50%;
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
   <form>

			<input type="radio" name="fancy" autofocus value="clubs" id="clubs" />
			<input type="radio" name="fancy" value="hearts" id="hearts" />
			<input type="radio" name="fancy" value="spades" id="spades" />
			<input type="radio" name="fancy" value="diamonds" id="diamonds" />
			<label for="clubs">Why Personal Trainer?</label><label for="hearts">Fitcamp personal trainers have the knowledge, skill and full professional training.

</label><label for="spades">A personal trainer will focus on you and your program during the session.</label><label for="diamonds"><video  width="1500" height="430" controls>
  <source src="Trainer.mp4" type="video/mp4">
  </video></label>

			<div class="keys">Use left and right keys to navigate</div>
	</form>



</body>
</html>
