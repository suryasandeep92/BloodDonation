<?php
	require 'config/configuration.php';
	require 'header.php';
	require 'formhandlers/registration.php';

	//Checks whether the user is already logged in or not, if logged in then execute below code
	//if(isset($_SESSION['username']))
	//	header('Location: logout.php');

 ?>
 <nav class="navbar navbar-inverse" id="navbar">
		  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="index.php">Blood Donors</a>
			    </div>
			    <ul class="nav navbar-nav navbar-right">
			      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			    </ul>
		  </div>
 </nav>
	 
 <form class="registration login" action="register.php" method="POST">
 	<?php
    	if(in_array("<span style='color: #14C800;'>You're all set! Goahead and login!</span><br>", $error_array))
			 echo "<span id='span_display' style='color: #14C800;'><b><h4><a href='login.php'>You're all set! Go ahead and login!</a></h4></b></span><br>";
     ?>

 	<div class="form-group">
      <label for="email">First Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="first_name" 
       value = "<?php 
		if(isset($_SESSION['first_name'])) {
			echo $_SESSION['first_name'];
		} 
		?>" required>
		<br>
		<?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your first name must be between 2 and 25 characters<br>"; ?>
    </div>
    <div class="form-group">
      <label for="pwd">Last Name:</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="last_name"
       value = "<?php 
		if(isset($_SESSION['last_name'])) {
			echo $_SESSION['last_name'];
		} 
		?>" required>
		<br>
		<?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo "Your last name must be between 2 and 25 characters<br>"; ?>
    </div>
    <div class="form-group">
      <label for="pwd">Mobile Number:</label>
      <input type="text" class="form-control" id="mnum" placeholder="Enter Mobile Number without +91" name="number"
       value = "<?php 
		if(isset($_SESSION['number'])) {
			echo $_SESSION['number'];
		} 
		?>" required>
		<br>
		<?php if(in_array("Please enter a valid mobile number<br>", $error_array))
				echo "Please enter a valid mobile number<br>";
			  elseif (in_array("Please verify the mobile number<br>",$error_array)) {
			   	echo "Please verify the mobile number<br>";
			   } ?>
    </div>
    <div class="form-group">
      <label for="b_group">Blood Group:</label>
      <select name="b_group">
		<option value="A Positive">A +</option>
		<option value="A Negative">A -</option>
		<option value="B Positive">B +</option>
		<option value="B Negative">B -</option>
		<option value="O Positive">O +</option>
		<option value="O Negative">O -</option>
		<option value="AB Positive">AB +</option>
		<option value="AB Negative">AB -</option>
	  </select>
	  <br>
		<?php if(in_array("Please select a blood Group<br>", $error_array))echo "Please select a blood Group<br>"; ?>
    </div>
    
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"
      value = "<?php 
		if(isset($_SESSION['email'])) {
			echo $_SESSION['email'];
		} 
		?>" required>
		<br>
		<?php if(in_array("Invalid email format<br>", $error_array)) echo "Invalid email format<br>"; ?>
    </div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
      <label for="pwd">Confirm Password:</label>
      <input type="password" class="form-control" id="pwd2" placeholder="Enter password" name="pwd_2">
    </div>
    <br>
    <?php if(in_array("Your passwords do not match<br>", $error_array)) echo "Your passwords do not match<br>"; 
		else if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "Your password can only contain english characters or numbers<br>";
		else if(in_array("Your password must be betwen 5 and 30 characters<br>", $error_array)) echo "Your password must be betwen 5 and 30 characters<br>"; ?>
    <button type="submit" class="btn btn-default" name="reg_submit">Submit</button>
    <br>	
  </form>
    
