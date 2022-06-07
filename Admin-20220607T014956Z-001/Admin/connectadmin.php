<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "cmsc127-AJJA-Database";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$roomid = 0;
$result = $conn->query("SELECT * FROM `rental listing`") or die($conn->error);

$conn->close();
?>