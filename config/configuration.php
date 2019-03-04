<?php
ob_start(); //Turns on output buffering 
session_start();

$con = mysqli_connect("localhost","root","","blood_bank_db");

if(mysqli_connect_errno())
	echo "Failed to connect".mysqli_connect_errno();

?>