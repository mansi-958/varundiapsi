<?php

require '../dbconnection.php';

if(isset($_POST['register']))  
{   //taking photo of user
    $file_name = $_FILES["profilePhoto"]["name"];
    $temp_name = $_FILES["profilePhoto"]["tmp_name"];
    $folder="teacher profile images/".$file_name;
    move_uploaded_file($temp_name, $folder);
    
    //taking input from field
    $fname=$_POST['fname']; 
    $lname=$_POST['lname']; 
    $qualification=$_POST['qualification']; 
    $email=$_POST['email']; 
    $pass=$_POST['pass'];
    $contact=$_POST['contact']; 
    $designation=$_POST['designation'];
    $experience=$_POST['experiance'];
   
    //checking mail exists or not
    $check_email="select * from teacher WHERE email='$email'";  
    $run=mysqli_query($con,$check_email); 
    
  
    if(mysqli_num_rows($run)>0)  
    {  
echo "<script>alert('Email $email already exists in our database, Please try another one! or login')</script>";  
  
    }  
    
    //inserting query
    else{
    $insert_user1="insert into teacher(fname,lname,qualification,email,password,contact,image,designation,experience) VALUES('$fname','$lname','$qualification','$email','$pass','$contact','$folder','$designation','$experience')";
    if(mysqli_query($con,$insert_user1)){
    echo "<script>alert('Registered successfully.Please login for your Profile')</script>"; 
    
    echo '<script>';
echo 'window.location.href = "login erp.html";';
echo '</script>'; 

$_SESSION['email'] = $email;
    }
    else{
        echo "<script>alert('You have been not registered.Try again')</script>"; 
    }

    
   //creating session variable

  
}
}?>

