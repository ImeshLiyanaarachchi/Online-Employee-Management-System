<?php
if (isset($_FILES["profile-picture"])) {
    $targetDir = "uploads/"; // Create a directory for uploaded files
    $targetFile = $targetDir . basename($_FILES["profile-picture"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the file is an actual image
    $check = getimagesize($_FILES["profile-picture"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size (you can adjust the max size)
    if ($_FILES["profile-picture"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats (adjust as needed)
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["profile-picture"]["tmp_name"], $targetFile)) {
            echo "The file " . basename($_FILES["profile-picture"]["name"]) . " has been uploaded.";
            // You can save the file path to a database here if needed.
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
