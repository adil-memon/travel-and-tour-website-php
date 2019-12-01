<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (isset($_POST['btn'])) {

    if (move_uploaded_file($_FILES["fileToUpload"]["name"],$target_file)) {
        $query=mysqli_query($con,"INSERT INTO `packages`(`heading`, `description`, `column1`, `column1_value`, `column2`, `column2_value`, `column3`, `column3_value`, `column4`, `column4_value`, `price`, `price_value`,`img`)
         values ('$h', '$d','$c1','$c1v','$c2','$c2v','$c3','$c3v','$c4','$c4v','$p','$file')");
        echo "<script>alert('Data Inserted')</script>";
    }

    else {
        echo "<script>alert('Data Not Inserted')</script>";
    }
}

?>

