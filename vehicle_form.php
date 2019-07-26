<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fastgo.com</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<style type="text/css">
        .btn-success{
            margin-left:50%;
        }
		.fa-home{
		color:white;
		}
        #header{
            color:coral;
            font-family:cursive;
        }
		#firstnames,#pphonenumbers,#lastnames,#emails,#states,#citys,#localitys1,#localitys2,#phonenumbers,#emailsids{
		font-size:125%;
		font-weight:bold;
		text-align:center;
		font-family:cursive;
		color:red;
		}
		body{
		background-color:#00bfff;
		}
		#top{
			text-align:center;
		}
		#isssue_s,#phone_numbers,#phone_otp{
		font-size:125%;
		font-weight:bold;
		text-align:center;
		font-family:cursive;
		color:red;
		}
    </style>
</head>
<body>
    <div class="row">
		<div class="col-sm-0 col-md-2 col-lg-2 col-xl-2"></div>
		<div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
		<div id="top" class="row mt-5">
			<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
				<a href="index.php"><i class="fa fa-home fa-2x center-align" aria-hidden="true"></i></a>
			</div>
			<div class="col-md-6 col-lg-6 col-sm-6 mt-2">
			<input type="radio" id="click" onclick="getLocation()"><span class="ml-1">Enable your Location</span>
			<span id="write"></span></div>
		</div>
		<div class="card mt-5">
			<div class="card-body">
				<p class="h2 dark-text text-center">Choose Your Service Provided By us.</p>	
				<form action="vehicle_customer.php" method="POST" onsubmit="return validation()">
    
				<div class="row">
					<div class="col-sm-12 col-md-11 col-lg-11 col-xl-11">
						<div class="md-form">
						<input type="text" class="form-control" id="issues" name="issue">
						<label>issues</label>
					</div>
					<span id="isssue_s"></span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-11 col-lg-11 col-xl-11">
						<div class="md-form">
						<input type="text" class="form-control" id="phone_number" name="contact_no">
						<label>Phone number</label>
					</div>
					<span id="phone_numbers"></span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<div class="md-form">
								<input type="number" class="form-control" id="phoneotp" name="phoneotp">
								<label >PHONE OTP</label>
							</div>
							<span id="phone_otp"></span>
					</div>
					<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
					<div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
						<div class="md-form">
							<input type="radio" id="radio" class="mr-1">
							Agree Our Terms And conditions.
						</div>
						<span id="radios"></span>
					</div>
					
				</div>
				
				<div class="row">
					<div class="col-sm-12 col-md-11 col-lg-11 col-xl-11">
						<div class="row">
							<div class="col-sm-5 col-md-5 col-lg-5 col-xl-5"></div>
						<div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
							<button type="submit" class="btn btn-success btn-block rounded-pill">Register</button>
						</div>
						</div>
					</div>
					</form>
				</div>
				</div>					
		</div>
		</div>
		</div>
	</div>
	<script type="text/javascript">
	function validation(){
	var issues=document.getElementById('issues').value;
	if(issues==""){
	document.getElementById('isssue_s').innerHTML="Please enter query";
	return false;
	}
	var phone__number=document.getElementById('phone_number').value;
	if(phone__number==""){
	document.getElementById('phone_numbers').innerHTML="Please enter your contact no..";
	return false;
	}
	var otp=document.getElementById('phoneotp').value;
	if(otp==""){
	document.getElementById('phone_otp').innerHTML="Please enter Otp Sent To Your Number";
	return false;
	}
	var radio_button=document.getElementById('radio').value;
	if(radio_button==""){
	document.getElementById('radios').innerHTML="Please agree to our terms and conditions";
	return false;
	}
	}
	
	var x=document.getElementById('output');
	function getLocation(){
	if(navigator.geolocation){
	navigator.geolocation.getCurrentPosition(showposition);
	}
	else{
	x.innerHTML="BROWSER NOT SUPPORTING";
	}
	}
	function showposition(position){
		var latitude=position.coords.latitude;
		var longitude=position.coords.longitude;
		window.location.href="http://localhost/fast%20go/somepages.php?latitud="+latitude+"&longitud="+longitude;
	}
	
	</script>
	<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>
</body>
</html>






