<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "cmsc127-AJJA-Database";

date_default_timezone_set("Asia/Manila");

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result1 = $conn->query("SELECT * FROM `announcement`") or die($conn->error);

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $announceid = $_POST['aid'];
    $newsubject = $_POST['asubject'];
    $newcontent = $_POST['acontent'];
    $newdate = date("Y/m/d");
    $newtime = date("h:i:sa");

    $conn->query("INSERT INTO `announcement`(`announce_id`, `subject`, `content`, `date`, `time`) VALUES($announceid, '$newsubject', '$newcontent','$newdate', '$newtime')") 
    or die($conn->error);

    header("Location: admin.php");   
}


$conn->close();
?>