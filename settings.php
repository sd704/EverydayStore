<!DOCTYPE html>
<html>
	<head>
		<title>Everyday Store</title>
		<?php require 'includes/requirements.php'?>
		<?php require 'includes/common.php'?>
		<link href="index.css" rel="stylesheet" type="text/css"/>
		<style>footer{position:fixed;}</style>
		<?php	if (!isset($_SESSION['email'])) {	header('location: index.php');	exit;} ?>
	</head>

	<body>
		<?php require 'includes/header.php'?>

		
		<div class="container-fluid" id="login_banner">
			<div class="row row_style">
				<div class="col-xs-offset-3 col-xs-6">
					<div class="panel panel-default">
						<div class="panel-heading"><h2><b>Change Password</b></h2></div>
						<form method="POST" action="includes/settings_script.php" >
						<div class="panel-body">
							<div class="form-group">
								<label for="old"></label>
								<input type="password" class="form-control" id="old" placeholder="Old password -" name="old">
								<div><i><?php echo (isset($_GET['old_password_error']) ? $_GET['old_password_error'] : ''); ?></i></div>
							</div>

							<div class="form-group">
								<label for="new"></label>
								<input type="password" class="form-control" id="new" placeholder="New password -" name="new">
								<div><i><?php echo (isset($_GET['password_error']) ? $_GET['password_error'] : ''); ?></i></div>
							</div>
												
							<div class="form-group">
								<label for="rnew"></label>
								<input type="password" class="form-control" id="rnew" placeholder="Re-type new password -" name="rnew">
								<div><i><?php echo (isset($_GET['r_password_error']) ? $_GET['r_password_error'] : ''); ?></i></div>
							</div>
						
						</div>

						<div class="panel-footer">
							<div class="form-group">	
								<input type="submit" value="Change" class="btn btn-primary">
							</div>		
						</div></form>		
					</div>
				</div>
			</div>
		</div>

		<?php require 'includes/footer.php'?>
	</body>
</html>



















