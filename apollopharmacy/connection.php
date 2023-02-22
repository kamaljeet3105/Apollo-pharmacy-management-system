<?php
	$server = "localhost";
	$userid = "root";
	$password = "";
	$db = "apollopharmacy";
	
	$conn = mysqli_connect($server,$userid,$password,$db);
	
	if($conn)
	{
		echo "connected";
	}
	else
	{
		echo "Not connected";
	}
?>