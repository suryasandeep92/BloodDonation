<?php
	require 'config/configuration.php';
	require 'header.php';
 ?>

	<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="#">Blood Donors</a>
			    </div>
			    <form class="navbar-form navbar-left" action="" method = "POST">
			      <div class="form-group">
			        <input type="text" class="form-control" placeholder="Search" name="search">
			      </div>
			      <button type="submit" class="btn btn-default" name="submitSearch">Submit</button>
			    </form>
			    <ul class="nav navbar-nav navbar-right">
			      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
			      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			    </ul>
		  </div>
	</nav>

	<div class="posts_area"></div>
	<img id="loading" src="Images_gifs/loading.gif">

	<script>
	
	$(document).ready(function() {

		$('.navbar-form').click(function(e) {  
		    window.location.href = 'search.php';
		});

		$('#loading').show();

		//Original ajax request for loading first posts 
		$.ajax({
			url: "ajax_load_users.php",
			type: "POST",
			data: "page=1",
			cache:false,

			success: function(data) {
				$('#loading').hide();
				$('.posts_area').html(data);
			}
		});

		$(window).scroll(function() {
			var height = $('.posts_area').height(); //Div containing posts
			var scroll_top = $(this).scrollTop();
			var page = $('.posts_area').find('.nextPage').val();
			var noMorePosts = $('.posts_area').find('.noMorePosts').val();

			if ((document.body.scrollHeight == document.body.scrollTop + window.innerHeight) && noMorePosts == 'false') {
				$('#loading').show();

				var ajaxReq = $.ajax({
					url: "ajax_load_users.php",
					type: "POST",
					data: "page=" + page,
					cache:false,

					success: function(response) {
						$('.posts_area').find('.nextPage').remove(); //Removes current .nextpage 
						$('.posts_area').find('.noMorePosts').remove(); //Removes current .nextpage 

						$('#loading').hide();
						$('.posts_area').append(response);
					}
				});

			} //End if 

			return false;

		}); //End (window).scroll(function())


	});

	</script>

</body>

</html>