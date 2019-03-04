<?php
	require 'config/configuration.php';
	require 'header.php';
	require 'formhandlers/registration.php';

	

	//Checks whether the user is already logged in or not, if logged in then redirect to index_login webpage
	if(isset($_SESSION['username']))
		header('Location: index_login.php');
	//When the login button is clicked then below code will be executed
	if(isset($_POST['login_submit'])) {
			$number = "";
			$password = "";
			$_SESSION['username']='';
			$errorMsg = '';

			$number = $_POST['number'];
			$number = strip_tags($_POST['number']); //Remove html tags
			$number = str_replace(' ', '', $number); //remove spaces

			$_SESSION['number'] = $number; //Store email into session variable 
			$password = md5($_POST['log_pwd']); //Get password

			$check_database_query = mysqli_query($con, "SELECT * FROM users_blood WHERE mobile_number='$number' AND password='$password'");
			$check_login_query = mysqli_num_rows($check_database_query);

			if($check_login_query == 1) {
				echo 'login successful';
				$row = mysqli_fetch_array($check_database_query);
				$username = $row['user_name'];
				$_SESSION['username'] = $username;
				header('Location: index_login.php');
			}
			else {
			$errorMsg = 'Invalid login credentials<br><br>';	
			}
		}

 ?>
 <nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="index.php">Blood Donors</a>
			    </div>
			    <ul class="nav navbar-nav navbar-right">
			      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
			    </ul>
		  </div>
 </nav>

 <form class="registration login" action="login.php" method="POST">
 	
    <div class="form-group">
      <label for="email">Number:</label>
      <input type="number" class="form-control" id="number" placeholder="Enter number" name="number"
      value = "<?php 
		if(isset($_SESSION['number'])) {
			echo $_SESSION['number'];
		} 
		?>" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="log_pwd">
    </div>
 	<?php 
 		if(empty($errorMsg)) //if the errorMsg is empty then it is proper login, if not then display the error msg 
 			echo "";
 		else
 			echo $errorMsg;
 	 ?>
    <button type="submit" class="btn btn-default" name="login_submit">Submit</button>
    <br>	
  </form>