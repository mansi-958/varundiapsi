<?php
require 'dbconnection.php';
if (isset($_POST['email']) and isset($_POST['pass']))
{
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $query = "SELECT * FROM sturegister WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $count = mysqli_num_rows($result);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
        $_SESSION['k']=$row["fname"];
           
              $_SESSION['lastname']=$row["lname"];
              $_SESSION['firstname']=$row["fname"];
              $_SESSION['skill']=$row["skills"];
              $_SESSION['qua']=$row["qualification"];
              $_SESSION['name']=$row["fullname"];
              $_SESSION['about']=$row["about"];
              $_SESSION['email']=$row["email"];
              $_SESSION['photo']=$row["image"];
              $_SESSION['designation']=$row["designation"];
               
        }
      }
    if ($count == 1){
        $_SESSION['email'] = $email;
        //header('location: user-profile.php');
        echo "<script>alert('successfully logedin for your Profile')</script>"; 
    
    echo '<script>';
    echo 'window.location.href = "user-profile.php";';
    echo '</script>'; 
    
    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}