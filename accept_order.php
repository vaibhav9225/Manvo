<?php
include_once('./includes/init.php');
accept_order($_GET['id']);
header("location: welcome.php");
?>