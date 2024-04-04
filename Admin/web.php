<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "user";


$conn = new mysqli($servername, $username, $password, $database);


$mroot = "SELECT * FROM user_data";


$result = $conn->query($mroot);

?>

<!DOCTYPE html>
<html>
<head>
    <title>View User Data</title>
</head>
<body>
<center>
  <br>
  <br>
  <br> 
    <h2>User Data</h2>
    
  

        <?php
        {
          echo "<table>";
 echo "<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>User Name</th><th>Password</th><th>Contact Number</th></tr>";

 while ($row = $result->fetch_assoc()) {
    echo "<tr> <td>" . $row["first_name"] . "</td>";
    echo "<td>" . $row["last_name"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["user_name"] . "</td>";
    echo "<td>" . $row["password"] . "</td>";
    echo "<td>" . $row["contact_number"] . "</td></tr>" ;

 }

    echo "</table>";
        }
        ?>
</center>
</body>
</html>       
