<?php

require "../config/config.php";

$doc=$_POST['doc'];


$currentdate=date("Y-m-d");

$sql="insert into upload_document(type,up_date) values('$doc','$currentdate')";

if($con->query($sql)){
		echo "Inserted successfully<br>";
	}
	else{
		echo "Error:". $con->error;
	}

    $fileNo = $_FILES['doc']['no'];
    $fileName = $_FILES['doc']['name'];
	$fileType = $_FILES['doc']['type'];
	$fileSize = $_FILES['doc']['size'];
	

	if( $fileType == 'application/pdf'){

		if(move_uploaded_file($fileNo, "upload/$fileName")){
			echo "File uploaded successfully.";

		}else{
			echo "File upload failed";
		}

	}else{

		echo "Please select only PDF file.";
	}












?>