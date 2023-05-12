<?php
session_start();
include 'config.php';
$email = $_POST['email'];
$password = $_POST['password'];


if (!$conn) {
	die('Connection failed: ' . mysqli_connect_error());
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM tblusers WHERE UserEmail='$email' AND UsersPassword='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	echo "Login successful!<br>";
$_SESSION['username']=$email;
    header('Location: uindex.php'); 
	
		
} else {
	echo "Invalid username or password.";
	header('Location: login.php'); 
	
}
mysqli_close($conn);
exit;
?>