<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="admindesign.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="admin.js"></script>
</head>
<body>
    <div class="bar"></div>
    <div class = "topbox">
    <img src = "logo.png" id = "logo">
        <div class = "navbar">
            <a href = "#" class = "nav active"> Home</a>
        </div>
        <button class = "logout"><a href = "../Log In/login.php" class = "logouttext">Log out</a></button>
        
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
                        echo "<td> <button id = 'edit' class='btn btn-info editbtn' data-toggle='modal' data-target='#editmodal'> Edit </button>";
                        echo "<button id = 'del' class='btn btn-danger'> Delete </button></tr>";
                    }
                ?>
                </table>
    </div>
    <div id = "addDetails">
        <i id = "exit" class="fa fa-close" onclick = "closeAdd()"> </i>
        <p style = "padding-top: 7px; font-size: 22px; font-weight: 500; text-align: center;"> Adding Rooms </p>
        <form class = "addingRoom" method = "POST" action = "adminaddroom.php">
            <p> Room Name: <input type = "text" name = "rname" maxlength = "10" id = "rname" required> </p>
            <p> Room Description: <input type = "text" name = "rdescription" maxlength = "100" id = "rdescription" required> </p>
            <p> Room Rate: <input type="number" step="0.01" name = "rrate" id = "rrate" required> </p>
            <button type="submit" class="btn btn-success" name = "add">Add</button>
        </form>
    </div>
    <div class = "addContainer" action = 'adminaddroom.php'>
    <div id = "add">
        <i id = "plus" class="fa fa-plus" onclick = "openAdd()"></i>
        <i id = "changeicon" class="fa fa-caret-down" onclick = "closeAdd()"></i>
    </div>
    </div>

    <!-- ##################################################################################### -->

<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel"> Edit Room Details </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="admineditroom.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="room_id" value="<?php echo $room_id; ?>">

                        <div class="form-group">
                            <label> Room Name </label>
                            <input type="text" name="fname" id="room_name" class="form-control"
                                placeholder="Enter room name" value="<?php echo $room_name; ?>">
                        </div>

                        <div class="form-group">
                            <label> Room Description </label>
                            <input type="text" name="lname" id="room_description" class="form-control"
                                placeholder="Enter room description" value="<?php echo $description; ?>">
                        </div>

                        <div class="form-group">
                            <label> Room Rate </label>
                            <input type="number" name="course" id="room_rate" class="form-control"
                                placeholder="Enter room rate" value="<?php echo $room_rate; ?>">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>