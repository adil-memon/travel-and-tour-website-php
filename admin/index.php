<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <script src="https://kit.fontawesome.com/02a8dd7d9f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="mdbootstrap/css/bootstrap.min.css" type="text/css"> 
    <link rel="stylesheet" href="mdbootstrap/css/mdb.min.css" type="text/css"> 
    <link rel="stylesheet" href="mdbootstrap/css/mdb.lite.min.css" type="text/css"> 

</head>
<body>
    <div class="col-md-4" style="margin-left: 500px; margin-top: 100px;">
    <!-- Default form login -->
<form class="text-center border border-light p-5" method="GET">

    <p class="h4 mb-4">Admin Panel Login</p>

    <!-- Email -->
    <input type="email" id="defaultLoginFormEmail" name="useremail" class="form-control mb-4" placeholder="E-mail">

    <!-- Password -->
    <input type="password" id="defaultLoginFormPassword" name="userpass" class="form-control mb-4" placeholder="Password">

    <div class="d-flex justify-content-around">
        <div>
            <!-- Remember me -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
            </div>
        </div>
        <div>
            <!-- Forgot password -->
            <a href="">Forgot password?</a>
        </div>
    </div>

    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit" name="btn">Sign in</button>

   

    <!-- Social login -->
    <p>or sign in with:</p>

    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

</form>
<!-- Default form login -->

</div>


    <script src="mdbootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="mdbootstrap/js/popper.min.js"></script>
    <script src="mdbootstrap/js/bootstrap.min.js"></script>
    <script src="mdbootstrap/js/mdb.min.js"></script>
</body>
</html>
<?php

include("connection.php");
//session_start();
if (isset($_GET['btn'])) {
    $e=$_GET['useremail'];
    $pass=$_GET['userpass'];
    $query=mysqli_query($con,"SELECT * FROM `registration` WHERE email='$e' and password='$pass' and role=2 ");
    if (mysqli_num_rows($query)) {
        $_SESSION['login_user']=$e;
        echo "<script>alert('Login Successfull')</script>";
        header("Location:dashboard.php");
    }
    else {
        echo "<script>alert('Login Failed!')</script>";
    }
}

?>