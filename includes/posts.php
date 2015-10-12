<?php

function add_post($cuisineId, $categoryId, $name, $spiceLevel, $description, $expiresIn, $price, $veg){
	global $database;
	$expiresIn = time() + $expiresIn*60*60;
	$userId = $_SESSION['userId'];
	$query = "INSERT INTO `posts` VALUES('', '$cuisineId', '$categoryId', '$name', '$spiceLevel', '$description', '$expiresIn', '$price', '$veg', '$timestamp', '$userId')";
	$sql = $database->query($query);
}

function add_requests($cuisineId, $categoryId, $name, $spiceLevel, $description, $neeedIn, $proposedPrice, $quantity, $veg){
	global $database;
	$needIn = time() + $expiresIn*60*60;
	$userId = $_SESSION['userId'];
	$query = "INSERT INTO `posts` VALUES('', '$cuisineId', '$categoryId', '$name', '$spiceLevel', '$description', '$neeedIn', '$proposedPrice', '$quantity', '$veg', '$timestamp', '$userId')";
	$sql = $database->query($query);
}

function get_posts($id=0){
	global $database;
	$zipcode = $_SESSION['zipcode'];
	$userId = $_SESSION['userId'];
	$timestamp = time();
	if($id==0)
		$query = "SELECT `cuisine`.`name` AS `cuisine`, `category`.`category`, `posts`.*, `users`.`name` AS `user`, `chefs`.`rating` FROM `posts` JOIN `users` ON `users`.`id`=`posts`.`userId` AND `users`.`zipcode` = '$zipcode' AND `users`.`id` != '$userId' JOIN `cuisine` ON `cuisine`.`id`=`posts`.`cuisineId` JOIN `category` ON `category`.`id`=`posts`.`categoryId` JOIN `chefs` ON `chefs`.`chefId`=`posts`.`userId`";//WHERE;" `expiresIn`>'$timestamp'";
	else
		$query = "SELECT `cuisine`.`name` AS `cuisine`, `category`.`category`, `posts`.*, `users`.`name` AS `user`, `chefs`.`rating` FROM `posts` JOIN `users` ON `users`.`id`=`posts`.`userId` AND `users`.`zipcode` = '$zipcode' AND `users`.`id` != '$userId' JOIN `cuisine` ON `cuisine`.`id`=`posts`.`cuisineId` JOIN `category` ON `category`.`id`=`posts`.`categoryId` JOIN `chefs` ON `chefs`.`chefId`=`posts`.`userId` WHERE `posts`.`id`='$id' ";// /*`expiresIn`>'$timestamp' AND*/
	$sql = $database->query($query);
	
	return $sql;
}

function get_ordered_posts(){
	global $database;
	$zipcode = $_SESSION['zipcode'];
	$userId = $_SESSION['userId'];
	$timestamp = time();
	$query = "SELECT `cuisine`.`name` AS `cuisine`, `category`.`category`, `posts`.*, `users`.`name` AS `user` FROM `posts` JOIN `users` ON `users`.`id`=`posts`.`userId` AND `users`.`zipcode` = '$zipcode' AND `users`.`id` != '$userId' JOIN `cuisine` ON `cuisine`.`id`=`posts`.`cuisineId` JOIN `category` ON `category`.`id`=`posts`.`categoryId` JOIN `ordered_posts` ON `ordered_posts`.`postId`=`posts`.`id` AND `ordered_posts`.`userId`='$userId' WHERE `expiresIn`>'$timestamp'";
	$sql = $database->query($query);
	return $sql;
}

function add_order($postId){
	global $database;
	$userId = $_SESSION['userId'];
	$query="INSERT INTO `ordered_posts` VALUES('$postId', '$userId')";
	$sql = $database->query($query);
}

function get_requests($id=0){
	global $database;
	$zipcode = $_SESSION['zipcode'];
	$userId = $_SESSION['userId'];
	$timestamp = time();
	if($id==0)
		$query = "SELECT `cuisine`.`name` AS `cuisine`, `category`.`category`, `requests`.*, `users`.`name` AS `user` FROM `requests` JOIN `users` ON `users`.`id`=`requests`.`userId` AND `users`.`zipcode` = '$zipcode' AND `users`.`id` != '$userId' JOIN `cuisine` ON `cuisine`.`id`=`requests`.`cuisineId` JOIN `category` ON `category`.`id`=`requests`.`categoryId`  WHERE `needIn`>'$timestamp' AND `requests`.`id` NOT IN (SELECT `requestId` FROM `accepted_requests`)";
	else
		$query = "SELECT `cuisine`.`name` AS `cuisine`, `category`.`category`, `requests`.*, `users`.`name` AS `user` FROM `requests` JOIN `users` ON `users`.`id`=`requests`.`userId` AND `users`.`zipcode` = '$zipcode' AND `users`.`id` != '$userId' JOIN `cuisine` ON `cuisine`.`id`=`requests`.`cuisineId` JOIN `category` ON `category`.`id`=`requests`.`categoryId`  WHERE `needIn`>'$timestamp' AND `requests`.`id`='$id' AND `requests`.`id` NOT IN (SELECT `requestId` FROM `accepted_requests`)";

	$sql = $database->query($query);
	return $sql;
}

function get_accepted_requests(){
	global $database;
	$zipcode = $_SESSION['zipcode'];
	$userId = $_SESSION['userId'];
	$timestamp = time();
	$query = "SELECT `cuisine`.`name` AS `cuisine`, `category`.`category`, `requests`.*, `users`.`name` AS `user` FROM `requests` JOIN `users` ON `users`.`id`=`requests`.`userId` AND `users`.`zipcode` = '$zipcode' AND `users`.`id` != '$userId' JOIN `cuisine` ON `cuisine`.`id`=`requests`.`cuisineId` JOIN `category` ON `category`.`id`=`requests`.`categoryId` JOIN `accepted_requests` ON `accepted_requests`.`requestId`=`requests`.`id` AND `accepted_requests`.`userId`='$userId' WHERE `needIn`>'$timestamp'";
	$sql = $database->query($query);
	return $sql;
}

function accept_order($requestId){
	global $database;
	$userId = $_SESSION['userId'];
	$query="INSERT INTO `accepted_requests` VALUES('$requestId', '$userId')";
	$sql = $database->query($query);
}
?>