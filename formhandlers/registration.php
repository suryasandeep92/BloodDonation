<?php
//Declaring variables to prevent errors
$first_name = ""; //First name
$last_name = ""; //Last name
$number =""; //mobile number
$b_group =""; //blood Group
$email = ""; //email
$pwd = ""; //password
$pwd2 = ""; //password 2
$date = ""; //Sign up date 
$error_array = array(); //Holds error messages

if(isset($_POST['reg_submit'])){

	//Registration form values

	//First name
	$first_name = strip_tags($_POST['first_name']); //Remove html tags
	$first_name = str_replace(' ', '', $first_name); //remove spaces
	$first_name = ucfirst(strtolower($first_name)); //Uppercase first letter
	$_SESSION['first_name'] = $first_name; //Stores first name into session variable

	//Last name
	$last_name = strip_tags($_POST['last_name']); //Remove html tags
	$last_name = str_replace(' ', '', $last_name); //remove spaces
	$last_name = ucfirst(strtolower($last_name)); //Uppercase first letter
	$_SESSION['last_name'] = $last_name; //Stores last name into session variable

	//Mobile Number
	$number = strip_tags($_POST['number']); //Remove html tags
	$number = str_replace(' ', '', $number); //remove spaces
	

	//Blood Group
	if(isset($_POST['b_group'])){
		$b_group = strip_tags($_POST['b_group']);
		//$b_group = $_POST['b_group'];
	}
	else
	{
		array_push($error_array, "Please select a blood Group<br>");
	}

	

	//email
	$email = strip_tags($_POST['email']); //Remove html tags
	$email = str_replace(' ', '', $email); //remove spaces
	$email = ucfirst(strtolower($email)); //Uppercase first letter
	$_SESSION['email'] = $email; //Stores email into session variable

	//Password
	$pwd = strip_tags($_POST['pwd']); //Remove html tags
	$pwd2 = strip_tags($_POST['pwd_2']); //Remove html tags

	$date = date("Y-m-d"); //Current date

		//Check if email is in valid format 
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$email = filter_var($email, FILTER_VALIDATE_EMAIL);
		}
		else {
			array_push($error_array, "Invalid email format<br>");
		}

		//mobile number validation
		if(preg_match("/^[0-9]*$/", $number))
		{
		 if(strlen($number) == 10)	
		 	$_SESSION['number'] = $number; //Stores last name into session variable
		 else
		 	array_push($error_array, "Please verify the mobile number<br>");
		}
		else
			array_push($error_array,"Please enter a valid mobile number<br>");


	if(strlen($first_name) > 25 || strlen($first_name) < 2) {
		array_push($error_array, "Your first name must be between 2 and 25 characters<br>");
	}

	if(strlen($last_name) > 25 || strlen($last_name) < 2) {
		array_push($error_array,  "Your last name must be between 2 and 25 characters<br>");
	}

	if($pwd != $pwd2) {
		array_push($error_array,  "Your passwords do not match<br>");
	}
	else {
		if(preg_match('/[^A-Za-z0-9]/', $pwd)) {
			array_push($error_array, "Your password can only contain english characters or numbers<br>");
		}
	}

	if(strlen($pwd > 30 || strlen($pwd) < 5)) {
		array_push($error_array, "Your password must be betwen 5 and 30 characters<br>");
	}


	if(empty($error_array)) {
		$password = md5($pwd); //Encrypt password before sending to database

		//Generate username by concatenating first name and last name
		$username = strtolower($first_name . "_" . $last_name);

		$query = mysqli_query($con, "INSERT INTO users_blood VALUES (null, '$first_name', '$last_name', '$username', '$email', '$password', '$number', '$b_group', '$date')");

		array_push($error_array, "<span style='color: #14C800;'>You're all set! Goahead and login!</span><br>");
 

		//Clear session variables 
		$_SESSION['last_name'] = "";
		$_SESSION['first_name'] = "";
		$_SESSION['email'] = "";
		$_SESSION['number'] = "";
		$_SESSION['b_group'] = "";

		//Redirecting to the Login Page
		//header("Location: login.php");

		
		
	}

}
?>