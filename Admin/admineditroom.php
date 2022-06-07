<?php 

include 'connectadmin.php';

$room_name = "";
$description = "";
$room_rate = "";

    if (isset($_POST['updatedata'])) {

        $room_id = $_POST['room_id'];
        $room_name = $_POST['room_name'];
        $description = $_POST['description '];
        $room_rate = $_POST['room_rate'];

        $sql = "UPDATE `rental listing` SET `room_name`='$room_name',`description`='$description',`room_rate`='$room_rate' WHERE `room_id`='$room_id'"; 

        $result = $conn->query("SELECT * FROM `rental listing`") or die($conn->error); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['edit'])) {

    $room_id = $_GET['edit']; 

    $sql = "SELECT * FROM `rental listing` WHERE `room_id`='$room_id'";

    $result = $conn->query("SELECT * FROM `rental listing`"); 

    if (count($result) == 1) {        
        $n = mysqli_fetch_array($result);

            $room_id = $n['$room_id'];
            $room_name = $n['room_name'];
            $description = $n['description'];
            $room_rate = $n['room_rate'];
            

       

    }
}

?>