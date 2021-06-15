<?php
	require 'common.php' ;

	$pass=	$_POST['password'];
	$uppercase = preg_match('@[A-Z]@', $pass);
	$lowercase = preg_match('@[a-z]@', $pass);
	$number    = preg_match('@[0-9]@', $pass);

	if(!$uppercase || !$lowercase || !$number || strlen($pass) < 8)
	{
		header('location:../signup.php?password_error="Password should have Uppercase, lowercase, special character and number!"');
	}

	$phn=	$_POST['contact'];
	if(strlen($phn)!=10)
	{
		header('location:../signup.php?contact_error="Incorrect phone number!"');
	}
	
	$email=mysqli_real_escape_string($c,$_POST['email']);
	$r=mysqli_query($c,"SELECT id FROM users WHERE email='$email' ;") or die(mysqli_error($c));
	if(mysqli_num_rows($r) > 0)
	{	
		header('location:../signup.php?email_error=Email id already exists!');
	}
	else
	{	$pass=md5(mysqli_real_escape_string($c,$_POST['password']));
		$city=mysqli_real_escape_string($c,$_POST['city']);
		$add=mysqli_real_escape_string($c,$_POST['address']);
		$phn=$_POST['contact'];
		$n=$_POST['name'];
		$email=mysqli_real_escape_string($c,$_POST['email']);

		$s="INSERT INTO users (name,email,pass,phn,city,address) VALUES ('$n','$email','$pass','$phn','$city','$add');";
		$r2=mysqli_query($c,$s) or die(mysqli_error($c));
		$_SESSION['id']=mysqli_insert_id($c);
		$_SESSION['email']=$email;
		
		if (isset($_SESSION['email'])) {	header('location: ../products.php');	exit;}
	}

?>