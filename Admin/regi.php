<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "user";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from the registration form
$first_name = $_POST["fname"];
$last_name = $_POST["sname"];
$user_name = $_POST["uname"];
$email = $_POST["email"];
$contact_number = $_POST["cn"];
$password = $_POST["psw"];

// You should hash the password before storing it in the database for security
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// SQL query to insert data into the user_data table
$sql = "INSERT INTO user_data (first_name, last_name, user_name, email, contact_number, password)
        VALUES ('$first_name', '$last_name', '$user_name', '$email', '$contact_number', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful. You can now log in.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
