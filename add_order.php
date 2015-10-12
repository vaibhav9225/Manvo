<?php
include_once('./includes/init.php');
add_order($_GET['id']);
header("location: home.php");
?>