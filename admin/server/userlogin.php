<?php
session_start();
require('db.php');

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

if ($role == "user") {
	//echo "SELECT * FROM users WHERE emailid='$username' AND password='$password'";
	//die;

	$stmt = $conn->prepare("SELECT * FROM users WHERE emailid='$username' AND password='$password'");
	$stmt->execute();

	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	$user = $stmt->fetchAll();

	//echo "<pre>";
	//print_r($user);
	//print_r($user[0]);
	//die;

	if (count($user) == 1) {
		if ($user[0]['status'] == 1) {

			$_SESSION["username"] = $username;
			$_SESSION["profilepic"] = $user[0]['profilepic'];
			$_SESSION["fullname"] = $user[0]['firstname'] . " " . $user[0]['lastname'];

			header('Location: ../../'); //redirect page to homepage
		} else {
			echo "User is blocked";
		}
	} else {
		echo "Invalid Details";
	}
} else {
	if ($username == "admin" && $password == "admin123") {
		$_SESSION["username"] = $username;

		header('Location: ../ManageProducts.php');
	} else {
		$_SESSION["msg"] = "Invalid Details";
		header('Location: ../Login.php');
	}
}
?>