<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "cmsc127-AJJA-Database";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
$update = false;

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $conn->query("SELECT * FROM `rental listing` WHERE room_id = $id") or die($conn->error());
    if($result->num_rows){
        $row = $result->fetch_array();
        $rname = $row['room_name'];
        $rdescription = $row['description'];
        $rrate = $row['room_rate'];
    }
}

if (isset($_POST['update'])) {
	$roomid = $_GET['room_id'];
    $rname = $_POST['rname'];
    $rdescription = $_POST['rdescription'];
    $rrate = $_POST['rrate'];

	$conn->query("UPDATE info SET rname='$rname', rdescription='$rdescription', rrate='$rrrate' WHERE roomid =$room_id");
	$_SESSION['message'] = "Address updated!"; 
	header('location: admin.php');
}

?>