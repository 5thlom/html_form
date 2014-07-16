<?php
	$correctusername = "admin";
	$correctpassword = "hunter2";
	$username = $_POST['user'];
	$password = $_POST['passwd'];
	$rememberMe = $_POST['remember'];
	if($username == $correctusername AND $password == $correctpassword)
	{
		echo '<p>Login Successful</p>';
		if($rememberMe == 'on')
			echo '<p>I will try to remember you</p>';
	}
	else
		echo '<p>Login Failed</p>';
?>