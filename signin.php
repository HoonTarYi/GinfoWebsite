

<!DOCTYPE html>
<html lang="en">

<?php 
require('Header.php');

?>

   



   
    <section id="login" class="content-section text-center">
             <div class="container">
               <br><h1 align="center"><b> Login </b> 
			  </h1><br> <h3> <?php 
				$url = "htttp://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
				
				if (strpos($url, 'error=uidpass') !== false) {
					echo "Your username or password is incorrect!";
				}
				
			   else if(!isset($_SESSION['uid'])  || empty($_SESSION['uid'])) {
					echo 'Welcome Guest.';
						} else {
					echo 'Welcome ' . $_SESSION['uid'];
								}; 
			 ?></h3>
       
<br><br><br><br>
      
<form class="form-horizontal" action="login.php" method="POST">
    <div class="form-group">
    <label class="col-xs-2 control-label" for="inputSuccess" >Username</label>
                <div class="col-xs-10">
                    <input type="text"  class="form-control" name="uid" placeholder="Username" />
                    
                    
                </div>
</div>
    
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">Password</label>
         <div class="col-xs-10">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="pwd" >
       
         </div>
    </div>
	
    
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-2">
         <div class="checkbox">
             <label><input type="checkbox"> Remember Me </label>
         </div>
    </div>
    </div>
     <div class="form-group">
        <div class="col-xs-offset-2 col-xs-2">
            <button type="submit" class="btn btn-primary">Login</button>
			
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
