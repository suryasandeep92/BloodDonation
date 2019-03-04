<?php 
	require 'main_header.php';
	require 'formhandlers/settingshandler.php';
 ?>
 <nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="index_login.php">Blood Donors</a>
			    </div>
			    
			    <ul class="nav navbar-nav navbar-right">
			      <li><a href="index_login.php"><span class="glyphicon glyphicon-user nav-item nav-link disabled""></span> Welcome <?php echo $user['first_name'].'  '.$user['last_name']; ?></a></li>
			      <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
			      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			    </ul>
		  </div>
 </nav>

<p align="center"><?php echo $message; ?></p>

<?php 
	$user_data_query = mysqli_query($con, "SELECT * FROM users_blood WHERE user_name='$userLoggedIn'");
	$row = mysqli_fetch_array($user_data_query);

	//storing all the database values of a particular user in
	$db_fname = $user['first_name'];
	$db_lname = $user['last_name'];
	$db_mnum = $user['mobile_number'];
	$db_em = $user['email_id'];
	$db_bgroup = $user['blood_group']; 
 ?>

 <form class="registration login" action="settings.php" method="POST">
 	<div class="form-group">
      <label for="email">First Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="" name="first_name" 
       value = "<?php echo $db_fname ?>" required>
		
	</div>
    <div class="form-group">
      <label for="pwd">Last Name:</label>
      <input type="text" class="form-control" id="lname" placeholder="" name="last_name"
       value = "<?php echo $db_lname ?> " required>
		
    </div>
    <div class="form-group">
      <label for="pwd">Mobile Number:</label>
      <input type="text" class="form-control" id="mnum" placeholder="" name="number"
       value = "<?php echo $db_mnum ?>" required>
		
	</div>
    <div class="form-group">
      <label for="b_group">Blood Group:</label>
      <select name="b_group">
		<option  value="A Positive" <?php  if(isset($db_bgroup)){
															if($db_bgroup == 'A Positive')
																echo 'selected = "selected"';
															else
																echo '';}
																 ?>>A Positive</option>
						<option  value="A Negative" <?php  if(isset($db_bgroup)){
															if($db_bgroup == 'A Negative')
																echo 'selected = "selected"';
															else
																echo '';}
															 	?>>A Negative</option>
						<option  value="B Positive" <?php  if(isset($db_bgroup)){
															if($db_bgroup == 'B Positive')
																echo 'selected = "selected"';
															else
																echo '';}
															 	?>>B Positive</option>
						<option  value="B Negative" <?php  if(isset($db_bgroup)){
															if($db_bgroup == 'B Negative')
																echo 'selected = "selected"';
															else
																echo '';}
															 	?>>B Negative</option>
						<option  value="O Positive" <?php  if(isset($db_bgroup)){
															if($db_bgroup == 'O Positive')
																echo 'selected = "selected"';
															else
																echo '';}
															 	?>>O Positive</option>
						<option  value="O Negative" <?php  if(isset($db_bgroup)){
															if($db_bgroup == 'O Negative')
																echo 'selected = "selected"';
															else
																echo '';}	
															 	?>>O Negative</option>
						<option  value="AB Positive" <?php if(isset($db_bgroup)){
															if($db_bgroup == 'AB Positive')
																echo 'selected = "selected"';
															else
																echo '';}
															 	?>>AB Positive</option>
						<option  value="AB Negative" <?php if(isset($db_bgroup)){
															if($db_bgroup == 'AB Negative')
																echo 'selected = "selected"';
															else
																echo '';}														
															 	?>>AB Negative</option>
	  </select>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="" name="email"
      value = "<?php  echo $db_em ?>" required>
    </div>
    <button type="submit" class="btn btn-warning" name="update_details">Update Details</button>
</form>
<hr>
<p align="center"><?php echo $password_message; ?></p>
 <form class="registration login" action="settings.php" method="POST">
 	<div class="form-group">
      <label for="pwd">Old Password:</label>
      <input type="password" class="form-control" id="pwd0" placeholder="Enter Old password" name="old_password">
    </div>
    <div class="form-group">
      <label for="pwd">New Password:</label>
      <input type="password" class="form-control" id="pwd1" placeholder="Enter password" name="new_password_1">
    </div>
    <div class="form-group">
      <label for="pwd">Confirm New Password:</label>
      <input type="password" class="form-control" id="pwd2" placeholder="Enter password" name="new_password_2">
    </div>
    <br>
    <button type="submit" class="btn btn-danger" name="update_password">Update Password</button>	
  </form>
