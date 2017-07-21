<?php
session_start();
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>G Info</title>


    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

 
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

 
    <link href="css/grayscale.min.css" rel="stylesheet">

   
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  color: black;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="home.php">
                    <span class="light">G</span>Info
                </a>
            </div>

           
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
     
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="about.php">About</a>
                    </li>
                    
                    <li>
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Model Type<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="MG.php">MG</a></li>
                    <li><a href="HG.php">HG</a>  </li>
                    <li><a href="RG.php">RG</a>  </li>
             
                
         
                </ul>
				   </li>
                

            <li>
                 <a class="page-scroll" href="Register.php">Register</a>
                    </li>
                    <li>
                 <a class="page-scroll" href="signin.php">Login</a>
                    </li>
					<li> 
					<a class="page-scroll">
					<?php
					if (isset($_SESSION['id'])){
						echo "<form action='logout.php' >
						<button type=submit class='btn btn-primary'> LOG OUT </button>
							</form>";
         
												}
						else {
						echo "You have not logged in";

								}
					?> 
	</a>
	</li>
                </ul>
            </div>
          
        </div>
        <!-- /.container -->
    </nav>

</head>
