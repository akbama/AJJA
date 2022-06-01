<?php
    session_start();
?>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="logindesign.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Oswald:wght@300&family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>
<body>
    <div class="bar"></div>
    <div class = "topbox">
        <div class = "navbar">
            <a href = "#" class = "nav"> Home </a>
            <a href = "#" class = "nav active"> Log In </a>
            <a href = "../Rooms/roomdetails.php" class = "nav"> Rooms </a>
            <a href="#aboutus" class = "nav">About Us</a>
        </div>
    </div>
    <div class="logindiv card">
        <form class = "loginform" method = "POST" action = "connectlogin.php">
            <h5 class = "loginh">Welcome!</h5>
            <br>
            <h6 class = "label">Email</h6>
            <input type = "email" class="form-control" name = "email" placeholder = "Enter your email" required>
            <br>
            <h6 class = "label">Password</h6>
            <input type = "password" class="form-control" name = "password" placeholder="Enter your password" required>
            <a class = "forgot" href = "#">Forgot Password?</a>
            <br><br>
            <input class="btn btn-primary loginbtn" type="submit" value="LOGIN"><br>
            <?php
                    if(isset($_SESSION["error"])){
                        echo '<script>alert("Incorrect email/password")</script>';
                    }
                ?>
        </form>

        <div class="info">
            <img src="logo.png" class="logopic">
        </div>
    </div>
</body>
</html>
<?php
    unset($_SESSION["error"]);
?>