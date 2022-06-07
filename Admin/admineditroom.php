<?php 

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'cmsc127-AJJA-Database');

    if (isset($_POST['updatedata'])) {
        $room_id = $_POST['room_id'];
        $room_name = $_POST['room_name'];
        $description = $_POST['description'];
        $room_rate = $_POST['room_rate'];

        $query = "UPDATE `rental listing` SET `room_name`='$room_name', `description`='$description', `room_rate`='$room_rate' WHERE `room_id` ='$room_id'"; 
        $query_run = mysqli_query($connection, $query);
        
        if ($query == TRUE) {

            echo '<script> alert("Data Updated"); </script>';
            header("Location:admin.php");

        }else{

            echo '<script> alert("Data Not Updated"); </script>';
            header("Location:admin.php");
        }

    } 

?>