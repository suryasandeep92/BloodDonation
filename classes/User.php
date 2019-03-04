<?php
class User {
	private $user;
	private $con;

	public function __construct($con, $user){
		$this->con = $con;
		$user_details_query = mysqli_query($con, "SELECT * FROM users_blood WHERE user_name='$user'");
		$this->user = mysqli_fetch_array($user_details_query);
	}

	public function getUsername() {
		return $this->user['user_name'];
	}

	public function getFirstAndLastName() {
		$username = $this->user['user_name'];
		$query = mysqli_query($this->con, "SELECT first_name, last_name FROM users_blood WHERE user_name='$username'");
		$row = mysqli_fetch_array($query);
		return $row['first_name'] . " " . $row['last_name'];
	}

	public function getMobileNumber() {
		$username = $this->user['user_name'];
		$query = mysqli_query($this->con, "SELECT mobile_number FROM users_blood WHERE user_name='$username'");
		$row = mysqli_fetch_array($query);
		return $row['mobile_number'];
	}

	public function getBloodGroup() {
		$username = $this->user['user_name'];
		$query = mysqli_query($this->con, "SELECT blood_group FROM users_blood WHERE user_name='$username'");
		$row = mysqli_fetch_array($query);
		return $row['blood_group'];
	}

}

?>