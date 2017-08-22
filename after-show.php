<!doctype html>
<html lang="en">

<!-- contains header -->

<head>
	<title>The Show Connection</title>
	<link rel = "icon" href = "./images/phoenix.png">

	<meta charset="utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="description" content="the description" />
	<meta name="keywords" content="Sorting table columns" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- 2 scripts below are from geolocation -->
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script src="./js/geolocation-marker.js"></script>

	<link rel = "stylesheet" type = "text/css" href = "./css/core.css">
	<link rel = "stylesheet" type = "text/css" href = "./css/style.css">


	<style>
	/* Always set the map height explicitly to define the size of the div
	* element that contains the map. */
	#map {
		height: 100%;
	}
	/* Optional: Makes the sample page fill the window. */
	html, body {
		height: 100%;
		margin: 0;
		padding: 0;
	}
	</style>

</head>

<body>

	<div class="container-fluid"> <!-- closes in footer -->

		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-left" href="index.php"><h1>Show Connection</h1></a>
			</div>

			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="after-show.php">AFTER SHOCK<br>Friday Aug 23rd 2017</a></li>
					<li class="active"><a href="after-show.php#maps">Maps</a></li>
					<li><a href="after-show.php#sched">Schedule</a></li>
					<li><a href="after-posts.php"> Posts </a></li>
					<li><a href="after-show.php#offers"> Offers </a></li>
				</ul>
			</div>
		</div>
	</nav>


	<div class="row" id="maps" style="margin-top:120px"><!-- wraps-->
		<div class="col-sm-12"><!-- wraps-->
			<img class="img-responsive center-block" src="images/after/after-map.jpg" alt="rocknroll">
		</div><!-- col-->
	</div><!-- row-->

	<hr>


	<div class="row">
		<div class="col-x-sm-12">
			<p> info</p>
		</div>
	</div>


	<div id="map" style="margin:20px">
		<script>
		// Note: This example requires that you consent to location sharing when
		// prompted by your browser. If you see the error "The Geolocation service
		// failed.", it means you probably did not give permission for the browser to
		// locate you.
		var map, infoWindow;
		function initMap() {
			map = new google.maps.Map(document.getElementById('map'), {
				center: {lat: -34.397, lng: 150.644},
				zoom: 15
			});
			infoWindow = new google.maps.InfoWindow;

			// Try HTML5 geolocation.
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(function(position) {
					var pos = {
						lat: position.coords.latitude,
						lng: position.coords.longitude
					};

					infoWindow.setPosition(pos);
					infoWindow.setContent('Location found.');
					infoWindow.open(map);
					map.setCenter(pos);
				}, function() {
					handleLocationError(true, infoWindow, map.getCenter());
				});
			} else {
				// Browser doesn't support Geolocation
				handleLocationError(false, infoWindow, map.getCenter());
			}
		}

		function handleLocationError(browserHasGeolocation, infoWindow, pos) {
			infoWindow.setPosition(pos);
			infoWindow.setContent(browserHasGeolocation ?
				'Error: The Geolocation service failed.' :
				'Error: Your browser doesn\'t support geolocation.');
				infoWindow.open(map);
			}

			</script>


			<script async defer
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlH6U6c26dd8pcYs6y3JwLayh2vybyPYs&callback=initMap">
			</script>

		</div>

		<hr>

		<div class="row" id="sched"><!-- wraps-->
			<div class="col-sm-12"><!-- wraps-->
				<img class="img-responsive center-block" src="images/after/after-sch-sat.png" alt="after-sched">
			</div><!-- col-->
		</div><!-- row-->

		<hr>

		<div class="row" id="offers">
			<div class="col-sm-12">
				<p>Offers</p>
			</div><!-- col-->
		</div><!-- row-->

		<hr>

		<?php include 'footer.php';?>

		<!-- xxxx  -->
