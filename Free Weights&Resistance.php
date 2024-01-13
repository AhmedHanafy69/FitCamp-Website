<?php
include_once 'header1.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Free Weights & Resistance</title>
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
  background: url(trial3.png) no-repeat center center fixed;
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
    top:1%;
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
   <div class="raw">

   <p class="center">
		 <!-- <img src="images/weights.jpg" width="500px"</p> -->

<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="3.jpg" style="width:100%">

</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="2.jpg" style="width:100%">

</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="1.jpg" style="width:100%">

</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>





   <div class="content">
     <h1><span style="color:red">Free Weights </span>& Resistance</h1>

     <p>Our private label range of equipment will help you with your strength, toning and free weights exercises.



</p>

   </div>



   </body>
   </html>
