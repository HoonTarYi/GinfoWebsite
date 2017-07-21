


<!DOCTYPE html>
<html lang="en">

<?php 
require('Header.php');

?>

  

    <!-- Body Section -->
    <section id="MG" class="container content-section text-center">
            <h1>RG</h1>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

		

	
        <table class="table" align="center" >
    <thead> 
        <tr>
            <th> ID </th>
            <th> Image </th>
            <th>Name</th>
            <th> Description </th>
            
       
        </tr>
    </thead>
   

		
<tbody>
    <tr>
         <td>1</td>
         <td><a href="img/blast.jpg">
                 <img align="left" src="img/Destiny.jpg" width="350" height="235" alt=""></a></td>
        <td> Destiny Gundam</td>
        <td> Gundam Seed Destiny || RG Size</td>
       
        
    </tr>
    <tr>
        <td>2</td>
        <td><a href="img/standf.jpg">
                <img align="left" src="img/Freedom Strike.png" width="350" height="235" alt=""></a></td>
        <td>Freedom Strike Gundam</td>
        <td>Gundam Seed Destiny || Gold Frame || RG SIZE</td>
      
		 
    </tr>
    <tr >
        <td>3</td>
        <td><a href="img/claw.jpg">
              <img align="left" src="img/atsumina.jpg" width="350" height="235" alt=""></a></td>
        <td>Gundam Atsumina</td>
        <td>Gundam Astray || GOLD FRAME || MG SIZE </td>
      
	
    
</tbody>

</table>
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
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("MG");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>

</html>
