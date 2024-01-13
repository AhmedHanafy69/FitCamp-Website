<!DOCTYPE html>
<html>
<head>
	<title>Partners</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
  <style>
    .wow:first-child {
      visibility: hidden;
    }

    body {
      background: url(Classes.png) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      text-align: center;
    }

    h1 {
      font-size: 100pt;
      font-family: 'Luckiest Guy';
      color: #fff;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      text-shadow:   0px -6px 0 #212121,
                     0px -6px 0 #212121,
                     0px  6px 0 #212121,
                     0px  6px 0 #212121,
                    -6px  0px 0 #212121,
                     6px  0px 0 #212121,
                    -6px  0px 0 #212121,
                     6px  0px 0 #212121,
                    -6px -6px 0 #212121,
                     6px -6px 0 #212121,
                    -6px  6px 0 #212121,
                     6px  6px 0 #212121,
                    -6px  18px 0 #212121,
                     0px  18px 0 #212121,
                     6px  18px 0 #212121,
                     0 19px 1px rgba(0,0,0,.1),
                     0 0 6px rgba(0,0,0,.1),
                     0 6px 3px rgba(0,0,0,.3),
                     0 12px 6px rgba(0,0,0,.2),
                     0 18px 18px rgba(0,0,0,.25),
                     0 24px 24px rgba(0,0,0,.2),
                     0 36px 36px rgba(0,0,0,.15);
    }
.square-holder {
  padding:30px;
  border: 1px solid #cecece;
  align-items: center;
  display:flex;
  align-items: center;
  justify-content: center;
  margin-bottom:20px;
  background-color:#f1f1f1;
  min-height:200px
}

.square-holder img {
  max-width:100%;
  filter: grayscale(100%);
  transition: all 0.3s;
}

.square-holder:hover img{
  filter:none;
}
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

p {
  color: white;
  font-family: 'arial';
  text-align: center;
  margin-top: 50px;
  font-size: 1.4em;

  a {
    color: teal;
  }
}
  </style>

</head>
<body>
  <div class="cursor"></div>
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
   <section class="section section-default mt-none mb-none">
<div class="container">
  <br><br><br>
<h1 class="mb-sm"> <strong>Partners</strong></h1>
<strong>
<div class="row">
<div class="col-sm-6 col-md-4 col-lg-3">
<div class="square-holder">
<a href="https://www.booking.com/hotel/eg/sedra-in-north-coast-chalet.ar.html">
<img alt="sedra" src="sedra1.png" />
</a>
</div>
</div>
<div class="col-sm-6 col-md-4 col-lg-3">
<div class="square-holder">
<a href="https://www.oroubamisr.com">
<img alt="orobamisr" src="oroba2.jpg" />
</a>
</div>
</div>
<div class="col-sm-6 col-md-4 col-lg-3">
<div class="square-holder">
<a href="https://www.instagram.com/fastandpower_academy/">
<img alt="fastandpower" src="fastpower.png" />
</a>
</div>
</div>

</strong>
</div>
</section>
 </body>
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
