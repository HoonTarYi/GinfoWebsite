<!DOCTYPE html>
<html lang="en">


<?php 
require('Header.php');

?>

   



   
    <section id="download" class="content-section text-center">
        
     
           
                       <div class="container">
               <br><h1 align="center"><b> Register </b></h1><br>
			   <h3> <?php 
				$url = "htttp://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
				if (strpos($url, 'error=empty') !== false) {
					print "Fill out all fields";
					
				}
				
				if (strpos($url, 'error=uid') !== false) {
					print "Username Existed!";
					
				}
				
				if (strpos($url, 'error=username') !== false) {
					print "Please enter your username"; 
					
				}
				
				if (strpos($url, 'error=pwd') !== false) {
					print "Please enter your password"; 
					
				}
				
				 if (strpos($url, 'error=cpwd') !== false) {
					print "Your confirmed password does not match the original password"; 
				}
				
				 if (strpos($url, 'error=email') !== false) {
					print "Please enter your email address"; 
				}
				
				 if (strpos($url, 'error=address') !== false) {
					print "Please enter your address"; 
				}
				
				 if (strpos($url, 'error=pnum') !== false) {
					print "Please enter your Phone Number"; 
				}
				
				
				
				?></h3>
			   <br><br>
                

				
		<form class="form-horizontal" action="signup.php" method="POST">
            <div class="form-group">
                <label class="col-xs-2 control-label" for="inputSuccess" >Username</label>
                <div class="col-xs-10">
                    <input type="text"  class="form-control" name="uid" placeholder="Username" value="<?php if (isset ($_POST['name'])) {print htmlspecialchars($_POST['name']); } ?>"/>
                    
                </div>
            </div>
        <div class="form-group">
            <label class="col-xs-2 control-label" for="inputWarning" name="pwd">Password</label>
                <div class="col-xs-10">
                    <input type="password" class="form-control" name="pwd" placeholder="Password">
                    
                </div>
        </div>
    
    <div class="form-group">
            <label class="col-xs-2 control-label" for="inputWarning" name="cpwd">Confirm Password</label>
                <div class="col-xs-10">
                    <input type="password" class="form-control" name="cpwd" placeholder="ConfirmPassword">
                    
                </div>
        </div>
    
					<div class="form-group">
						<label form="inputEmail" class="control-label col-xs-2" name="email">Email</label>
						<div class="col-xs-10">
						<input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" value="<?php if (isset ($_POST['email'])) {print htmlspecialchars($_POST['email']); } ?>"/>
     
							</div>
							</div>
                    
                    <div class="form-group ">
                <label class="col-xs-2 control-label" for="inputError" name="address">Address</label>
                <div class="col-xs-10">
                    <input type="text"  class="form-control" placeholder="Address" name="address" value="<?php if (isset ($_POST['address'])) {print htmlspecialchars($_POST['address']); } ?>" />
               </div>
                  </div>
    
    <div class="form-group ">
                <label form="inputphonenumber" class="col-xs-2 control-label" for="inputError">Tel.Phone No.</label>
                <div class="col-xs-10">
                    <input type="number"  class="form-control" placeholder="TelPhone_Num" name="pnum" value="<?php if (isset ($_POST['pnum'])) {print htmlspecialchars($_POST['pnum']); } ?>" />
               </div>
                  </div>
                    
                    
        <div class="form-group">
        <div class="col-xs-offset-2 col-xs-2">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
           
        </div>
</form>
                    
            </div>
        
</section>

    

     <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; G Info 2016</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    
    <!-- Theme JavaScript -->
    <script src="js/grayscale.min.js"></script>

</body>

</html>
