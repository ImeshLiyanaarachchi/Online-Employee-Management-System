<?php



$conn = mysqli_connect( 'localhost','root','','user' );

if (!$conn) {
	die(mysqli_error($conn));
}
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "user";

$conn = mysqli_connect( $sname,$uname,$password,$db_name );


if (!$conn) {
	echo "Connection Failed!";
	exit();
} 

?>