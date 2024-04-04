<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection configuration
    include 'config1.php';

    // Get the submitted form data
    $currentPassword = $_POST['current-password'];
    $newPassword = $_POST['new-password'];
    $confirmPassword = $_POST['confirm-password'];

    // You should perform additional validation here (e.g., checking if the new password meets your requirements)

    // Check if the current password is correct (you may need to query your database to do this)
    // Replace 'your_table' and 'your_password_column' with your actual table and column names
    $sql = "SELECT * FROM user_data WHERE password = '$currentPassword'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        // The current password is correct, proceed to update the password
        // Replace 'your_password_column' and 'your_table' with your actual table and column names
        $updateSql = "UPDATE user_data SET password = '$newPassword' WHERE password = '$currentPassword'";
        if (mysqli_query($conn, $updateSql)) {
            echo "Password changed successfully!";
            header('location:user_account.php');
        } else {
            echo "Error changing password: " . mysqli_error($conn);
        }
    } else {
        echo "Current password is incorrect.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
