<?php
include 'config.php';

$Full_Name = $_POST['full_name'];
$Email = $_POST['Email'];
$Subject = $_POST['subject'];
$Message = $_POST['message'];

$sql = "INSERT INTO contact_us (`Full Name`, `Email`, `Subject`, `Message`) VALUES (?, ?, ?, ?)";
$statement = $conn->prepare($sql);

$statement->bind_param("ssss", $Full_Name, $Email, $Subject, $Message);

if ($statement->execute()) {
    echo 'Form Submitted Successfully,Our team will contact you soon';
} else {
    echo 'Insert Data Error';
}
?>
