<?php
	$hostdb="localhost";
	$userdb="root";
	$passdb="";
	$namedb="leave_management";

	$conn=mysqli_connect($hostdb,$userdb,$passdb,$namedb);
	if(!$conn){
		echo "Database Connection Error!";	
	}	
 ?>