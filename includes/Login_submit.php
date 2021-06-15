<?php
	require 'common.php';
	$email=mysqli_real_escape_string($c,$_POST['email']);
	$pass=md5(mysqli_real_escape_string($c,$_POST['password']));

	$r=mysqli_query($c,"SELECT id,email FROM users WHERE email='$email' and pass='$pass';") or die(mysqli_error($c));
	$re=mysqli_query($c,"SELECT id,email FROM users WHERE email='$email';") or die(mysqli_error($c));//check if email exist
	
	if(mysqli_num_rows($r) != 0)
	{
		$row=mysqli_fetch_array($r);
		$email=$row['email'];
		$pass=$row['pass'];
		
		$_SESSION['email']=$email;
		$_SESSION['id']=$row['id'];
		if (isset($_SESSION['email'])) {	header('location: ../products.php');	exit;}

	}
	else if(mysqli_num_rows($re) == 0)
	{
		header('location:../login.php?email_error="Email not found!"');
	}
	else 
	{
		header('location:../login.php?pass_error="Password not matched!"');
	}

?>