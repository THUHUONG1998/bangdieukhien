<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	$skt_username = strlen($username);
	$skt_password = strlen($password);

	if($username == '' || $skt_username > 20)
	{
		echo 'Username không hợp lệ';
	}
	elseif($password =='' || $skt_password > 20)
	{
		echo 'Password không hợp lệ';
	}
	else
	{
		setcookie("username","admin", time() +3600);

		header('Location: table_cookie.php');
	}
?>