<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
  div.container1{
	  width:100%;
	  z-index: -1;
	  position:absolute:
  }
  div.form{
	  position: absolute;
    left: 0;
    top: 10%;
    width: 100%;
    text-align: center;
    font-size: 18px;
  }
  body {
    padding-top: 0px;
}
.panel-login {
	border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
	color: #00415d;
	background-color: #fff;
	border-color: #fff;
	text-align:center;
}
.panel-login>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
	color: #029f5b;
	font-size: 18px;
}
.panel-login>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
	clear: both;
	border: 0;
	height: 1px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
	height: 45px;
	border: 1px solid #ddd;
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}
.btn-login {
	background-color: #59B2E0;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
	color: #fff;
	background-color: #53A3CD;
	border-color: #53A3CD;
}
.forgot-password {
	text-decoration: underline;
	color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
	text-decoration: underline;
	color: #666;
}

.btn-register {
	background-color: #1CB94E;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
	color: #fff;
	background-color: #1CA347;
	border-color: #1CA347;
}

  </style>
  
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
						<script>
						$(function() {

								$('#login-form-link').click(function(e) {
									$("#login-form").delay(100).fadeIn(100);
									$("#register-form").fadeOut(100);
									$('#register-form-link').removeClass('active');
									$(this).addClass('active');
									e.preventDefault();
								});
								$('#register-form-link').click(function(e) {
									$("#register-form").delay(100).fadeIn(100);
									$("#login-form").fadeOut(100);
									$('#login-form-link').removeClass('active');
									$(this).addClass('active');
									e.preventDefault();
								});

							});

						</script>
  </head>
<body>
<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE); // Starting Session
 $page =$_SERVER['PHP_SELF'];


	include('navheader.html');

	 if ($_SESSION['login_status'] == true)
{
	echo '';
	echo '<script type="text/javascript">
         <!--
            function Redirect() {
               window.location="welcome.php";
            }
            
            document.write("You are already logged in.");
            setTimeout("Redirect()", 1000);
         //-->
      </script>';
}

 if(isset($_POST['login-submit'])) {
					

					
					 
$error=''; // Variable To Store Error Message
 
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
//$connection = mysqli_connect("localhost", "root", "", "accounts");
include('db2.php');
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection,$username);
$password = mysqli_real_escape_string($connection,$password);
/* $password = md5($password); */
// Selecting Database
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection,"select * from users where password='$password' AND username='$username'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['username']=$username; // Initializing Session
$_SESSION['avatar']=$avatar;
$_SESSION['login_status']= true;
echo '<script language="javascript">';
echo 'alert("LOGGED IN SUCCESSFULLY")';
echo '</script>';
echo '<script type="text/javascript">
         <!--
            function Redirect() {
               window.location="categoriesf.php";
            }
            
            document.write("You will be redirected to main page in 10 sec.");
            setTimeout("Redirect()", 100);
         //-->
      </script>';
} else {
$error = "Username or Password is invalid";


function phpAlert($error) 
{
	
    echo '<script type="text/javascript">alert("' . $error . '")</script>  ';
	
	
	
}
phpAlert(   $error  );

}
mysqli_close($connection); // Closing Connection
}

					} 
					?>

 <div class="container1"> 
  <div id="myCarousel" class="carousel" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    </ol>

    
    <div class="carousel-inner">

      <div class="item active">
        <img src="pics/hero.jpg" alt="PAKISTAN" style="width:100%;height:100%;">
        <div class="carousel-caption">
          <h1>Be Heard</h1>
          <h2><p>Write the Review</p></h2>
        </div>
      </div>
  
    </div> 
	

    <!-- Left and right controls -->
<!--     <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a> -->
  </div>
</div>

<div class="form">
<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="login.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<!-- <div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										 <label for="remember"> Remember Me</label> 
									</div> --> 
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In" style="background-color: #59B2E0;">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="usedregister.php" method="POST" role="form" style="display: none;"  enctype="multipart/form-data">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required />
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" required />
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required />
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required />
									</div>
									<div class="form-group">
									<div class="avatar">	<label>select avatar</label><input type="file" name="avatar" accept="image/*" required/>
									</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now" style="background-color: #1CB94E;">
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
	</div>
</div>

</body>
</html>