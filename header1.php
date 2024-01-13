<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
  <style>
	body {
    margin: 0;
    height: 100vh;
    //cursor: none;
    background: rgb(27, 27, 27);
}

.cursor {
    width: 20px;
    height: 20px;
    border: 1px solid white;
    border-radius: 50%;
    position: absolute;
    transition-duration: 200ms;
    transition-timing-function: ease-out;
    animation: cursorAnim .5s infinite alternate;
    pointer-events: none;
}

.cursor::after {
    content: "";
    width: 20px;
    height: 20px;
    position: absolute;
    border: 8px solid gray;
    border-radius: 50%;
    opacity: .5;
    top: -8px;
    left: -8px;
    animation: cursorAnim2 .5s infinite alternate;
}

@keyframes cursorAnim {
    from {
        transform: scale(1);
    }
    to {
        transform: scale(.7);
    }
}

@keyframes cursorAnim2 {
    from {
        transform: scale(1);
    }
    to {
        transform: scale(.4);
    }
}

@keyframes cursorAnim3 {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(3);
    }
    100% {
        transform: scale(1);
        opacity: 0;
    }
}

.expand {
    animation: cursorAnim3 .5s forwards;
    border: 1px solid red;
}


}

  </style>



</head>
 <div class="cursor"></div>
 <script>


 	const cursor = document.querySelector('.cursor');

         document.addEventListener('mousemove', e => {
             cursor.setAttribute("style", "top: "+(e.pageY - 10)+"px; left: "+(e.pageX - 10)+"px;")
         })

         document.addEventListener('click', () => {
             cursor.classList.add("expand");

             setTimeout(() => {
                 cursor.classList.remove("expand");
             }, 500)
         })


 </script>

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
