<?php
session_start();
ob_start();
$con= mysqli_connect("localhost", "root", "", "daipsifinal") or die(mysqli_error($con));
$conn= mysqli_connect("localhost", "root", "", "internshipdemoprojectdb") or die(mysqli_error($conn));
?>