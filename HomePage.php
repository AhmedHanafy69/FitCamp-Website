<?php
include_once 'header.php';
 ?>
 <!-- End Header  -->

  <!-- Start Home -->
  <section class="home wow flash" id="home">


  	 <div class="container" id="txt" style="">
  	 	  <h1>It's <span>gym</span> time. Let's go</h1>
  	 	  <h1>We are ready to <span>fit you</span></h1>
  	 </div>


  </section>


	<!-- Start Contact -->
	<p id="Contact"></p>
	<section class="contact" id="contact">
		<div class="container">
			<div class="content">
				<div class="box form">

					<form name="myForm"  onsubmit="return validateForm()" method="post">
						<input type="text"  name="name" placeholder="Enter Name" id="Name" required>
						<input type="email" name="email" placeholder="Enter Email" id="Email" required>
						<input type="numbertext" name="mobile" placeholder="Enter Mobile"id="Mobile" required>
						<textarea placeholder="Enter Message" name="message" id="message" required></textarea>
						<button type="submit" class="submit" name="submit" onclick="validateForm()">Submit</button>
					</form>

				</div>
				<div class="box text ">
					<h2>Get Connected with Gym</h2>
					<p class="title-p">Don’t wish for a good body. Work for it.Start today at Fit Camp Contact Us: 03 4041 230 - 01033903903 or send us a message. Visit Us NOW at 10 Bahaa Al-Din Al Ghatwari, off Fawzi Moaz St. in front of Zahran Furniture.</p>
					<div class="info">
						<ul>
							<li><span class="fa fa-map-marker"></span>10 Bahaa Al-Din Al Ghatwari, off Fawzi Moaz St. in front of Zahran Furniture</li>
							<li><span class="fa fa-phone"></span>034041230 - 01033903903</li>
							<li><span class="fa fa-envelope"></span>fitcamp@gmail.com</li>
						</ul>
					</div>
					<div class="social">
						<a href="https://www.facebook.com/fitcampegy/"><span class="fa fa-facebook"></span></a>

						<a href="https://www.instagram.com/fitcamp.eg/"><span class="fa fa-instagram"></span</a>
						</div>


					</div>
				</div>
			</div>
		</section>


	</body>
	</html>
