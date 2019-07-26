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
			background-color:;
		}
		#book{
			color:red;
		}
		#num{
			font-weight:bold;
			color:red;
		}
		#shopname{
			color:red;
			font-family:cursive;
			font-weight:bold;
		}
		#ownername,#phoneno,#state,#city{
			font-size:18px;
		}
		btn:hover{
			background-color:blue;
		}
		#num{
			font-size:25px;
		}
		#row{
			color:blue;
		}
		
		</style>
	</head>
	<body id="bod">
	<div class="row">
		<div class="col-sm-1 col-md-1 col-xl-1"></div>
		<div class="col-sm-11 col-md-11 col-lg-11 col-xl-11">
			<div id="c" class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<!--Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark fixed-top default-color">
            <div class="container">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
                            <a href="vehicle_form.php"><i class="fas fa-arrow-circle-left nav-link mr-4 mt-1 pb-2"></i></a>
                        </li>
				</ul>
                <a class="navbar-brand" href="">Fast Go</a>
                <button class="navbar-toggler mr-4" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
                        aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
                    <ul class="navbar-nav mr-auto">  
						
                        <li class="nav-item">
                            <a href="index.php"><i class="fa fa-home nav-link mt-1 pb-2" aria-hidden="true"></i></a>
                        </li>  
						 <li class="nav-item">
                            <a href="index.php"><i class="fas fa-arrow-circle-left nav-link mt-1 pb-2"></i></a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
								<div class="dark-text dropdown-toggle nav-link" id="dropdownMenu1" data-toggle="dropdown">
									BackgroundColor.</div>
								  <div class="dropdown-menu dropdown-primary">
								  <div class="dropdown-item" href="vehicle_form.php"><input id="red" type="radio">Red.</div>
								  <div class="dropdown-item" href="vehicle_form.php"><input id="blue" type="radio">Blue.</div>
								  <div class="dropdown-item" href="vehicle_form.php"><input id="green" type="radio">Green.</div>
								  <div class="dropdown-item" href="vehicle_form.php"><input id="pink" type="radio">Pink.</div>
								</div>
							</div>	
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--/.Navbar -->
				<br/><br/>
			</div>
			<div class="col-sm-12 col-xl-12 col-md-12 col-lg-12">
				<div class="h2 text-center font-family-cursive font-weight-bold ml-2 mb-5 mt-4">Available Shops NearBy Your Current Location:</div>
			</div>
		</div>
	</div>
		<div id="colors" class="row">	
			<?php
			$c=0;
			$shop_latitude=$_SESSION['$nearshoplatitude'];
			$shop_longitude=$_SESSION['$nearshoplongitude'];	
			$con=mysqli_connect('localhost','root');
			mysqli_select_db($con,'uploaddocuments');
			for($k=0;$k<sizeof($shop_latitude);$k++){
			$q="select * from registeredshoptable where latitude=$shop_latitude[$k] and longitude=$shop_longitude[$k]";
			
			if($result=mysqli_query($con,$q)){
			}
			else{
			echo"query not passed";
			}
			}
			while($r=mysqli_fetch_array($result)){
			$c=$c+1;
			?>	
			<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
			<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
			<div id="num" class="font-family-bold ml-4"><b><?php echo $c?>.</b></div>
				<div id="<?php echo"bg"?>" class="card mb-4">
					<div class="card-body">
						<div id="row" class="row">
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div id="shopname" class=" font-family-cursive h3 text-color-danger">1.Shop Name:<?php  echo $r['shop_name']; ?></div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 ml-4">
						<div id="ownername" class="">2. Owner Name:<?php  echo $r['owner_name']; ?></div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 ml-4">
						<div id="phoneno" class="dark-text">3. Contact Number:<?php  echo $r['phone_no']; ?></div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 ml-4">
						<div id="city" class="dark-text">4. City:<?php  echo $r['city']; ?></div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 ml-4">
						<div id="state" class="dark-text">5. State:<?php  echo $r['state']; ?></div>
					</div>
					
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<a href="#!"><div class="btn btn-outline-success btn-block rounded-pill mt-5">Book Right Now!.</div></a>					
					</div>
				</div>
				<hr class="hr-light">
							
					</div>
				</div>
		</div>
		
		<script type="text/javascript">
		document.getElementById("green").onclick=function(){
	
		document.getElementById("bod").style.background="#66ffb3";
		}
		document.getElementById("red").onclick=function(){
		
		document.getElementById("bod").style.background="#ff668c";
		}
		document.getElementById("blue").onclick=function(){
		
		document.getElementById("bod").style.background="#66b3ff";
		}
		document.getElementById("pink").onclick=function(){
		
		document.getElementById("bod").style.background="#d966ff";
		}
		
	</script>
			<?php
			}
			
			?>
	
	
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
