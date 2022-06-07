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
$result = $conn->query("SELECT * FROM `rental listing`") or die($conn->error);

$roomid = 1;
while($row = $result->fetch_assoc()) {
    $roomid +=1;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $room_id = $_POST['rid'];
    $newroomname = $_POST['rname'];
    $newdescription = $_POST['rdescription'];
    $newroomrate= $_POST['rrate'];
    
    $conn->query("INSERT INTO `rental listing`(`room_id`, `room_name`, `description`, `room_rate`) VALUES($roomid, '$newroomname', '$newdescription',$newroomrate)") 
    or die($conn->error);

    header("Location: admin.php");   
}


$conn->close();

?>