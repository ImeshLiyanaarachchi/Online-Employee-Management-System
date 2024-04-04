<!DOCTYPE html>
<html>
<head>
    <title>Update Data</title>
</head>
<body>
    <center>
    <h1>Update Data</h1><br><br><br>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="user_name">User Name:</label>
        <input type="text" name="user_name" id="user_name" placeholder="Enter User Name"><br><br>

        <label for="new_first_name">New First Name:</label>
        <input type="text" name="new_first_name" id="new_first_name" placeholder="Enter New First Name"><br><br>

        <label for="new_last_name">New Last Name:</label>
        <input type="text" name="new_last_name" id="new_last_name" placeholder="Enter New Last Name"><br><br>

        <label for="new_password">New Password:</label>
        <input type="password" name="new_password" id="new_password" placeholder="Enter New Password"><br><br>

        <label for="new_contact_number">New Contact Number:</label>
        <input type="text" name="new_contact_number" id="new_contact_number" placeholder="Enter New Contact Number"><br><br>

        <label for="new_email">New Email:</label>
        <input type="email" name="new_email" id="new_email" placeholder="Enter New Email"><br><br><br>

        <input type="submit" value="Update Data">
    </form>
</center>
</body>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "user";


$conn = new mysqli($servername, $username, $password, $database);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name_to_update = $_POST["user_name"];
    $new_first_name = $_POST["new_first_name"];
    $new_last_name = $_POST["new_last_name"];
    $new_password = $_POST["new_password"];
    $new_contact_number = $_POST["new_contact_number"];
    $new_email = $_POST["new_email"];

    
    $sql = "UPDATE user_data SET 
            first_name = '$new_first_name', 
            last_name = '$new_last_name', 
            password = '$new_password', 
            contact_number = '$new_contact_number',
            email = '$new_email'
            WHERE user_name = '$user_name_to_update'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>
