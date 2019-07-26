<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>NSEC project</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
  <style type="text/css">
  body{
	  overflow-x:hidden;
  }
  #dropdownMenu1{
	  font-size:22px;
	  text-align:center;
	  color:green;
	  font-weight:bold;
  }
  #text{
	 font-size:65%;
	 font-family:cursive;
	 text-align:center;
  }
  #txt1{
	font-size:40%;  
	text-align:center;
  }
  #input{
	height:65%;  
	}
	#small{
		font-size:25%;
		text-align:center;
		margin-top:2px;
	}
	#color{
		background-color:#F4F4F4;
	}
	#card{
		height:235px;
		}
	</style>
</head>

<body>
  <!-- Start your project here-->
    <header>
        <!--Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark fixed-top default-color">
            <div class="container">
                <a class="navbar-brand " href="">Navbar</a>
                <button class="navbar-toggler mr-4" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
                        aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
                    <ul class="navbar-nav mr-auto">                
                        <li class="nav-item">
                            <a class="nav-link" href="vehicle_form.php">Check Near By Shops</a>
                        </li> 
						<li class="nav-item">
                            <a href="refrigrator.html"><i class="fas fa-arrow-circle-right nav-link mr-4 mt-1 pb-2"></i></a>
                        </li>						
                    </ul>
					<ul class="navbar-nav ml-auto nav-flex-icons">
                        
						<li class="nav-item">
                            <li class="nav-item ">
                       <a  class="nav-link" href="regester_shop.html">Register your shop</a>
                        </li>
						<li class="nav-item">
                            <li class="nav-item ">
                       <a  class="nav-link" href="feedback.html">Feedback</a>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--/.Navbar -->
		<!--background-image-->
        <div id="home" class="view">
            <div class="mask rgba-blue-grey-strong ">
					<div class="display-4">
						<div class="row">
							
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12"><p id="text" class="text-white mt-4 m-5"> <br />Your Service Expert</p></div>
							<div class="col-sm-12 col-lg-12 col-md-12 col-xl-12">
								<p id="txt1" class="white-text mt-2">Get instant access to reliable and affordable services</p>
								<small id="small" class="form-text text-muted white-text mb-1 mt-2">ex..call ambulance,mechanic plumber,chef..</small>
							</div>	
						</div>
					</div>
				</div>
            </div>
        </div>		
        <!--background-image--> 
	<section>
	<div id="color" class="row">
	<div class="col-sm-2 col-lg-1 col-md-1 col-xl-1"></div>
		<div class="col-sm-6 col-xs-6 col-md-2 col-lg-2 col-xl-2 pt-4 mb-4">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<i class="fas fa-blender-phone ml-5"></i>
				</div>
				<div class="dropdown">
					<div class="dark-text dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown"
					  aria-haspopup="true" aria-expanded="false"><span class="ml-5">Appliances Repairing</span></div><div class="dropdown-menu dropdown-primary">
					  <a class="dropdown-item" href="refrigrator.html">Refrigrator Repairing</a>
					  <a class="dropdown-item" href="ac.html">A.C Repairing</a>
					  <a class="dropdown-item" href="romachine.html">R.O Machine Repairing</a>
					  <a class="dropdown-item" href="washingmachine.html">Washing Machine</a>
					</div>
				</div>	
			</div>
		</div>
		<div class="col-sm-6 col-xs-6 col-md-2 col-lg-2 col-xl-2 pt-4 mb-4">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<i class="fas fa-blender-phone ml-5"></i>
				</div>
				<div class="dropdown">
					<div class="dark-text dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown"
					  aria-haspopup="true" aria-expanded="false"><span class="ml-5">Decoration</span></div><div class="dropdown-menu dropdown-primary">
					  <a class="dropdown-item" href="birthdatparty.html">Birthday Party</a>
					  <a class="dropdown-item" href="collegefwst.html">College Fest Party</a>
					  <a class="dropdown-item" href="reception.html">Receiption Party</a>
					  <a class="dropdown-item" href="more.html">Many more..</a>
					</div>
				</div>	
			</div>
		</div>
		<div class="col-sm-6 col-xs-6 col-md-2 col-lg-2 col-xl-2 pt-4 mb-4">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<i class="fas fa-blender-phone ml-5"></i>
				</div>
				<div class="dropdown">
					<div class="dark-text dropdown-toggle ml-5" id="dropdownMenu1" data-toggle="dropdown"
					  aria-haspopup="true" aria-expanded="false">Beauty And Spa</div><div class="dropdown-menu dropdown-primary">
					  <a class="dropdown-item" href="massageformen.html">Massage Of Men</a>
					  <a class="dropdown-item" href="massageforwomen.html">Massage Of Women</a>
					  <a class="dropdown-item" href="hairstyle.html">Hair styling for men</a>
					  <a class="dropdown-item" href="hairstlewmen.html">Hair styling And Makeup for women(Salon At Home For Women)</a>
					</div>
				</div>	
			</div>
		</div>
		<div class="col-sm-6 col-xs-6 col-md-2 col-lg-2 col-xl-2 pt-4 mb-4">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<i class="fas fa-blender-phone ml-5"></i>
				</div>
				<div class="dropdown">
					<div class="dark-text dropdown-toggle ml-5" id="dropdownMenu1" data-toggle="dropdown"
					  aria-haspopup="true" aria-expanded="false">Ambulance</div><div class="dropdown-menu dropdown-primary">
					  <a class="dropdown-item" href="ambulance.html">Accident ON Road</a>
					  <a class="dropdown-item" href="ambulance.html">Patient from home action</a>
					</div>
				</div>	
			</div>
		</div>
		<div class="col-sm-6 col-xs-6 col-md-2 col-lg-2 col-xl-2 pt-4 mb-4">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<i class="fas fa-blender-phone ml-5"></i>
				</div>
				<div class="dropdown">
					<div class="dark-text dropdown-toggle ml-5" id="dropdownMenu1" data-toggle="dropdown"
					  aria-haspopup="true" aria-expanded="false">Chef(Maid)</div><div class="dropdown-menu dropdown-primary">
					  <a class="dropdown-item" href="chef.html">For Home</a>
					  <a class="dropdown-item" href="chef.html">For Party</a>
					  
					</div>
				</div>	
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-1 col-lg-1 col-md-1 col-xl-"></div>
		<div class="col-sm-4 col-lg-4 col-md-4 col-xl-4">
			<div class="dark-text h3 mt-2 mb-3 mr-1">Appliance services</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
		<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10">
			<div class="row">
				<div class="col-sm-12 col-md-2 col-lg-2 col-xl-2">
					
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<a href="refrigrator.html"><img id="card" src="https://i.pinimg.com/originals/b7/c0/4e/b7c04e5b6c4539bf63720b10d0aa55e2.jpg"></a>	
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<div class="dark-text text-center">GEt service within <b>60 to 90 mins</b></div>		
						</div>
					</div>
				</div>
				<div class="col-sm-0 col-md-2 col-lg-2 col-xl-2"></div>
				<div class="col-sm-12 col-md-2 col-lg-2 col-xl-2">
					
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<a href="washingmachine.html"><img id="card" src="https://361.mu/wp-content/uploads/2017/10/broken-washing-machine.jpg"></a>
					
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<div class="dark-text text-center text-center">GEt repaired by proffesionals</div>		
						</div>
					</div>
				</div>
				<div class="col-sm-0 col-md-2 col-lg-2 col-xl-2"></div>
				<div class="col-sm-12 col-md-2 col-lg-2 col-xl-2">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<a href="ac.html"><img id="card" src="http://classifieds.usatoday.com/wp-content/uploads/2017/12/home-appliance-repair.jpeg"></a>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<div class="dark-text text-center">Low amount needed<b /></div>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-1 col-lg-1 col-md-1 col-xl-"></div>
		<div class="col-sm-4 col-lg-4 col-md-4 col-xl-4">
			<div class="dark-text h3 mt-2 mb-3">Beauty and spa</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
		<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10">
			<div class="row">
				<div class="col-sm-12 col-md-2 col-lg-2 col-xl-2">
					<a href="massageformen.html"><img id="card" src="http://educationcareerarticles.com/wp-content/uploads/2013/01/Beautician.jpg"></a>
				</div>
				<div class="col-sm-0 col-md-2 col-lg-2 col-xl-2"></div>
				<div class="col-sm-12 col-md-2 col-lg-2 col-xl-2">
					<a href="massageforwomen.html"><img id="card" src="https://planetzuri.files.wordpress.com/2015/03/mehndi-design-for-the-summer-bride-22.jpg?w=640"></a>
				</div>
				<div class="col-sm-0 col-md-2 col-lg-2 col-xl-2"></div>
				<div class="col-sm-12 col-md-2 col-lg-2 col-xl-2">
					<a href="massageforwomen.html"><img id="card" src="https://www.menshairstylesnow.com/wp-content/uploads/2017/03/The-Hard-Part-Haircut-For-Men.jpg"></a>
				</div>
			</div>
		</div>
	</div>
  </section> 		
	</header>
  
  <footer>

  </footer>
  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
</body>

</html>
