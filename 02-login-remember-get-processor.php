<?php
	$correctusername = "admin";
	$correctpassword = "hunter2";
	$username = $_GET['user'];
	$password = $_GET['passwd'];
	$rememberMe = $_GET['remember'];
	if($username == $correctusername AND $password == $correctpassword)
	{
		echo '<p>Login Successful</p>';
		if($rememberMe == 'on')
			echo '<p>I will try to remember you</p>';
	}
	else
		echo '<p>Login Failed...</p>';
?>