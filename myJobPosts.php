<?php
	include_once 'config.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Express Jobs Login Page</title>
		<link rel="stylesheet" type="text/css" href="styles\styles.css">
		<script src="js\Nethmiscript.js"></script>
    </head>
	<body background="images/imesh.jpg">
	
		
		
		<div class="header1">
		
		<img src="logo.png" class="logo1">
		<h1>Express Jobs International</h1>
		
		</div>
		<ul class="menu">
			<li><a href="index.html">Home</a></li>
			<li><a href="News.html">Candidates</a></li>
			<li><a href="Employee.html">Employees</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">About us</a></li>
			<li><a href="#">Contact us</a></li>
			<li><a href="#">Login</a></li>
			
		</ul>
        <div>
        <table class="job-table">
        <th>Job_ID</th>
        <th>Job Title</th>
        <th>Comapany Name</th>
        <th>Job Description</th>
        <th>Job Requirements</th>
        <th>Salary</th>
        <th>Location</th>
        <th>Operations</th>


        <?php
         $sql = "select * from `jobpost`";
        $result=mysqli_query($conn,$sql);
        if($result)  {
            while($row=mysqli_fetch_assoc($result)){
            $id=$row['jobID'];
            $jobtitle=$row['jobtitle'];
            $companyname=$row['companyname'];
            $jobdescription=$row['jobdescription'];
            $jobrequirements=$row['jobrequirements'];
            $salary=$row['salary'];
            $location=$row['location'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$jobtitle.'</td>
            <td>'.$companyname.'</td>
            <td>'.$jobdescription.'</td>
            <td>'.$jobrequirements.'</td>    
            <td>'.$salary.'</td>
            <td>'.$location.'</td>
            <td>
            <button class="button2"><a href="updatenew.php?updateid='.$id.'">Update</a></button>
            <button class="button2"><a href="deletenew.php?deleteid='.$id.'">Delete</a></button>
            </td>
            
            </tr>';
        }
    }

    ?>
    </div>


		<hr>
		<footer class="footer">
		<div class="footer-rectangle">
        <!-- Content for the first rectangle -->
        <h3><u>Express jobs</u></h3>
		
        <p><a href="about-us.html">About Us</a></p>
        <p><a href="mission.html">Mission</a></p>
        <p><a href="vision.html">Vision</a></p>
		
		</div>
    
		<div class="footer-rectangle">
        <!-- Content for the second rectangle -->
        <h3><u>Services</u></h3>
		<ul>
        <li><p>Posting jobs</p></li>
		<li><p>Finding jobs</p></li>
		</ul>
		</div>
    
		<div class="footer-rectangle">
        <!-- Content for the third rectangle -->
        <h3><u>Contact us</u></h3>
		<ul>
        <li><p>+94770639410</p></li>
		<li><p>+94770639510</p></li>
		
		<a href="#"><li>expressjobsonline@gmail.com</li></a></p>
		</ul>
		</div>
		
		</footer>
			
	</body>
</html>