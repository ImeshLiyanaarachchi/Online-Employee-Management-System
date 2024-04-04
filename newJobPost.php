<?php
	include 'config.php';
	
	$job_title =$_POST['jobtitle']; 
	$company_name =$_POST['companyname'];
	$job_description =$_POST['jobdescription'];
	$job_requirements=$_POST['jobrequirements'];
	$salary_=$_POST['salary'];
	$location_=$_POST['location'];
	
	$sql="insert into jobpost(jobtitle,companyname,jobdescription,jobrequirements,salary,location) values(?,?,?,?,?,?)";
	$statement=$conn->prepare($sql);
	
	
	$statement->bind_param("ssssss",$job_title,$company_name,$job_description,$job_requirements,$salary_,$location_);
	

	if($statement->execute()){
		echo 'Job Post Added Successfully';
	}
	else{
		echo 'Insert Data Error';
	}
	


?>