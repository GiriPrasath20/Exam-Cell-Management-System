<?php
	 set_time_limit(4000);
     $conn = mysqli_connect("localhost","root","root") or die("Unable to connect to MySQL");  
     echo " "; 
     $db   = mysqli_select_db($conn,"examcell3") or die("Could not select Database");
?>
