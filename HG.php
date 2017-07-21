<!DOCTYPE html>
<html lang="en">

<?php 
require('Header.php');

?>



  

    <!-- About Section -->
    <section id="HG" class="container content-section text-center">
        <h1>HG</h1>
        
        <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/nlgKg_r8SaQ?ecver=2" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
        
        <br><br>     <br><br> <br><br>
        
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
        <br><br>
        <table class="table" align="center">
            
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
         <td> <a href="img/lupus.jpg"> <img align="left" src="img/barbator_lupus.jpg" width="260" height="160" alt=""> </a> </td>
         <td> Barbatos Lupus Gundam</td>
        <td>Gundam Iron Blooded Orphans || HG SIZE</td>
    
    </tr>
    <tr>
        <td>2</td>
        <td> <a href="img/age2s.jpg"> <img align="left" src="img/age2.jpg" width="260" height="160" alt=""> </a> </td>
        <td>Age 2 Gundam</td>
        <td>Gundam Age || HG SIZE</td>
        
    </tr>
    <tr >
        <td>3</td>
        <td> <a href="img/rx-0.jpg"> <img align="left" src="img/RX-0_Unicorn_Gundam_HG.jpg" width="260" height="160" alt=""> </a> </td>
        <td>RX-0 Gundam</td>
        <td>Gundam Unicorn || HG SIZE </td>
        
    </tr>
    
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
  table = document.getElementById("HG");
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
