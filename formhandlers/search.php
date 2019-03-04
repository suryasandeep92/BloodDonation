<?php 
		if(isset($_POST['submitSearch']))
		{	
			$search = '';
			$str = '';
			//removing all the html tags and assigning it to a session variable
			$search = strip_tags($_POST['search']);
			$search_query = mysqli_query($con, "SELECT * FROM users_blood WHERE blood_group = '$search'");
			while($row = mysqli_fetch_array($search_query))
			{

				$donor_name = $row['first_name']." ".$row['last_name'];
				$blood_group = $row['blood_group'];
				$number = $row['mobile_number'];

				$str .= "<div class='status_post'>
								<div id='post_body'>
								   <div class='donor_name'>	
									<p><strong>$donor_name</strong></p>
								   </div>									   
								   <div class='donor_blood'>	
									<b>$blood_group</b> 
								   </div>
								   <div class='donor_num'>	
									<b>$number</b>		
								   </div>							   
									<br>
								</div>
							</div>
							<hr>";
			}
			//for sticky selection
			$check = $_POST['search'];
		}
		 ?>