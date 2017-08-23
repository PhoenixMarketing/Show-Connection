<?php

//declaering variables to prevent errors
$fname = "";
$lname = "";
$em = "";
$password = "";
$password2 = "";
$date = "";
$error_array = array();

 if(isset($_POST["register_button"])){


 	$fname = strip_tags($_POST['reg_fname']);
 	$fname = str_replace(' ', '', $fname);
 	$fname = ucfirst(strtolower($fname));
    $_SESSION['reg_fname']= $fname;

    $lname = strip_tags($_POST['reg_lname']);
 	$lname = str_replace(' ', '', $lname);
 	$lname = ucfirst(strtolower($lname));
 	$_SESSION['reg_lname']= $lname;

    $em = strip_tags($_POST['reg_email']); 
 	$em = str_replace(' ', '', $em);
 	$em = ucfirst(strtolower($em));  
 	$_SESSION['reg_email']= $em;

 	$password= strip_tags($_POST['reg_password']);
 	$password2= strip_tags($_POST['reg_password2']); 

 	$date = date ("Y-m-d");

 	if ($em == $em) {
 
 		if (filter_var($em, FILTER_VALIDATE_EMAIL)) {
 			
 			$em = filter_var ($em, FILTER_VALIDATE_EMAIL);

 			$e_check = mysqli_query($con,"SELECT email FROM users WHERE email= '$em'");
 			$num_rows = mysqli_num_rows($e_check);

 			if ($num_rows> 0) {
 				  array_push ($error_array,"Email already in use<br>");
 			}
 		}
 		else {
 			array_push ($error_array, "Invalid format<br>");
 		}
 	}
 	
 		else  {
 			array_push ($error_array, "Emails don't match<br>");
 		}
 	    if(strlen($fname) > 25 || strlen($fname) <2) {
 	    	array_push ($error_array, "your first name must be between 2 and 25 characters<br>");
 	    }
 	    if (strlen($lname) > 25 || strlen($lname) < 2) {
 	    	array_push ($error_array, "your last name must be between 2 and 25 characters<br>");
 	    } 
 	    if($password != $password2) {
 	    	array_push ($error_array,"your passwords do not match <br>");
 	    
        }
 	    else {
 	    	if(preg_match('/A-Za-z0-9]/',$password)) {
 	    		array_push ($error_array, "your password can only containe english characters or numbers <br>");
 	    	}
 	    }

 	    if (strlen($password > 30 || strlen($password)< 5)){
 	    	array_push ($error_array, "your password must be between 5 and 30 characters<br>"); 
 	    }

 	    if(empty($error_array)) {
 	    	$password = md5 ($password);//Encrypt password before sending to the database
 	    	//generating username by concatenating first name and last name 
 	    	$username = strtolower($fname. "_". $lname);
 	    	$check_username_query = mysqli_query($con,"SELECT username FROM users WHERE username='$username'");
 	    	$i = 0;
 	    	//if username exists add number to username
 	    	while(mysqli_num_rows($check_username_query) != 0) {
 	    		$i++;
 	    		$username = $username. "_" .$i;
 	    		$check_username_query = mysqli_query($con,"SELECT username FROM users WHERE username='$username'");
 	    	}
            $rand = rand(1,2);

            if($rand == 1)
            	$profile_pic = "assets/images/profile_pics/defaults/female_default.png";
          
            else if ($rand == 2)
 	    	$profile_pic = "assets/images/profile_pics/defaults/profile_avatar.jpg";
 	    
             $query1 = "INSERT into users (username,email,first_name,last_name,password,profile_pic,friend_array,num_posts,num_likes,signup_date,user_closed) VALUES ('$username','$em','$fname','$lname','$password','$profile_pic',',','0','0',$date,'no')";  
              $res= mysqli_query($con,$query1) or die (mysqli_error($con)); 

            

        }
 	    
 	
 }
?>