<?php
	require 'common.php';
	$id=$_GET['id'];//id is order id
	$r=mysqli_query($c,"DELETE FROM users_items WHERE id='$id';") or die(mysqli_error($c));
	header('location:../cart.php');
?>