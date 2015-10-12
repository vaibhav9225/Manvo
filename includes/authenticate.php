<?php
session_start();
function authenticate_user($username, $password){
	global $database;
	$password = md5($password);
	$query = "SELECT `id`, `zipcode`, `role` FROM `users` WHERE `username`='$username' AND `password`='$password'";
	$sql = $database->query($query);
	$numRows = $database->numRows($sql);
	if($numRows == 1){
		$data = $database->fetchAssoc();
		$_SESSION['userId'] = $data['id'];
		$_SESSION['zipcode'] = $data['zipcode'];
		$_SESSION['role'] = $data['role'];
		return 1;
	}
	else return 0;
}

function register_user($name, $address, $city, $state, $zipcode, $username, $password, $email){
	global $database;
	$query = "INSERT INTO `users` VALUES('$name', '$address', '$city', '$state', '$zipcode', '1','$username', '$password', '$email')";
	$sql = $database->query($query);
}
?>