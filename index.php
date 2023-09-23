<?php
	$page_title = "SHREYAAA";
	include_once('includes/header.php');
?>

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="assets/img/INDIA.jpg" alt="First slide">
				<div class="jumbotron">
					<div class="container">
						<div class="carousel-caption">
							<h1>TOURIST WEBSITE</h1>
							<p>Welcome to Best Tourist Destination In India!</p>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="assets/img/camel.jpg" alt="Second slide">
				<div class="jumbotron">
					<div class="container">
						<div class="carousel-caption">
							
							<p>Create an account to view your favorite destination</p>
							<p><a class="btn btn-lg btn-info" href="registration.php" role="button">Sign up today</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="assets/img/Mysore-Flickr.jpg.jpg" alt="Third slide">
				<div class="jumbotron">
					<div class="container">
						<div class="carousel-caption">
							<h1>Read Reviews</h1>
							<p>Browse all of our reviews and find out more about your favorite destination!</p>
							<p><a class="btn btn-lg btn-info" href="reviews.php" role="button">VIEW REVIEWS &raquo;</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="assets/img/lake.jpg" alt="Fourth slide">
				<div class="jumbotron">
					<div class="container">
						<div class="carousel-caption">
							<h1>Best Waterfalls in India</h1>
							<!--<p><a class="btn btn-lg btn-info" href="reviews.php" role="button">VIEW REVIEWS &raquo;</a></p>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.carousel -->

	<div class="container">
		<!-- Example row of columns -->
		<div class="row">
			<div class="col-md-4">
				<h2>CREATE ACCOUNT</h2>
				<p>Sign up for an account in order to add a review to your favorite place</p>
				<p><a class="btn btn-default" href="registration.php" role="button">SIGN UP &raquo;</a></p>
			</div>
			<div class="col-md-4">
				<h2>LIST DESTINATIONS</h2>
				<p>Browse our list of destination along with best time to go,package, and even reviews!</p>
				<p><a class="btn btn-default" href="Destinations.php" role="button">VIEW DESTINATIONS &raquo;</a></p>
			</div>
			<div class="col-md-4">
				<h2>LIST REVIEWS</h2>
				<p>Browse all of our reviews and find out more about what others favorite destination!</p>
				<p><a class="btn btn-default" href="reviews.php" role="button">VIEW REVIEWS &raquo;</a></p>
			</div>
		</div>

	</div> <!-- /container -->


<?php
	include_once('includes/footer.php');