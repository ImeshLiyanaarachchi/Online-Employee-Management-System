<!DOCTYPE html>
<html>
<head>
    <title>Delete Data</title>
</head>
<body>
    <center>
    <h2>Delete Data</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="email_to_delete">Email to Delete:</label>
        <input type="text" name="email_to_delete" id="email_to_delete" placeholder="Enter Email Address">
        <button type="submit" name="delete_record">Delete Record</button><br><br>
        
        <button type="submit" name="delete_all_records">Delete All Records</button>
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

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["delete_record"])) {
    $email_to_delete = $_POST["email_to_delete"];

    if (!empty($email_to_delete)) {
       
        $check_sql = "SELECT * FROM user_data WHERE email = '$email_to_delete'";
        $result = $conn->query($check_sql);

        if ($result->num_rows > 0) {
            
            $delete_sql = "DELETE FROM user_data WHERE email = '$email_to_delete'";

            if ($conn->query($delete_sql) === TRUE) {
                echo "Record deleted successfully.";
            } else {
                echo "Error deleting record: " . $conn->error;
            }
        } else {
            
            echo "Invalid email. Record not found in the database.";
        }
    }
}

if (isset($_POST["delete_all_records"])) {
   
    $delete_all_sql = "DELETE FROM user_data";

    if ($conn->query($delete_all_sql) === TRUE) {
        echo "All records deleted successfully.";
    } else {
        echo "Error deleting all records: " . $conn->error;
    }
}

$conn->close();
?>
