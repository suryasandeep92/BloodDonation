<?php 
	require 'main_header.php';
 ?>
 <nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="#">Blood Donors</a>
			    </div>
			    <form class="navbar-form navbar-left" action="" method ="POST">
			      <div class="form-group">
			        <select name='search' class="btn btn-default">
						<option  value="A Positive" <?php  if(isset($check)){
															if($check == 'A Positive')
																echo 'selected = "selected"';
															else
																echo '';}
																 ?>>A Positive</option>
						<option  value="A Negative" <?php  if(isset($check)){
															if($check == 'A Negative')
																echo 'selected = "selected"';
															else
																echo '';}
															 	?>>A Negative</option>
						<option  value="B Positive" <?php  if(isset($check)){
															if($check == 'B Positive')
																echo 'selected = "selected"';
															else
																echo '';}
															 	?>>B Positive</option>
						<option  value="B Negative" <?php  if(isset($check)){
															if($check == 'B Negative')
																echo 'selected = "selected"';
															else
																echo '';}
															 	?>>B Negative</option>
						<option  value="O Positive" <?php  if(isset($check)){
															if($check == 'O Positive')
																echo 'selected = "selected"';
															else
																echo '';}
															 	?>>O Positive</option>
						<option  value="O Negative" <?php  if(isset($check)){
															if($check == 'O Negative')
																echo 'selected = "selected"';
															else
																echo '';}	
															 	?>>O Negative</option>
						<option  value="AB Positive" <?php if(isset($check)){
															if($check == 'AB Positive')
																echo 'selected = "selected"';
															else
																echo '';}
															 	?>>AB Positive</option>
						<option  value="AB Negative" <?php if(isset($check)){
															if($check == 'AB Negative')
																echo 'selected = "selected"';
															else
																echo '';}														
															 	?>>AB Negative</option>
				    </select>
			      </div>
			      <button type="submit" class="btn btn-default" name="submitSearch">Submit</button>
			    </form>
			    <ul class="nav navbar-nav navbar-right">
			      <li><a href="index_login.php"><span class="glyphicon glyphicon-user nav-item nav-link disabled""></span> Welcome <?php echo $user['first_name'].'  '.$user['last_name']; ?></a></li>
			      <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
			      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			    </ul>
		  </div>
 </nav>
 <div class="posts_area">
		<?php if(empty($str))
				echo '';
			  else
			  	echo $str;
			  	 ?>
	</div>



