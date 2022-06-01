<?php
session_start();

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

$result = $conn->query("SELECT * FROM `log-in`") or die($conn->error);
while($row = $result->fetch_assoc()){
    $email = $row["email"];
    $pass = $row["password"];
}

$login_email = $login_pass = "";
$error = "username/password incorrect";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login_email = $_POST['email'];
    $login_pass = $_POST['password'];

    if (($login_email == $email) && ($login_pass == $pass)){
        header("Location: ../Admin/admin.php");
        }
        else {
            $_SESSION["error"] = $error;
            die(header("location:login.php?loginFailed=true&reason=password"));
        }

}

$conn->close();
?>