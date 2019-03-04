<?php  
if(isset($_POST['update_details'])) {

	$first_name = $_POST['first_name'];
	$first_name = ucfirst(strtolower($first_name));


	$last_name = $_POST['last_name'];
	$last_name = ucfirst(strtolower($last_name));


	$mobile_number = $_POST['number'];


	$email = $_POST['email'];


	$bloodgroup = $_POST['b_group'];


	$username = strtolower($first_name . "_" . $last_name);
	

	$query = mysqli_query($con, "UPDATE users_blood SET first_name='$first_name', last_name='$last_name',
				mobile_number='$mobile_number', email_id='$email', blood_group='$bloodgroup' WHERE user_name='$userLoggedIn'");

		$message = "User details updated<br>";
		header("Refresh:0");
}
else 
	$message = "";
/* ---------------------------------------------------------------------------------- */

//**************************************************

if(isset($_POST['update_password'])) {

	$old_password = strip_tags($_POST['old_password']);
	$new_password_1 = strip_tags($_POST['new_password_1']);
	$new_password_2 = strip_tags($_POST['new_password_2']);

	$password_query = mysqli_query($con, "SELECT password FROM users_blood WHERE user_name='$userLoggedIn'");
	$row = mysqli_fetch_array($password_query);
	$db_password = $row['password'];

	if(md5($old_password) == $db_password) {

		if($new_password_1 == $new_password_2) {
			if(strlen($new_password_1) <= 4) {
				$password_message = "Sorry, your password must be greater than 4 characters<br><br>";
			}	
			else {
				$new_password_md5 = md5($new_password_1);
				$password_query = mysqli_query($con, "UPDATE users SET password='$new_password_md5' WHERE user_name='$userLoggedIn'");
				$password_message = "Password has been changed!<br><br>";
			}
		}
		else {
			$password_message = "Your two new passwords need to match!<br><br>";
		}
	}
	else {
			$password_message = "The old password is incorrect! <br><br>";
	}
}
else
	$password_message = "";

?>
