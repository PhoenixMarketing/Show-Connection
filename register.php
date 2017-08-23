<?php 

 require 'db.php';
 require "include/form handler/register form.php";
 require 'login.php';
 


?>


<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
	<link rel="stylesheet" href="assets/css/register.css">
	<script src="http://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
     crossorigin="anonymous"></script>
</head>
<body>
        <!-- <div class= "login_box"> -->
            <!-- <div class="login_header"> -->
               <h1 style= "color:white; margin:5px;margin-top: 100px"> Show Connection </h1>
                <div style= "color: white;margin:5px"> login or sign up below !!

            </div>
		    <form action = "register.php" method="POST">
		      <input type= "email" name = "log_email" placeholder="Email address" value= "<?php 
			    if(isset($_SESSION['log_email'])){
			    	echo $_SESSION['log_email'];
			    }
			    ?>" required>
		       <br>
		       <input type= "password" name= "log_password" placeholder="Password">
		       <br>
		       <input type="submit" name="login_button" value= "login">

		       <?php if(in_array("Email or password was incorrect <br>", $error_array)) echo "Email or password was incorrect <br>" ;?>
		    </form>
		    <br>
		   <form action="register.php" method= "POST">
			    <input type="text" name="reg_fname" placeholder="first Name" value= "<?php 
			    if(isset($_SESSION['reg_fname'])){
			    	echo $_SESSION['reg_fname'];
			    }

		  ?>"  required>
			    <br>
			    <?php if(in_array("your first name must be between 2 and 25 characters<br>", $error_array)) 
		 	    		echo "your first name must be between 2 and 25 characters<br>"; ?>

			    <input type="text" name="reg_lname" placeholder="last name" required>
			    <br>
			    <?php if(in_array("your last name must be between 2 and 25 characters<br>", $error_array)) 
		 	    		echo "your last name must be between 2 and 25 characters<br>"; ?>
			    
			    <input type="email" name= "reg_email" placeholder="email" required>
			    <br>
			    <?php if(in_array("Email already in use<br>",$error_array))
			            echo 'Email already in use<br>'; ?>
			    

			    <input type="password" name="reg_password" placeholder="password" required>
			    <br>
			     <?php if(in_array("your passwords do not match <br>", $error_array)) 
		 	    		echo "your passwords do not match <br>"; ?>
			    <input type="password" name="reg_password2" placeholder="Confirm Password" required>
			    <br>
			     <?php if(in_array("your passwords do not match <br>", $error_array)) 
		 	    		echo "your passwords do not match <br>"; ?>
			    <input type="submit" name="register_button" value="Register" >
			    <br>
			    <br>
		 </form>
		</div>
</body>
</html>
