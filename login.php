<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
	<style type="text/css">
	#my-alert{
		height:125%;
	}
	#username,#password{
		font-size:115%;
		font-family:cursive;
	}
	</style>
</head>
<body>
    <!-- Start your project here-->
    <header>
        <!--Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark fixed-top default-color">
            <div class="container">
                <a class="navbar-brand" href="">Navbar</a>
                <button class="navbar-toggler mr-4" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
                        aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#signInPanel">
                                Signin
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signUp.html">Sign up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section">Features</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto nav-flex-icons">
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto nav-flex-icons">
                        <li class="nav-item avatar">
                            <a class="nav-link p-0" href="#">
                                <img src="ABHI2.jpeg" class="rounded-circle z-depth-0" alt="avatar image" height="35">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!--/.Navbar -->
        <!--background-image-->
        <div id="intro" class="view">
            <div class="mask rgba-blue-grey-strong ">
			<br /><br /><br /><br /><br /><br />
                <div id="signInPanel" class="row px-3 mr-3">
                    <div class="col-md-4 lg-8 col-sm-1"></div>
                    <div class="col-md-6 lg-3 col-sm-10">
                        <br /><br /><br />
                        <!-- login -->
                        <div class="card">
                            <h5 class="card-header info-color white-text text-center py-4">
                                <strong>Sign in</strong>
                            </h5>
                            <!--Card content-->
                            <div class="card-body px-lg-5 pt-4">
                                <!-- Form -->
                                <form class="text-center" style="color: #757575;"  action="validatio.php" method="POST" onsubmit="return validation()">
                                    <!-- username-->
                                    <div class="md-form">
                                        <input type="text" id="materialLoginFormUsername" class="form-control" name="username">
                                        <label for="materialLoginFormUsername">Username</label>
										<span id="username" class="text-danger font-weight-bold "></span>                                 	
									</div>
                                    <!-- Password -->
                                    <div class="md-form">
                                        <input type="password" id="materialLoginFormPassword" class="form-control" name="password">
                                        <label for="materialLoginFormPassword">Password</label>
										<span id="password" class="text-danger font-weight-bold "></span>
                                    </div>
                                    <div class="d-flex justify-content-around">
                                        <div>
                                            <!-- Remember me -->
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
                                                <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
                                            </div>
                                        </div>
                                    <div>
                                            <!-- Forgot password -->
                                            <a href="">Forgot password?</a>
                                        </div>
                                    </div>

                                    <!-- Sign in button -->
                                    <button class="btn btn-block aqua-gradient rounded-pill" type="submit" name="submit">Sign in</button>
									<!-- Register -->
                                    <p>
                                        Do you want to know us?
                                        <a href="signUp.html">Register</a>
                                    </p>	
                                </form>
								</div>
								</div>
                                <!-- Form -->
                            </div>
                        </div>
                        <!--form login -->
                    </div>
                </div>

            </div>
        </div>
        <!--background-image-->
    </header>
    <!-- /Start your project here-->
    <!-- SCRIPTS -->
    <!-- JQuery -->
	<script type="text/javascript">
	function validation(){
	var password=document.getElementById('materialLoginFormPassword').value;
	var username=document.getElementById('materialLoginFormUsername').value;
		
	if(username==""){
	document.getElementById('username').innerHTML="Please enter your name";
	return false;
	}
	if(password==""){
	document.getElementById('password').innerHTML="Please enter your password";
	return false;
	}
	}
	</script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js">
	
	</script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>
</body>
</html>




