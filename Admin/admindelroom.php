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


if (isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $conn->query("DELETE FROM `rental listing` WHERE `room_id`= $id") or die($conn->error);

    header("Location: admin.php");   
}


$conn->close();
?>
