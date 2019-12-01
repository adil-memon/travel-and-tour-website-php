
    <?php
    include("header.php");
    ?>

<div class=" mb-3 container-fluid">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Add New Packages
    </div>

<div class="form-horizontal container">
        <h4 style="color:#343A40; margin-top:30px; font-size:26px; font-weight:bold; text-transform:uppercase;">Add Package</h4>
        <hr />

        <form method="POST" enctype="multipart/form-data">

     <div class="col-md-12" style="margin-bottom:20px;">
            <label><b>Package Heading</b></label>
            <input type="text" name="heading" style = "font-size:15px; line-height:120%; color:#555; display:block; width:100%; padding:10px 15px; border:1px solid #ddd; box-sizing:border-box; height:50px; ">
            </div>

    <div class="col-md-12" style="margin-bottom:20px;">
            <label><b>Package Description (One Line)</b></label>
            <input type="text" name="description" style = "font-size:15px; line-height:120%; color:#555; display:block; width:100%; padding:10px 15px; border:1px solid #ddd; box-sizing:border-box; height:50px; ">
    </div>

    <div class="col-md-12" style="margin-bottom:20px;">
            <label><b>Column1</b></label>
            <input type="text" name="column1" placeholder="Duration" style = "font-size:15px; line-height:120%; color:#555; display:block; width:100%; padding:10px 15px; border:1px solid #ddd; box-sizing:border-box; height:50px; ">
    </div> 

    <div class="col-md-12" style="margin-bottom:20px;">
            <label><b>Column1 Value</b></label>
            <input type="text" name="column1v" placeholder="06 days and 7 nights" style = "font-size:15px; line-height:120%; color:#555; display:block; width:100%; padding:10px 15px; border:1px solid #ddd; box-sizing:border-box; height:50px; ">
    </div> 


    <div class="col-md-12" style="margin-bottom:20px;">
            <label><b>Column2</b></label>
            <input type="text" name="column2" placeholder="Date" style = "font-size:15px; line-height:120%; color:#555; display:block; width:100%; padding:10px 15px; border:1px solid #ddd; box-sizing:border-box; height:50px; ">
    </div> 

    <div class="col-md-12" style="margin-bottom:20px;">
            <label><b>Column2 Value</b></label>
            <input type="text" name="column2v" placeholder="18.04.2018" style = "font-size:15px; line-height:120%; color:#555; display:block; width:100%; padding:10px 15px; border:1px solid #ddd; box-sizing:border-box; height:50px; ">
    </div> 


    <div class="col-md-12" style="margin-bottom:20px;">
            <label><b>Column3</b></label>
            <input type="text" name="column3" placeholder="Airport" style = "font-size:15px; line-height:120%; color:#555; display:block; width:100%; padding:10px 15px; border:1px solid #ddd; box-sizing:border-box; height:50px; ">
    </div> 

    <div class="col-md-12" style="margin-bottom:20px;">
            <label><b>Column3 Value</b></label>
            <input type="text" name="column3v" placeholder="Changi" style = "font-size:15px; line-height:120%; color:#555; display:block; width:100%; padding:10px 15px; border:1px solid #ddd; box-sizing:border-box; height:50px; ">
    </div> 



    <div class="col-md-12" style="margin-bottom:20px;">
            <label><b>Column4</b></label>
            <input type="text" name="column4" placeholder="Extras" style = "font-size:15px; line-height:120%; color:#555; display:block; width:100%; padding:10px 15px; border:1px solid #ddd; box-sizing:border-box; height:50px; ">
    </div> 

    <div class="col-md-12" style="margin-bottom:20px;">
            <label><b>Column4 Value</b></label>
            <input type="text" name="column4v" placeholder="All Inclusive" style = "font-size:15px; line-height:120%; color:#555; display:block; width:100%; padding:10px 15px; border:1px solid #ddd; box-sizing:border-box; height:50px; ">
    </div> 

    <div class="col-md-12" style="margin-bottom:20px;">
            <label><b>Price Name</b></label>
            <input type="text" name="price" value="Price per person" style = "font-size:15px; line-height:120%; color:#555; display:block; width:100%; padding:10px 15px; border:1px solid #ddd; box-sizing:border-box; height:50px; ">
    </div> 

    <div class="col-md-12" style="margin-bottom:20px;">
            <label><b>Price Value</b></label>
            <input type="text" name="pricev" placeholder="$250" style = "font-size:15px; line-height:120%; color:#555; display:block; width:100%; padding:10px 15px; border:1px solid #ddd; box-sizing:border-box; height:50px; ">
    </div> 

        <div class="col-md-12" style="margin-bottom:20px;">
            <label><b>Package Image</b></label>
            <input type="file" name="f1" style = "font-size:15px; line-height:120%; color:#555; display:block; width:100%; padding:10px 15px; border:1px solid #ddd; box-sizing:border-box; height:50px; ">
    </div> 

    <div class="row">
            <div class="col-md-1">
                <input type="submit" name="btn" value="Add Package" class="btn btn-default" style="background-color:#343A40; margin-left:20px; color:white; padding:10px 25px;" />
            </div>
        </div>

        


    </div>
    </form>


    <?php

include("connection.php");

//Data & Image Upload


if (isset($_POST['btn'])) {

   
    $h=$_POST['heading'];
    $d=$_POST['description'];
    $c1=$_POST['column1'];
    $c1v=$_POST['column1v'];
    $c2=$_POST['column2'];
    $c2v=$_POST['column2v'];
    $c3=$_POST['column3'];
    $c3v=$_POST['column3v'];
    $c4=$_POST['column4'];
    $c4v=$_POST['column4v'];
    $p=$_POST['price'];
    $pv=$_POST['pricev'];

    $target="uploads/";
    $file=$_FILES["f1"]["name"];
    $tfile=$target.$_FILES["f1"]["name"];

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($tfile,PATHINFO_EXTENSION));

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
    $uploadOk = 0;
}

else
{
    if (move_uploaded_file($_FILES["f1"]["tmp_name"],$tfile)) {
        $query=mysqli_query($con,"INSERT INTO `packages`(`heading`,`description`,`column1`,`column1_value`,`column2`,`column2_value`,`column3`,`column3_value`,`column4`,`column4_value`,`price`,`price_value`,`img`) values ('$h','$d','$c1','$c1v','$c2','$c2v','$c3','$c3v','$c4','$c4v','$p','$pv','$file')");
        echo "<script>alert('Data Inserted')</script>";
    }

    else {
        echo "<script>alert('Data Not Inserted')</script>";
    }
}
    
    

    // if (move_uploaded_file($_FILES["f1"]["tmp_name"],$tfile)) {
    //     $query=mysqli_query($con,"INSERT INTO `packages`(`heading`,`description`,`column1`,`column1_value`,`column2`,`column2_value`,`column3`,`column3_value`,`column4`,`column4_value`,`price`,`price_value`,`img`) values ('$h','$d','$c1','$c1v','$c2','$c2v','$c3','$c3v','$c4','$c4v','$p','$pv','$file')");
    //     echo "<script>alert('Data Inserted')</script>";
    // }

    // else {
    //     echo "<script>alert('Data Not Inserted')</script>";
    // }

} 
?>

  