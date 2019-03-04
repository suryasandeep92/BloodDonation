<?php  

$limit = 10; //Number of posts to be loaded per call

loadUsers($_REQUEST, $limit);

function loadUsers($data, $limit) {

		require 'config/configuration.php';
		$page = $data['page']; 

		if($page == 1) 
			$start = 0;
		else 
			$start = ($page - 1) * $limit;

		$str = ""; //String to return 
		$data_query = mysqli_query($con, "SELECT * FROM users_blood ORDER BY id DESC");

		if(mysqli_num_rows($data_query) > 0) {


			$num_iterations = 0; //Number of results checked (not necasserily posted)
			$count = 1;

			while($row = mysqli_fetch_array($data_query)) {
				$id = $row['id'];
				$donor_name = $row['first_name']." ".$row['last_name'];
				$blood_group = $row['blood_group'];
				$number = $row['mobile_number'];

					if($num_iterations++ < $start)
						continue; 


					//Once 10 posts have been loaded, break
					if($count > $limit) {
						break;
					}
					else {
						$count++;
					}

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
				
			} //End while loop

			if($count > $limit) 
				$str .= "<input type='hidden' class='nextPage' value='" . ($page + 1) . "'>
							<input type='hidden' class='noMorePosts' value='false'>";
			else 
				$str .= "<input type='hidden' class='noMorePosts' value='true'><p style='text-align: centre;'> No more data to show! </p>";
		}

		echo $str;


	}

?>