<!DOCTYPE html>
<html>
	<head>
		<title>Everyday Store</title>
		<?php require 'includes/requirements.php'?>
		<?php require 'includes/common.php'?>
		<link href="index.css" rel="stylesheet" type="text/css"/>
		<?php	if (isset($_SESSION['email'])) {	header('location: products.php');	exit;} ?>
	</head>

	<body>
		<?php require 'includes/header.php'?>

		<div class="container-fluid" id="login_banner">
			<div class="row row_style">
				<div class="col-xs-offset-3 col-xs-6">
					<div class="panel panel-primary">
						<div class="panel-heading"><h3>LOGIN</h3></div>

						<div class="panel-body"><p class="text-warning"><i>Login to make a purchase</i></p>
						<form method="POST" action="includes/Login_submit.php">
							<div class="form-group">
								<label for="email">Email:</label>
								<input type="email" class="form-control" id="email" placeholder="Enter your email here -" name="email">
								<div><i><?php echo (isset($_GET['email_error']) ? $_GET['email_error'] : ''); ?></i></div>
							</div>
												
							<div class="form-group">
								<label for="password">Password:</label>
								<input type="password" class="form-control" id="password" placeholder="Enter your password here -" name="password">
								<div><i><?php echo (isset($_GET['pass_error']) ? $_GET['pass_error'] : ''); ?></i></div>
							</div>

							<div class="form-group">	
								<input type="submit" value="Login" class="btn btn-primary">
							</div>		
						</form>
						</div>

						<div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>		
					</div>
				</div>
			</div>
		</div>

		<?php require 'includes/footer.php'?>
	</body>
</html>



















