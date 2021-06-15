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
					<div class="panel panel-default">
						<div class="panel-heading"><h2><b>Signup</b></h2></div>
						<form method="POST" action="includes/signup_script.php">

						<div class="panel-body">
						
							<div class="form-group">
								<label for="name">Name:</label>
								<input type="text" class="form-control" id="name" placeholder="Enter your name here -" name="name" >
														
							</div>

							<div class="form-group">
								<label for="email">Email:</label>
								<input type="email" class="form-control" id="email" placeholder="Enter your email here -" name="email">
								<div><i><?php echo (isset($_GET['email_error']) ? $_GET['email_error'] : ''); ?></i></div>	
							</div>
												
							<div class="form-group">
								<label for="password">Password:</label>
								<input type="password" class="form-control" id="password" placeholder="Enter minimum 8 characters -" name="password" pattern="^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W]\S*$">
								<div><i><?php echo (isset($_GET['password_error']) ? $_GET['password_error'] : ''); ?></i></div>	
							</div>
							
							<div class="form-group">
								<label for="contact">Contact:</label>
								<input type="number" class="form-control" id="contact" placeholder="Enter 10 digit contact number -" name="contact" >
								<div><i><?php echo (isset($_GET['contact_error']) ? $_GET['contact_error'] : ''); ?></i></div>		
							</div>
							
							<div class="form-group">
								<label for="city">City:</label>
								<input type="text" class="form-control" id="city" placeholder="Enter your city here -" name="city">
							</div>

							<div class="form-group">
								<label for="address">Address:</label>
								<input type="text" class="form-control" id="address" placeholder="Enter your address here -" name="address">
							</div>
						
						</div>

						<div class="panel-footer">
							<div class="form-group">	
								<input type="submit" value="Submit" class="btn btn-primary">
							</div>		
						</div></form>	
					</div>
				</div>
			</div>
		</div>

		<?php require 'includes/footer.php'?>
	</body>
</html>



















