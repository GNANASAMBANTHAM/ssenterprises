<?php include('connection.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>SS Enterprises</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
	<style>
		.top-header-area {
			position: absolute;
			z-index: 999;
			width: 100%;
			padding: 25px 0;
			background-color: #051922;
			}
	</style>
</head>
<body>
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="shop.php">Shop</a></li>
								<li><a href="login.php">Login / Signup</a></li> 
								<li></li>		
							</ul>
						</nav>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	
	<!-- breadcrumb-section -->

	<!-- end breadcrumb section -->

	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-20">
					<div class="col-lg-10">
                            <div class="login-wrap">
                                <div class="login-html">
                                    <div class="col-lg-10">
                                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
                                    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                                    <div class="login-form">
                                        <div class="sign-in-htm">
											<br>
											<br>
                                            <form action="logincheck2.php" method="post" onSubmit="return formValidation()">
                                            <div class="group">
                                                <label for="user" class="label">Email</label>
                                                <input id="user" type="text" class="input" name="email">
                                            </div>
                                            <div class="group">
                                                <label for="pass" class="label">Password</label>
                                                <input id="pass" type="password" class="input" data-type="password" name="password">
                                            </div>
                                            <div class="group">
                                                <input id="check" type="checkbox" class="check" checked>
                                                <label for="check"><span class="icon"></span> Keep me Signed in</label>
                                            </div>
                                            <div class="group">
                                                <input type="submit" class="button" value="Sign In" name="submit">
                                            </div>
                                            <div class="hr"></div>
                                            <div class="foot-lnk">
                                                <a href="#forgot">Forgot Password?</a>
                                            </div>
											</form>
                                        </div>
                                        <div class="sign-up-htm">
											
					
										<form action="insert.php" method="post" onSubmit="return formValidation()">
                                            <div class="group">
                                                <label for="user" class="label">Username</label>
                                                <input id="user" type="text" class="input" name="username">
                                            </div>
                                            <div class="group">
                                                <label for="pass" class="label">Password</label>
                                                <input id="pass" type="password" class="input" data-type="password" name="password">
                                            </div>
                                            <div class="group">
                                                <label for="pass" class="label">Phone Number</label>
                                                <input id="pass" type="text" class="input" name="phone">
                                            </div>
                                            <div class="group">
                                                <label for="pass" class="label">Email Address</label>
                                                <input id="pass" type="email" class="input" name="email">
                                            </div>
                                            <div class="group">
                                                <input type="submit" class="button" value="Sign Up" name="submit">
                                            </div>
                                            <div class="hr"></div>
                                            <div class="foot-lnk">
                                                <label for="tab-1">Already Member?</a>
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
			</div>
		</div>
	</div>
	<!-- end contact form -->


	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; SKTstudio 	&nbsp; All Rights Reserved.</p>
						
				</div> 	
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- form validation js -->
	<script src="assets/js/form-validate.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>
	
</body>
</html>