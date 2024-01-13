<html>
<head>


	<script>
window.onload = () => {
    let button = document.querySelector("#btn");

    // Function for calculating BMI
    button.addEventListener("click", calculateBMI);
};

function calculateBMI() {

    /* Getting input from user into height variable.
    Input is string so typecasting is necessary. */
    let height = parseInt(document
            .querySelector("#height").value);

    /* Getting input from user into weight variable.
    Input is string so typecasting is necessary.*/
    let weight = parseInt(document
            .querySelector("#weight").value);

    let result = document.querySelector("#result");

    // Checking the user providing a proper
    // value or not
    if (height === "" || isNaN(height))
        result.innerHTML = "Provide a valid Height!";

    else if (weight === "" || isNaN(weight))
        result.innerHTML = "Provide a valid Weight!";

    // If both input is valid, calculate the bmi
    else {

        // Fixing upto 2 decimal places
        let bmi = (weight / ((height * height)
                            / 10000)).toFixed(2);

        // Dividing as per the bmi conditions
        if (bmi < 18.6) result.innerHTML =
            `Under Weight : <span>${bmi}</span>`;

        else if (bmi >= 18.6 && bmi < 24.9)
            result.innerHTML =
                `Normal : <span>${bmi}</span>`;

        else result.innerHTML =
            `Over Weight : <span>${bmi}</span>`;
    }
}
</script>
	<title>Nutrition</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
  <style>
    .wow:first-child {
      visibility: hidden;
    }

footer{
background-color: #411620;
		padding: 20px;
		width: 1000 px;
		position: relative;


	}

	.column2 {
		position: absolute;
    right: 200px;
    top:15;

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
<section class="AboutUs" id="AboutUs">
  	  <div class="container">
  	  	  <div class="content">
  	  	  	   <div class="box">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="dr.jpg" alt="AboutUs" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Plan Your Diet</h4>
                       	   <p>The right nutrition plans guarantee great results, so make sure you have the right plan for your body or to help you lose the weight you need. Fitcamp offers its nutrition solutions given by Doctor Ahmed Abd El Aziz.

</p>
                       </div>
  	  	  	   	   </div>
               </div>

  	  	  	   	<div class="box">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="healthy1.jpg" alt="AboutUs" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Get Healthy</h4>
                       	   <p>Every workout, needs you to fuel up with energy, and that could easily happen with BROD. </p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>

  	  	  	   <div class="box">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="nuti.jpg" alt="AboutUs" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Nutritionist in FitCamp</h4>
                       	   <p>Because we care about your health, at Fitcamp, a nutritionist is always here for you, for a fine & fit body.</p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>

          </div>
  	  </div>
  </section>


	<footer >

<div class="row">
		<div id="bmi" class="column1">

			<h1 style="color:red">BMI Calculator</h1>

			<!-- Option for providing height
					and weight to the user-->
			<p style="color:red">Height (in cm)</p>

			<input type="text" id="height">

			<p style="color:red">Weight (in kg)</p>

			<input type="text" id="weight">

			<button id="btn">Calculate</button>

			<div style="color:red" id="result"></div>


			</div>



			<div id="calc" class="column2">

				<h1 style="color:red">Calorie Calculator</h1>
			<FORM METHOD="POST">
			<TABLE>
			<TR>
			<TR>
			<TD><div align=center; style="color:red">Your<br>Weight&nbsp;</div></TD>
			<TD><div align=center; style="color:red">KMs<br>&nbsp;Ran</div></TD>
			<TD><div align=center; style="color:red">Calories<br>Burned</div></TD>
			<TD><INPUT TYPE=BUTTON ONCLICK="HowMany(this.form)" VALUE="Calculate"></TD>
			</TR>
			<tr>
			<TD><div align=center><INPUT TYPE=text NAME=myWeight SIZE="4"ONCHANGE="SetMyWeight(this)"></div></TD>
			<TD><div align=center><INPUT TYPE=text NAME=myDistance SIZE="4"ONCHANGE="SetmyDistance(this)"></div></TD>
			<TD><div align=center><INPUT TYPE=text NAME="Fdiff" VALUE="" SIZE="6"></div></TD>
			<TD><div align=center><INPUT TYPE=BUTTON VALUE=" Reset " onClick="ClearForm(this.form)"></div></tr>


			</table>
			<table>
			<tr>
			<TD><DIV ALIGN=CENTER; style="color:red">Advice&nbsp;</DIV></TD>
			<TD><INPUT TYPE=text NAME="comment" size="37"></td>
			</TR>
			</TABLE>
			</FORM>
			</div>


	</div>



	<SCRIPT>


	var myWeight;
	var myDistance;

	function HowMany(form)
	{
	var difference;
	difference = (myDistance * myWeight) * .653;
	form.Fdiff.value = difference;

	if (difference < 100) {
	form.comment.value="It's time to really push yourself.";
	}
	if (difference > 101 && difference < 200) {
	form.comment.value="Nice run, but you can still reach higher.";
	}
	if (difference > 201 && difference < 300) {
	form.comment.value="Getting there. Push above 300 next time.";
	}
	if (difference > 301 && difference < 500) {
	form.comment.value="Great! You're a runner.....keep it up!";
	}
	if (difference > 501 && difference < 700) {
	form.comment.value="almost a hero!";
	}
	if (difference > 701) {
	form.comment.value="You're a hero.";
	}

	}

	function SetMyWeight(weight)
	{
	myWeight = weight.value;
	}

	function SetmyDistance(dis)
	{
	myDistance = dis.value;
	}

	function ClearForm(form){

	form.myWeight.value = "";
	form.myDistance.value = "";
	form.Fdiff.value = "";
	form.comment.value = "";

	}
	// -->

	</SCRIPT>























 </footer>
</body>
</html>
