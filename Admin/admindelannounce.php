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
    $announce_id = $_GET['deleteid'];
    $conn->query("DELETE FROM `announcement` WHERE `announce_id`= $announce_id") or die($conn->error);

}


$conn->close();
?>