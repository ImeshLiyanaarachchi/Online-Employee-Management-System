<?php
include_once 'config.php';

if (isset($_POST['jobtitle']) && isset($_POST['companyname']) && isset($_POST['jobdescription']) && isset($_POST['jobrequirements'])  && isset($_POST['salary'])  && isset($_POST['location']) ) {
    $id = $_GET['updateid'];
    $jobtitle = $_POST['jobtitle'];
    $companyname = $_POST['companyname'];
    $jobdescription = $_POST['jobdescription'];
    $jobrequirements = $_POST['jobrequirements'];
    $salary = $_POST['salary'];
    $location = $_POST['location'];

    $sql = "UPDATE `jobpost` SET jobtitle='$jobtitle', companyname='$companyname', jobdescription='$jobdescription', jobrequirements='$jobrequirements' ,salary='$salary',location='$location' WHERE jobID=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Updated successfully";
        header("Location: myJobPosts.php");
    } else {
        echo "Error in update: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
    <link rel="stylesheet" type="text/css" href="styles\styles.css">
    <script src="js\imeshscript.js"></script>

</head>
<body background="images/imesh.jpg">
<form action="updatenew.php?updateid=<?php echo $_GET['updateid']; ?>" method="post" class="Formclass">
    <h1>Update Job Post</h1>

    Job Title:
    <input type="text" name="jobtitle" value="<?php echo isset($jobtitle) ? $jobtitle : ''; ?>" placeholder="Ex-Software Engineer" required><br><br>

    Company Name:
    <input type="text" name="companyname" value="<?php echo isset($companyname) ? $companyname : ''; ?>" placeholder="abc Company" required><br><br>

    Job Description:
    <textarea name="jobdescription" rows="8" cols="50" required><?php echo isset($jobdescription) ? $jobdescription : ''; ?></textarea><br><br>

    Job Requirements:
    <textarea name="jobrequirements" rows="5" cols="50" required><?php echo isset($jobrequirements) ? $jobrequirements : ''; ?></textarea><br><br>

    Salary:
    <input type="text" name="salary" value="<?php echo isset($salary) ? $salary : ''; ?>" placeholder="Rs.50000"><br><br>

    Location:
    <input type="text" name="location" value="<?php echo isset($location) ? $location : ''; ?>" placeholder="Location"><br><br>

    <center>
        <!-- Submit button to update the job post. -->
        <input type="submit" value="Update">
    </center>
</form>
</form>
</body>
</html>





