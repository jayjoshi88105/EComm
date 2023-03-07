<?php
	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username == "admin" && $password == "admin123")
	{
		$_SESSION["username"] = $username;
		
		header('Location: ../ManageProducts.php');
	}
	else
	{
		$_SESSION["msg"] = "Invalid Details";
		header('Location: ../Login.php');
	}
?>