<?php
    include("header.php");
    include("connection.php");
$id=$_GET['id'];
$query=mysqli_query($con,"select * from registration where id='$id'");
while ($row=mysqli_fetch_array($query)) {
    $name=$row[1];
    $email=$row[2];
    $pass=$row[3];
    $dob=$row[4];
    $phone=$row[5];
    $gender=$row[6];
    $role=$row[7];
}
    ?>

<div class=" mb-3 container-fluid">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Edit User Details
    </div>

<div class="form-horizontal container">
        <h4 style="color:#343A40; margin-top:30px; font-size:26px; font-weight:bold; text-transform:uppercase;">Edit Users</h4>
        <hr />

        <form method="POST">

     <div class="col-md-12" style="margin-bottom:20px;">
            
            <input type="hidden" name="id" value="<?php echo $id; ?>" style = "font-size:15px; line-height:120%; color:#555; display:block; width:100%; padding:10px 15px; border:1px solid #ddd; box-sizing:border-box; height:50px; ">
            </div>

    <div class="col-md-12" style="margin-bottom:20px;">
            <label><b>Name</b></label>
            <input type="text" name="name" value="<?php echo $name; ?>" style = "font-size:15px; line-height:120%; color:#555; display:block; width:100%; padding:10px 15px; border:1px solid #ddd; box-sizing:border-box; height:50px; ">
    </div>

    <div class="col-md-12" style="margin-bottom:20px;">
            <label><b>Email</b></label>
            <input type="email" name="email" value="<?php echo $email; ?>" style = "font-size:15px; line-height:120%; color:#555; display:block; width:100%; padding:10px 15px; border:1px solid #ddd; box-sizing:border-box; height:50px; ">
    </div>

    <div class="col-md-12" style="margin-bottom:20px;">
            <label><b>Password</b></label>
            <input type="password" name="pass" value="<?php echo $pass; ?>" style = "font-size:15px; line-height:120%; color:#555; display:block; width:100%; padding:10px 15px; border:1px solid #ddd; box-sizing:border-box; height:50px; ">
    </div>

    <div class="col-md-12" style="margin-bottom:20px;">
            <label><b>DOB</b></label>
            <input type="date" name="dob" value="<?php echo $dob; ?>" style = "font-size:15px; line-height:120%; color:#555; display:block; width:100%; padding:10px 15px; border:1px solid #ddd; box-sizing:border-box; height:50px; ">
    </div>

    <div class="col-md-12" style="margin-bottom:20px;">
            <label><b>Phone</b></label>
            <input type="number" name="phone" value="<?php echo $phone; ?>" style = "font-size:15px; line-height:120%; color:#555; display:block; width:100%; padding:10px 15px; border:1px solid #ddd; box-sizing:border-box; height:50px; ">
    </div>

    <div class="col-md-12" style="margin-bottom:20px;">
            <label><b>Gender</b></label>
            <input type="text" name="gender" value="<?php echo $gender; ?>" style = "font-size:15px; line-height:120%; color:#555; display:block; width:100%; padding:10px 15px; border:1px solid #ddd; box-sizing:border-box; height:50px; ">
    </div>

    <div class="col-md-12" style="margin-bottom:20px;">
            <label><b>Role</b></label>
            <input type="text" name="role" value="<?php echo $role; ?>" style = "font-size:15px; line-height:120%; color:#555; display:block; width:100%; padding:10px 15px; border:1px solid #ddd; box-sizing:border-box; height:50px; ">
    </div>

    <div class="row">
            <div class="col-md-1">
                <input type="submit" name="btn" value="Edit" class="btn btn-default" style="background-color:#343A40; margin-left:20px; color:white; padding:10px 25px;" />
            </div>
        </div>
    </div>

<?php


if (isset($_POST["btn"])) {

    $id=$_POST["id"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $dob=$_POST["dob"];
    $phone=$_POST["phone"];
    $gender=$_POST["gender"];
    $role=$_POST["role"];

    $query=mysqli_query($con,"UPDATE `registration` SET `name`='$name',`email`='$email',`password`='$pass',`dob`='$dob',`phone`='$phone',`gender`='$gender',`role`='$role' where `id`='$id'");

    if ($query) {
        echo "<script>alert('Data Updated');window.location.assign('viewusers.php')</script>";
    }

    else {
        echo "<script>alert('Update Failed')</script>";
    }

}

?>