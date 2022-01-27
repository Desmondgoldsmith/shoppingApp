<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="frontend/Login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="frontend/Login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="frontend/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="frontend/Login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="frontend/Login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="frontend/Login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="frontend/Login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="frontend/Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="frontend/Login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('frontend/Login/images/img-01.jpg');">
			<div class="wrap-login100 p-t-70 p-b-30">
				<form class="login100-form validate-form">
					<div class="login100-form-avatar">
						<img src="frontend/Login/images/avatar-01.jpg" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						John Doe
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
						<a href="#" class="txt1">
							Forgot Username / Password?
						</a>
						<br>
						<a class="txt1" href="#">
							Create new account
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div>

					{{-- <div class="text-center w-full">
						
					</div> --}}
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="frontend/Login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="frontend/Login/vendor/bootstrap/js/popper.js"></script>
	<script src="frontend/Login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="frontend/Login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="frontend/Login/vendor/main.js"></script>

</body>
</html>