<?php
	require 'common.php';
	$user_id=$_SESSION['id'];
	$p=$_GET['pid'];
	$r=mysqli_query($c,"INSERT INTO users_items (user_id,item_id,status)VALUES('$user_id','$p','Added to cart');") or die(mysqli_error($c));
	header('location:../products.php');
?>