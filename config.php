<?php
	$server_name ="localhost";
	$user_name = "root";
	$password = "";
	$database ="express_jobs";
	
	$conn = new mysqli($server_name,$user_name,$password,$database);
	
	if($conn -> connect_error){
		die("Connection error");
	}



?>