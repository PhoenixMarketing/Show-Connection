// This is a single-line comment

# This is also a single-line comment

/*
This is a multiple-lines comment block
that spans over multiple
lines
*/

Google Maps API Key
 AIzaSyBlH6U6c26dd8pcYs6y3JwLayh2vybyPYs


<img class="img-responsive center-block" src="images/countrymusic.jpg" alt="rocknroll">
<a href="index.php">The Event Connection</a>
<a href="index.php"><img class="img-responsive center-block" src="images/countrymusic.jpg" alt="rocknroll"></a>
<?php

$hostname="db694050534.db.1and1.com";
$database="db694050534";
$username="dbo694050534";
$password="scqwaszx1!";


//ENTER YOUR DATABASE CONNECTION INFO BELOW:
$hostname="db1111111111.db.1and1.com";
$database="db1111111111";
$username="dbo111111111";
$password="myPassword";

//DO NOT EDIT BELOW THIS LINE
$link = mysql_connect($hostname, $username, $password);
if (!$link) {
die('Connection failed: ' . mysql_error());
}
else{
     echo "Connection to MySQL server " .$hostname . " successful!
" . PHP_EOL;
}

$db_selected = mysql_select_db($database, $link);
if (!$db_selected) {
    die ('Can\'t select database: ' . mysql_error());
}
else {
    echo 'Database ' . $database . ' successfully selected!';
}

mysql_close($link);

?>
