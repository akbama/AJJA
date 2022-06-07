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

$result1 = $conn->query("SELECT * FROM `announcement`") or die($conn->error);

$announceid = 1;
while($row = $result1->fetch_assoc()) {
    $announceid +=1;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $newsubject = $_POST['asubject'];
    $newcontent = $_POST['acontent'];
    $newdate = $_POST['adate'];
    $newtime = $_POST['atime'];

    $conn->query("INSERT INTO `announcement`(`announce_id`, `subject`, `content`, `date`, `time`) VALUES($announceid, '$newsubject', '$newcontent','$newdate', '$newtime')") 
    or die($conn->error);

    header("Location: admin.php");   
}


$conn->close();
?>