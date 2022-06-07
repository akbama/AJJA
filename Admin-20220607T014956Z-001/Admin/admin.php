<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="admindesign.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php require_once 'admineditroom.php';?>
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
                        echo "<td> <button id = 'edit' class='btn btn-info editbtn' data-toggle='modal' data-target = '#editmodal'> Edit </button>";
                        echo "<button id = 'del' class='btn btn-danger'> Delete </button></tr>";
                    }
                ?>
                </table>
    </div>
    <div class="modal fade" id="addroom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Add Room </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="adminaddroom.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="update_id" id="update_id">
                        <div class="form-group">
                            <label> Room Name </label>
                            <input type = "text" name = "rname" maxlength = "10" id = "rname" class = "form-control" placeholder = "Enter Room Name" required>
                        </div>
                        <div class="form-group">
                            <label> Room Description </label>
                            <input type = "text" name = "rdescription" maxlength = "50" id = "rdescription" class = "form-control" placeholder = "Enter Room Description" required>
                        </div>
                        <div class="form-group">
                            <label> Room Rate </label>
                            <input type = "number" step="0.01" name = "rrate" id = "rrate" class="form-control" placeholder = "Enter Room Rate" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Add Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class = "addContainer" action = 'adminaddroom.php'>
        <div id = "add">
            <button id = 'add' class='btn btn-success editbtn' data-toggle='modal' data-target = '#addroom'><i style = "font-size: 30px;" class = "fa fa-plus"></i></button>
        </div>
    </div>

    <!-- ##################################################################################### -->

<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit Room Details </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="admineditroom.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="update_id" id="update_id">
                        <div class="form-group">
                            <label> Room Name </label>
                            <input type = "text" 
                            value = "<?php echo $room_name; ?>" name = "rname" maxlength = "10" id = "rname" class = "form-control">
                        </div>

                        <div class="form-group">
                            <label> Room Description </label>
                            <input type="text" name="lname" id="lname" class="form-control"
                                placeholder="Enter Last Name">
                        </div>

                        <div class="form-group">
                            <label> Room Rate </label>
                            <input type="number" name="course" id="course" class="form-control"
                                placeholder="Enter Course">
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <?php if ($update == true): ?>
                        <button type="submit" name="updatedata" class="btn btn-primary" name = 'update' >Update Data</button>
                        <?php endif;?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>