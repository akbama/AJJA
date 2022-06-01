<html>
<head>
    <title>Rooms</title>
    <link rel="stylesheet" href="rooms.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Oswald:wght@300&family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>
<body>
    <div class="bar"></div>
      <div class = "topbox">
        <img src = "logo.png" id = "logo">
        <div class = "navbar">
            <a href = "#" class = "nav"> Home </a>
            <a href = "../Log In/login.html" class = "nav"> Log In </a>
            <a href = "#" class = "nav active"> Rooms </a>
            <a href="#aboutus" class = "nav">About Us</a>
        </div>
    </div>
    
    <div class = "mainbox">
        <img src = "icon1.png" id = "icon">
        <h2>ROOMS</h2> <br>
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