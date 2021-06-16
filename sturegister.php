<?php

require 'dbconnection.php';

if(isset($_POST['register']))  
{   //taking photo of user
    $file_name = $_FILES["profilePhoto"]["name"];
    $temp_name = $_FILES["profilePhoto"]["tmp_name"];
    $folder="user profile images/".$file_name;
    move_uploaded_file($temp_name, $folder);
    
    //taking input from field
    $fname=$_POST['fname']; 
    $lname=$_POST['lname']; 
    $qualification=$_POST['qualification']; 
    $email=$_POST['email']; 
    $designation=$_POST["designation"];
    $pass=$_POST['pass'];
    $contact=$_POST['contact']; 
    $course=$_POST['loginradio']; 
   
    //checking mail exists or not
    $check_email="select * from sturegister WHERE email='$email'";  
    $run=mysqli_query($con,$check_email); 
    
  
    if(mysqli_num_rows($run)>0)  
    {  
echo "<script>alert('Email $email already exists in our database, Please try another one! or login')</script>";  
  
    }  
    
    //inserting query
    else{
    $insert_user1="insert into sturegister(fname,lname,qualification,email,password,contact,image,course,designation) VALUES('$fname','$lname','$qualification','$email','$pass','$contact','$folder','$course','$designation')";
    if(mysqli_query($con,$insert_user1)){
    echo "<script>alert('Registered successfully.Please login for your Profile')</script>"; 
    
    echo '<script>';
echo 'window.location.href = "index.php";';
echo '</script>'; 

//$_SESSION['email'] = $email;
    }
    else{
        echo "<script>alert('You have been not registered.Try again')</script>"; 
    }

    
   //creating session variable

  
}
}?>

