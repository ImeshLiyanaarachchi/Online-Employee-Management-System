<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "user";

$conn = new mysqli($servername, $username, $password, $database);


$first_name = "";
$last_name = "";
$user_name = "";
$password = "";
$contact_number = "";
$email = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];
    $contact_number = $_POST["contact_number"];
    $email = $_POST["email"];

    
    $sql = "INSERT INTO user_data (first_name, last_name, user_name, password, contact_number, email)
            VALUES ('$first_name', '$last_name', '$user_name', '$password', '$contact_number', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record added successfully.";
    } else {
        echo $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Data</title>
</head>
<body>
    <center>
    <h1>Insert Data</h1><br><br><br>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>"><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" value="<?php echo $last_name; ?>"><br><br>

        <label for="user_name">User Name:</label>
        <input type="text" name="user_name" id="user_name" value="<?php echo $user_name; ?>"><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" value="<?php echo $password; ?>"><br><br>

        <label for="contact_number">Contact Number:</label>
        <input type="text" name="contact_number" id="contact_number" value="<?php echo $contact_number; ?>"><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo $email; ?>"><br><br><br>
        
        <input type="submit" value="Insert Data">
    </form>
    
</center>
</body>
</html>

<?php

$conn->close();
?>
