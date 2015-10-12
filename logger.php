<?php
include_once('./includes/init.php');
$user_id = $_POST["user_id"];
$password = $_POST["password"];

$success = authenticate_user($user_id, $password);
if($success==1){
	session_start();
    $_SESSION['login_user']=$user_id;
    if($_SESSION['role'] == 0) header("location: welcome.php");
    else header("location: home.php");
}else {
    header("location: index.php?invalid=1");

}

?>