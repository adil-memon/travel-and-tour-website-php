<?php
    include("header.php");
    ?>


<div class=" mb-3 container-fluid">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Table Of Current Users
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <?php

include("connection.php");
$query = "select * from registration";
$query1 = "select * from role_type";
$r = mysqli_query($con,$query);
$r1 = mysqli_query($con,$query1);
        
        echo "<table class='table table-bordered' id='dataTable' width='100% cellspacing='0'>";
        echo "<thead>";
            echo "<tr>";
                 echo "<th>Id</th>";
                 echo "<th>Name</th>";
                 echo "<th>Email</th>";
                 echo "<th>Password</th>";
                 echo "<th>DOB</th>";
                 echo "<th>Phone</th>";
                 echo "<th>Gender</th>";
                 echo "<th>Role</th>";
                 echo "<th>Edit</th>";
                 echo "<th>Delete</th>";
            echo "</tr>";
        echo "</thead>";
         echo "<tfoot>";
              echo "<tr>";
              echo "<th>Id</th>";
              echo "<th>Name</th>";
              echo "<th>Email</th>";
              echo "<th>Password</th>";
              echo "<th>DOB</th>";
              echo "<th>Phone</th>";
              echo "<th>Gender</th>";
              echo "<th>Role</th>";
              echo "<th>Edit</th>";
              echo "<th>Delete</th>";
          echo "<tfoot>";
         while ($row=mysqli_fetch_array($r)){
          echo "<tbody>";
          echo "<tr>";
              echo "<td>".$row['id']."</td>";
              echo "<td>".$row['name']."</td>";
              echo "<td>".$row['email']."</td>";
              echo "<td>".$row['password']."</td>";
              echo "<td>".$row['dob']."</td>";
              echo "<td>".$row['phone']."</td>";
              echo "<td>".$row['gender']."</td>";
              echo "<td>".$row['role']."</td>";
              echo "<td><a href='editusers.php?id=".$row['id']."'>Edit</a>"; 
              echo "<td><a href='new.php?id= ".$row['id']."   '>Delete</a>"; 
              echo "</tr>";
      echo "<tbody>";
         }
         
      echo "</table>";
     
            ?>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

