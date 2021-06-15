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
		<?php require 'includes/header.php';
		$id=$_SESSION['id'];
		$r=mysqli_query($c,"UPDATE users_items SET status='Confirmed' WHERE user_id='$id';") or die(mysqli_error($c)); ?>
		
		<div class="container">
			<div class="jumbotron row_style">
				<h4>Your order is confirmed. Thank you for shopping with us.</h4>
				<p><a href="products.php">Click here</a>​ to purchase any other item.</p>
			</div>

		</div>

		<?php require 'includes/footer.php'?>
	</body>
</html>



















