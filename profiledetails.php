
<?php
include_once 'header1.php';
require_once 'dbh.php';


 ?>

<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;


}
body{
  min-height: 110vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-image: url('STUDIOS.png');



}
.wrapper{
  position: relative;
  max-width: 1000px;
  width: 100%;
  background: #fff;
  padding: 30px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h1{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #722F37;
  font-family: 'Poppins', sans-serif;
}
.wrapper h1::before{
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
     <h1>Your Profile</h1>
     <?php
  if (isset($_SESSION["username"])) {
 echo "<p>Welcome Back ". $_SESSION["username"]. "!</p>";
 }
  ?>

<?php
 if (isset($_SESSION["email"])) {
echo "<p>Your Email: ". $_SESSION["email"]. "</p>";
}
 ?>
 <?php
  if (isset($_SESSION["useruid"])) {
 echo "<p>Your Username: ". $_SESSION["useruid"]. "</p>";
 }
  ?>
  <?php




  $sql ="SELECT * FROM users  ";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0){
    while ($row = mysqli_fetch_assoc($result)) {

      echo "<p> Your Age: ". $row['usersAge']. "</p>";
      echo "<p> Your Weight: ". $row['usersWeight']. "</p>";
      echo "<p> Your Height: ". $row['usersHeight']. "</p>";
      echo "<p> Your Country: ". $row['usersCountry']. "</p>";
      echo "<p> Your Phone Number: ". $row['usersNum']. "</p>";


    }

}
?>





 </div>
 </body>
 </html>
