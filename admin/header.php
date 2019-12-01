<html lang="en">

<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
     <!-- Custom fonts for this template-->
     <link href="admintemplate/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="admintemplate/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admintemplate/css/sb-admin.css" rel="stylesheet">
    <title>Admin | Travel & Tours</title>

</head>
<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

<a class="navbar-brand mr-1" href="#">Admin | Travel & Tours</a>

<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
    <i class="fas fa-bars"></i>
</button>

<div class="col-xs-4 col-sm-4 col-md-5 social" style="font-size:12px;">


<span style="color:white; font-weight:bold; padding-left:400px;">
<?php 

// if ($_SESSION['login_user']==true) {
//     echo "Welcome, ".$_SESSION['login_user'];
    
// }

// else {
//     header("Location:index.php");
// }

// echo "<a style='color:white;' href='logout.php'> (Logout)</a>";

?>
</span>



    
</div>

</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Users</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">User Settings:</h6>
          <a class="dropdown-item" href="viewusers.php">View Current Users</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Packages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Packages Settings:</h6>
          <a class="dropdown-item" href="addpackages.php">Add Packages</a>
          <a class="dropdown-item" href="viewpackages.php">View Packages</a>
        </div>
        
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Hotels</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Hotels Settings:</h6>
          <a class="dropdown-item" href="addhotels.php">Add Hotels</a>
        </div>
      </li>
    
      </ul>

   





 <!-- Bootstrap core JavaScript-->
    <script src="admintemplate/vendor/jquery/jquery.min.js"></script>
    <script src="admintemplate/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="admintemplate/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="admintemplate/vendor/chart.js/Chart.min.js"></script>
    <script src="admintemplate/vendor/datatables/jquery.dataTables.js"></script>
    <script src="admintemplate/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="admintemplate/js/sb-admin.min.js"></script>
    <!-- Demo scripts for this page-->
    <script src="admintemplate/js/demo/datatables-demo.js"></script>
    <script src="admintemplate/js/demo/chart-area-demo.js"></script>
    
</body>
</html>