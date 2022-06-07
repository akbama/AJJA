<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="rooms.css">
    <meta charset="utf-8" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Oswald:wght@300&family=Poppins:wght@200;400&display=swap" rel="stylesheet">
  <title>Rooms</title>
</head>

<body>
    <div class="bar"></div>
    <div class="wrapper">
    <nav>
        <div class="topnav">

            <!-- Centered link -->
            <div class="topnav-centered">
                <img src= "ajjalogo1.png" alt="AJJA Logo" class="logopic">
            </div>
          
            <!-- Left-aligned links (default) -->
            <div class="topnav-left">
            <a href="../HomePage/index.php">Announcements</a>
            <a href="../HomePage/aboutus.php">About Us</a>
            </div>
            <!-- Right-aligned links -->
            <div class="topnav-right">
              <a href="../Log In/login.php">Log In</a>
              <a href="#" class = "nav active">Room Rates</a>
            </div>
          </div>
    </nav>
    <br><br><br><br>
    <div class = "mainbox">
        <img src = "icon1.png" id = "icon"> 
        <h2>ROOMS</h2> <br><br><br><br>
        <div class = "secondbox">
            <div class = "results">
            <?php include ('connect.php'); ?>
                <?php 
                    while($row = $result->fetch_assoc()) {
                        $room_name = $row["room_name"];
                        $description = $row["description"];
                        $room_rate = $row["room_rate"];
                        echo "<div class = 'box'><div class = 'within'><table>";
                        echo "<tr><th> Room Name </th>";
                        echo "<td>". $room_name ."</td></tr>";
                        echo "<tr><th> Description </th>";
                        echo "<td>". $description ."</td></tr>";
                        echo "<tr><th> Room Rate</th>";
                        echo "<td>". $room_rate. "</td></tr>";
                        echo "</table></div></div>";
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>