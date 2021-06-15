<?php
	require 'common.php';
	if (!isset($_SESSION['email'])) {	header('location:../index.php');	exit;}
	
	$oldpass=md5(mysqli_real_escape_string($c,$_POST['old']));
	$r=mysqli_query($c,"SELECT pass FROM users WHERE email='{$_SESSION['email']}' and pass='$oldpass';") or die(mysqli_query($c));
	if(mysqli_num_rows($r) == 0) {	header('location:../settings.php?old_password_error="Password not matched!"'); }
	else
	{
		$pass=$_POST['new'];
		$uppercase = preg_match('@[A-Z]@', $pass);
		$lowercase = preg_match('@[a-z]@', $pass);
		$number    = preg_match('@[0-9]@', $pass);

		if(!$uppercase || !$lowercase || !$number || strlen($pass) < 8)
		{
			header('location:../settings.php?password_error="Password should have Uppercase, lowercase, special character and number!"');
		}
	
		
		
		if($_POST['new']!=$_POST['rnew'])
		{
			header('location:../settings.php?r_password_error="Password does not match the above entered password!"');
		}
		else
		{	$pass=md5(mysqli_real_escape_string($c,$pass));
			$r2=mysqli_query($c,"UPDATE users SET pass='$pass' WHERE email='{$_SESSION['email']}';") or mysqli_query($c);
			echo "Password updated successfully!";

		}
	}
?>