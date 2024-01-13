<?php
session_start();
require_once 'dbh.php';

if(isset($_POST['update']))
{
    $id = $_POST['uid'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $num = $_POST['num'];
    $country = $_POST['country'];


    $query = "UPDATE users SET usersAge='$age', usersWeight='$weight', usersHeight='$height', usersNum='$num', usersCountry='$country' WHERE usersuid='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: profile.php");
          exit();
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: profile.php");
          exit();
    }
    
    }
