<?php

include("connection.php");
session_start();
if (isset($_GET['btn'])) {
    $e=$_GET['useremail'];
    $pass=$_GET['userpass'];
    $query=mysqli_query($con,"SELECT * FROM `tblregbd` WHERE Email='$e' and Password='$pass' ");
    if (mysqli_num_rows($query)) {
        $_SESSION['login_user']=$e;
        echo "<script>alert('Login Successfull')</script>";
       // header("Location:dashboard.php");
    }
    else {
        echo "<script>alert('Login Failed!')</script>";
    }
}

?>