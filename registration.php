<?php
include("header.php");

?>

			<!-- start banner Area -->
			<section class="relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Registration		
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="registration.php"> Registration</a></p>
						</div>	
					</div>
				</div>
			</section>
            <!-- End banner Area -->	
            <form method="post">
            <div class="section-top-border container">
            <h3 class="mb-30">Registration</h3>
            <label for="">Name</label>
            <input type="text" name="txtname" placeholder="Name" style="border-color:grey;" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required="" class="single-input-primary"><br>
            <label for="">Email</label>           
            <input type="text" name="txtemail" placeholder="Email" style="border-color:grey;" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required="" class="single-input-primary"><br>
            <label for="">Password</label>
            <input type="password" name="txtpass" placeholder="Password" style="border-color:grey;" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required="" class="single-input-primary"><br>
            <label for="">Date Of Birth</label>
            <input type="date" name="dob" placeholder="DOB" style="border-color:grey;" onfocus="this.placeholder = ''" onblur="this.placeholder = 'DOB'" required="" class="single-input-primary"><br>
            <label for="">Phone</label>
            <input type="number" name="txtphone" placeholder="Phone" style="border-color:grey;" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" required="" class="single-input-primary"><br>
            <!-- <input type="text" name="first_name" placeholder="Gender" style="border-color:grey;" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required="" class="single-input-primary"><br> -->
            <label for="">Gender</label><br> <br>
        
            <!-- <select class="single-input-primary" style="border-color:grey; padding:10px;" name="gender">
  <option value="volvo">Male</option>
  <option value="saab">Female</option>
</select><br> -->
<div class="row" >
                                      <div class="switch-wrap d-flex ">
                                      &nbsp;&nbsp; &nbsp;<p>Male</p>&nbsp;&nbsp;
										<div class="primary-radio">
											<input type="radio" id="primary-radio"  name= "gender" value="male" checked>
                                            <label for="primary-radio"></label>   
                                            
                                           
										</div>
                                    </div>

                                    &nbsp; &nbsp;&nbsp;
                                    <div class="switch-wrap d-flex" >
										<p>Female</p>&nbsp;&nbsp;
										<div class="primary-radio">
											<input type="radio" id="primary-radio2"  name= "gender" value="female"  >
											<label for="primary-radio2"></label>
										</div>
                                    </div>
                                    
</div>

            <input type="hidden" value="1" name="role" placeholder="Role" style="border-color:grey;" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required="" class="single-input-primary"><br>
        
            <input type="submit" value="Register" name="regbtn" class="genric-btn primary">
            </div>
            </form>

            


<?php
include("footer.php");
?>

<?php
include("connection.php");
if (isset($_POST['regbtn'])) {
    
    $n = $_POST['txtname'];
    $e = $_POST['txtemail'];
    $pass = $_POST['txtpass'];
    $d = $_POST['dob'];
    $p = $_POST['txtphone'];
    $g = $_POST['gender'];
    $r = $_POST['role'];
    $query= mysqli_query($con,"INSERT INTO `registration`(`name`, `email`, `password`, `dob`, `phone`,`gender`,`role`) VALUES ('$n','$e','$pass','$d','$p','$g','$r')");
    if ($query) {
        echo "<script>alert('You have been successfully registered!')</script>";
    }
    else {
        echo "<script>alert('Registration Failed!')</script>";
    }
}

?>
