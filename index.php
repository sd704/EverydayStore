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
		
		<div id="banner_image">
			<div class="container">
				<center><div id="banner_content">
					<a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
				</center></div>
			</div>
		</div>
		<?php require 'includes/footer.php'?>
		
	</body>
</html>



















