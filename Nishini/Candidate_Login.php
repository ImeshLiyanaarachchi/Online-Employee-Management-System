<?php
include("header.php");
include("connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["uname"];
    $password = $_POST["psw"];

    
    $sql = "SELECT * FROM users WHERE User_name = '$username' AND Password = '$password' AND User_type_id=2";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        header("Location: Candidate.php");
    } else {
        
        echo "Login failed. Please check your username and password.";
    }
}

$conn->close();
?>

		<div class="content"> 			
			
			<h1>Candidate Login</h1>
			
			
				<form name="login_form" id="login_form" action="Candidate_Login.php" method="post">
				
					
					

                    <div class="container">
					
							<div class="zoom1">
							<label for="uname"><b>Username:</b></label> 
							<input type="text" placeholder="Enter Username" id="uname" name="uname" required><br> <br> <br>
							</div>
							<div class="zoom2">
							<label for="psw" id="zoom2"><b>Password:</b></label>
							<input type="password" placeholder="**********" id="psw" name="psw" required><br> <br> <br>
							</div>
							

							<button type="submit" onClick="login()">Login</button><br> <br> <br>
							
						
							
							<div class="rem">
							<label>
								<input type="checkbox" name="remember"><i> Remember me  </i> <br><br>
							</label>
							</div>
							
					</div>

					<div class="container">
						<a href="#">Lost your password?</a>
					</div><br>
					
					<div id="reg1">
					<p>Don't have an account?  <a href="Candidate_Registration.php">Register</a> </p>
					</div>
					

				</form>
			
			
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