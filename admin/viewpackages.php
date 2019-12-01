<?php
    include("header.php");
    ?>


<div class=" mb-3 container-fluid">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Table Of Packages
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <?php

include("connection.php");
$query = "select * from packages";
$r = mysqli_query($con,$query);
        
        echo "<table class='table table-bordered' id='dataTable' width='100% cellspacing='0'>";
        echo "<thead>";
            echo "<tr>";
                 echo "<th>Id</th>";
                 echo "<th>Heading</th>";
                 echo "<th>Description</th>";
                 echo "<th>Column1</th>";
                 echo "<th>Column1 Value</th>";
                 echo "<th>Column2</th>";
                 echo "<th>Column2 Value</th>";
                 echo "<th>Column3</th>";
                 echo "<th>Column3 Value</th>";
                 echo "<th>Column4</th>";
                 echo "<th>Column4 Value</th>";
                 echo "<th>Price</th>";
                 echo "<th>Price Value</th>";
                 echo "<th>Image</th>";
                 echo "<th>Edit</th>";
                 echo "<th>Delete</th>";
                 
                 
            echo "</tr>";
        echo "</thead>";
         echo "<tfoot>";
              echo "<tr>";
              echo "<th>Id</th>";
              echo "<th>Heading</th>";
              echo "<th>Description</th>";
              echo "<th>Column1</th>";
              echo "<th>Column1 Value</th>";
              echo "<th>Column2</th>";
              echo "<th>Column2 Value</th>";
              echo "<th>Column3</th>";
              echo "<th>Column3 Value</th>";
              echo "<th>Column4</th>";
              echo "<th>Column4 Value</th>";
              echo "<th>Price</th>";
              echo "<th>Price Value</th>";
              echo "<th>Image</th>";
              echo "<th>Edit</th>";
              echo "<th>Delete</th>";

          echo "<tfoot>";
         while ($row=mysqli_fetch_array($r)){
          echo "<tbody>";
          echo "<tr>";
              echo "<td>".$row['id']."</td>";
              echo "<td>".$row['heading']."</td>";
              echo "<td>".$row['description']."</td>";
              echo "<td>".$row['column1']."</td>";
              echo "<td>".$row['column1_value']."</td>";
              echo "<td>".$row['column2']."</td>";
              echo "<td>".$row['column2_value']."</td>";
              echo "<td>".$row['column3']."</td>";
              echo "<td>".$row['column3_value']."</td>";
              echo "<td>".$row['column4']."</td>";
              echo "<td>".$row['column4_value']."</td>";
              echo "<td>".$row['price']."</td>";
              echo "<td>".$row['price_value']."</td>";
              echo "<td><img src='uploads/".$row['img']."' width='100' height='100'</td>";
              echo "<td><a href='editpackages.php?id=".$row['id']."'>Edit</a>"; 
              echo "<td><a href='new.php?id= ".$row['id']."'>Delete</a>"; 
              echo "</tr>";
      echo "<tbody>";
         }
         
      echo "</table>";
     
            ?>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

