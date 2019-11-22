<form class="form-area contact-form text-right" id="myForm"  method="get" action="coding.php">
								<div class="row">	
									<div class="col-lg-6 form-group">																		
										<input name="useremail" placeholder="Email Address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" class="common-input mb-20 form-control" required="" type="email">

										<input name="userpass" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" class="common-input mb-20 form-control" required="" type="password">
									
                                        <a href="register.php" style="float:left; margin:10px;">Don't have an account? Register Now</a>  
                                    </div>
                                    							
									<div class="col-lg-12">
										<div class="alert-msg" style="text-align: right;"></div>
										<!-- <button type="submit" name="logbtn" class="genric-btn primary" style="float: left;">LOGIN</button>	 -->
                                        <input type="submit" name="btn" value="LOGIN" class="genric-btn primary" style="float: left;">									
									</div>
								</div>
							</form>	