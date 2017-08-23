<?php
require "db.php";

if (isset($_SESSION['username'])) {
	$userLoggedIn = $_SESSION['username'];
	$user_details_query = mysqli_query($con,"SELECT * FROM users WHERE username= '$userLoggedIn'");
	$user = mysqli_fetch_array($user_details_query);
}
 else {
 	header("location: register.php");
 }
?>


<!DOCTYPE html>
<html>
<head>
	<title>welcome to the Show Connection</title>
	<script src= "https://code.jquery.com/jquery-3.2.1.min.js "</script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/fonts/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
   <div class= "top_bar">
       <div class="logo">
       <a href= "index.php"> show connection </a>
        </div>
        <nav>
           <a href= "#">
               <?php echo $user['first_name'] ?> </a>
          <a href= "#"><i class="fa fa-home" aria-hidden="true"></i></a>
           <a href= "#">messages</a>
            <a href= "#">settings</a>
            <a href="include/handlers/logout.php"><i class="fa-sign-out fa-lg"></i></a>

        </nav>

        
   </div>
   <div class = "wrapper">
</body>
</html>