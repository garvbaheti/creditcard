<!DOCTYPE html>
<html lang="en">
<head>
	<title>Student Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body style="background-color: #666666;">
	<div class="box">
		Fill Effect
	</div>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="connect.php" method="post">
					<span class="login100-form-title p-b-43" >
						University Credit Card<br>
						Student Login
					</span>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="rollno" placeholder="Login ID" id="rollno">
					</div>					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password" id="pass">
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<!-- <div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div> -->

						<div>
							<!-- <a href="#" class="txt1">
								Forgot Password?
							</a> -->
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>

				<div class="login100-more">
						<video autoplay loop muted>
							<source src="video.mp4" type ="video/mp4">
						</video>
						
				</div>
			</div>
		</div>
	</div>
</body>
</html>