<?php
	$conn=mysqli_connect("localhost","root","","omega_telecome");
	if($conn->connect_errno>0)
	{
		die("Database Not Connect".$conn->connect_error);
	}
	else
	{
	$message="Database Connect";
	}
?>