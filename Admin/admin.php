<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="admindesign.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Oswald:wght@300&family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="bar"></div>
    <div class = "topbox">
    <img src = "logo.png" id = "logo">
        <div class = "navbar">
            <a href = "#" class = "nav active"> Home</a>
        </div>
    </div>
    <h2>Rental Lists</h2> <br>
    <div class = "rentalbox">
     <br>
        <?php include ('connectadmin.php'); ?>
                <table class = "table">
                    <tr>
                        <th>Room ID</th>
                        <th>Room Name</th>
                        <th>Decription</th>
                        <th>Room Rate </th>
                        <th>Action </th>
                    </tr>
                <?php 
                    while($row = $result->fetch_assoc()) {
                        $room_id = $row["room_id"];
                        $room_name = $row["room_name"];
                        $description = $row["description"];
                        $room_rate = $row["room_rate"];
                        echo "<tr><td>". $room_id ."</td>";
                        echo "<td>". $room_name ."</td>";
                        echo "<td>". $description ."</td>";
                        echo "<td>". $room_rate. "</td>";
                        echo "<td> <button id = 'edit' class='btn btn-info'> Edit </button>";
                        echo "<button id = 'del' class='btn btn-danger'> Delete </button></tr>";
                    }
                ?>
                </table>
    </div>
    <div id = "add">
            <i id = "plus" class="fa fa-plus" onclick = "openMessage()"></i>
    </div>
</body>
</html>