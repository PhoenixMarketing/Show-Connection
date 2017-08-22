<!doctype html>
<html lang="en">

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

    <!-- main site menu -->

      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-left" href="after-show.php"><h1>AFTER SHOCK</h1></a>
          </div>

          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li class="active"><a href="after-maps.php">Maps</a></li>
              <li><a href="after-schedule.php"> Schedule </a></li>
              <li><a href="after-posts.php"> Posts </a></li>
              <li><a href="after-offers.php"> Offers </a></li>
            </ul>
          </div>
        </div>
      </nav>
