<?php

	$host="127.0.0.1:3306";
	$user="root";
	$password="root";
	$myDb="riktam_demo";

	$con = new mysqli($host,$user,$password,$myDb);
	if($con->connect_error)
		die("Connection failed: ".$con->connect_error);
?>