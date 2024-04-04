
<?php
include("connection.php");

// define variables and set to empty values
$BlankErr= "";
$fname= $lname=$mname=$dob=$contact=$email =$password=$confpassword=$cvid=$uid="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $BlankErr = "First name is required";
  } else {
    $fname = $_POST["fname"];
  }
  if (empty($_POST["lname"])) {
    $BlankErr = "Last name is required";
  } else {
    $lname = $_POST["lname"];
  }
  if (empty($_POST["dob"])) {
    $BlankErr = "Date of birth is required";
  } else {
    $dob = $_POST["dob"];
  }
  if (empty($_POST["gender"])) {
    $BlankErr = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }
  
  if (empty($_POST["contact"])) {
    $contactErr = "contact number  is required";
  } else {
    $contact = $_POST["contact"];
  }
   if (empty($_POST["email"])) {
    $BlankErr = "Email adreess is required";
  } else {
    $email = $_POST["email"];
  }
   if (empty($_POST["password"])) {
    $BlankErr = "Password  is required";
  } else {
    $password = $_POST["password"];
  }
  if (empty($_POST["confpassword"])) {
    $BlankErr = "Password confermation is required";
  } else {
    $confpassword = $_POST["confpassword"];
  }
  
  $gender=$_POST["gender"];
  $dob= $_POST["dob"];

    
}




//echo $fname,$lname,$dob,$gender,$dob,$contact,$email,$password,$confpassword;

$stmt = $conn->prepare("INSERT INTO users (user_name, password, user_type_id) VALUES (?, ?,?)");
$stmt->bind_param("ssi", $uname, $pwd , $utid);

// set parameters and execute
$uname= $email;
$pwd=$password;
$utid=2;


//$stmt->execute();

if ($stmt->execute() === TRUE) {
  $last_id = $conn->insert_id;
  //echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt = $conn->prepare("INSERT INTO Job_seeker (First_name , Middle_name , Last_name , DOB , gender  ,Phone_number , Email  ,cvID ,User_id ) VALUES (?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssissii", $fname, $mname , $lname , $dob, $gender , $contact, $email ,$cvid , $uid );

$uid=$last_id;
$cvid=$uid;
$stmt->execute();

header("Location: Candidate_Login.php");


//$query="select user_Id from Users where user_name='".$email."'";

$conn->close();



//echo $fname,$lname,$dob,$gender,$dob,$contact,$email,$password,$confpassword,$BlankErr;


?>