<?php 
require 'config/configuration.php';
require 'header.php';
require 'formhandlers/search.php';

if (isset($_SESSION['username'])) {
	$userLoggedIn = $_SESSION['username'];
	$user_details_query = mysqli_query($con, "SELECT * FROM users_blood WHERE user_name='$userLoggedIn'");
	$user = mysqli_fetch_array($user_details_query);
}
else {
	header("Location: register.php");
}
 ?>

 