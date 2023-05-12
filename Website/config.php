<?php
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "tms"; /* Database name */

$conn = mysqli_connect($host, $user, $password,$dbname);
if (!$conn) {
	die('Connection failed: ' . mysqli_connect_error());
}

?>