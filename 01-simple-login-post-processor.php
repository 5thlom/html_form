<?php
	$correctusername = 'admin';
	$correctpassword = 'hunter2';
	$username = $_POST['user'];
	$password = $_POST['passwd'];
	if($username == $correctusername AND $password == $correctpassword)
		echo '<p>Login Successful</p>';
	else
		echo '<p>Login Failed...</p>';
?>