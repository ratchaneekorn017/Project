<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v8/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v8/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v8/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v8/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v8/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v8/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v8/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v8/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login_v8/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="login_m.php" method="POST">
					<span class="login100-form-title">
						Sign In
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="m_user" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

				<br><br>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							เข้าสู่ระบบ
						</button>
					</div>

					<div  class="flex-col-c p-t-85 p-b-40" >
						
						<span class="txt1 p-b-9">
							ยังไม่มีสมาชิกใช่ไหม ?
						</span>

						<a href="register.php" class="txt3">
							สมัครสมาชิก
						</a>
						<a href="index.php" class="txt3">
							กลับสู่หน้าหลัก
						</a>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="Login_v8/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v8/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v8/vendor/bootstrap/js/popper.js"></script>
	<script src="Login_v8/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v8/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v8/vendor/daterangepicker/moment.min.js"></script>
	<script src="Login_v8/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Login_v8/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Login_v8/js/main.js"></script>

</body>
</html>