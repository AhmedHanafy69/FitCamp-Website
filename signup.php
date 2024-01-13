<?php
include_once 'header1.php';

 ?>

<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;

}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-image: url('FACILITIES.png');

}
.wrapper{
  position: relative;
  max-width: 430px;
  width: 100%;
  background: #fff;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #722F37;
  font-family: 'Poppins', sans-serif;
}
.wrapper h2::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 28px;
  border-radius: 12px;
  background:#411620;
  font-family: 'Poppins', sans-serif;
}
.wrapper form{
  margin-top: 30px;
}
.wrapper form .input-box{
  height: 52px;
  margin: 18px 0;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #411620;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
  font-family: 'Poppins', sans-serif;
}
.input-box input:focus,
.input-box input:valid{
  border-color: #4070f4;
}
form .policy{
  display: flex;
  align-items: center;
}
form h3{
  color: #411620;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
  font-family: 'Poppins', sans-serif;
}
.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: #411620;
  cursor: pointer;
}
.input-box.button input:hover{
  background: #0e4bf1;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color: #411620;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}

</style>



 <html lang="en" dir="ltr">
   <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
    </head>
 <body>
   <div class="wrapper">
     <h2>Registration</h2>
     <form action="signupinc.php" method="post">
     <form action="Signup">
       <div class="input-box">
         <input type="text" name="name" placeholder="Enter your name" required>
       </div>
       <div class="input-box">
         <input type="text" name="email" placeholder="Enter your email" required>
       </div>
       <div class="input-box">
         <input type="text" name="uid" placeholder="Enter your username" required>
       </div>
       <div class="input-box">
         <input type="password" name="pwd" placeholder="Create password" required>
       </div>
       <div class="input-box">
         <input type="password" name= "pwdrepeat" placeholder="Confirm password" required>
       </div>

       <div class="input-box button">
         <input type="submit" name="submit" value="Register Now">
       </div>
       <div class="text">
         <h3>Already have an account? <a href="login.php">Login now</a></h3>
       </div>
       <?php
       if (isset($_GET["error"])) {
       if ($_GET["error"] == "emptyinput") {
        echo "<p style='color:maroon;margin-left: 120px;'>Fill in all fields!</p>";
       }
       else if ($_GET["error"] == "invaliduid") {
        echo "<p style='color:maroon;margin-left: 120px;'>Choose a proper username!</p>";
       }
       else if ($_GET["error"] == "invalidemail"){
        echo "<p style='color:maroon;margin-left: 120px;'>Choose a proper email!</p>";
       }
       else if ($_GET["error"] == "passwordsdontmatch"){
        echo "<p style='color:maroon;margin-left: 120px;'>Passwords doesn't match!</p>";
       }
       else if
       ($_GET["error"] == "stmtfailed") {
        echo "<p style='color:maroon;margin-left: 120px;'>Something went wrong, try again!</p>";
       }
       else if ($_GET["error"] == "usernametaken") {
       echo "<p style='color:maroon;margin-left: 120px;'>Username already taken!</p>";
       }
       else if ($_GET["error"] =="none") {
         echo "<p style='color:maroon;margin-left: 120px;'>You Have Signed Up! </p>";
       }
       }
       ?>
     </form>
   </div>
 </body>
 </html>
