<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="admindesign.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
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
        <?php include ('connectadmin.php'); ?>
                <table class = "table">
                    <tr>
                        <th>Room ID</th>
                        <th>Room Name</th>
                        <th>Description</th>
                        <th>Room Rate </th>
                        <th>Action </th>
                    </tr>
                <?php while($row = $result->fetch_assoc()) { ?>
                    <tbody>
                        <tr>
                        <td><?php echo $row['room_id']; ?> </td>
                        <td><?php echo $row['room_name']; ?> </td>
                        <td><?php echo $row['description']; ?> </td>
                        <td><?php echo $row['room_rate']; ?> </td>
                        <td>
                            <button id = 'edit' class='btn btn-info editbtn' data-toggle='modal' data-target='#editmodal'> Edit </button>
                        </td>
                        <td>
                            <a href ="admindelroom.php?deleteid=<?php echo $row['room_id']; ?>" class="btn btn-danger"> Delete </a></button>
                        </td>
                        </tr>
                        </tbody>
               <?php } ?>
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
    <div class = "addContainer">
        <button id = 'add' class='btn btn-success editbtn' data-toggle='modal' data-target = '#addroom'><i style = "font-size: 30px;" class = "fa fa-plus"></i></button>
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

                        <input type="hidden" name="room_id" id="room_id">

                        <div class="form-group">
                            <label> Room Name </label>
                            <input type="text" name="room_name" id="room_name" class="form-control"
                                placeholder="Enter room name">
                        </div>

                        <div class="form-group">
                            <label> Room Description </label>
                            <input type="text" name="description" id="description" class="form-control"
                                placeholder="Enter room description">
                        </div>

                        <div class="form-group">
                            <label> Room Rate </label>
                            <input type="text" name="room_rate" id="room_rate" class="form-control"
                                placeholder="Enter room rate">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <h2>Announcements</h2> <br>
    <div class = "announcebox">
        <?php include ('connectadmin.php'); ?>
                <table class = "table">
                    <tr>
                        <th>Announcement ID</th>
                        <th>Subject</th>
                        <th>Content</th>
                        <th>Date </th>
                        <th>Time </th>
                        <th>Action</th>
                    </tr>
                <?php 
                    while($row = $result1->fetch_assoc()) { ?>
                        <td><?php echo $row['announce_id']; ?> </td>
                        <td><?php echo $row['subject']; ?> </td>
                        <td><?php echo $row['content']; ?> </td>
                        <td><?php echo $row['date']; ?> </td>
                        <td><?php echo $row['time']; ?> </td>
                        <td><a href = "admindelannounce.php?deleteid=<?php echo $row['announce_id']; ?>" class="btn btn-danger"> Delete </a></button></tr>
                    <?php } ?>
                </table>
    </div>
    <div id = "addDetails2">
        <i id = "exit" class="fa fa-close" onclick = "closeAdd2()"> </i>
        <p style = "padding-top: 7px; font-size: 22px; font-weight: 500; text-align: center;"> Create Announcement </p>
        <form class = "addingAnnounce" method = "POST" action = "adminaddannounce.php">
            <p> Subject <input type = "text" name = "asubject" maxlength = "10" id = "asubject" required> </p>
            <p> Content <input type = "text" name = "acontent" maxlength = "100" id = "acontent" required> </p>
            <p> Date <input type="date" name = "adate" id = "adate" required> </p>
            <p> Time <input type="time" name = "atime" id = "atime" required> </p>
            <button type="submit" class="btn btn-success" name = "add">Add</button>
        </form>
    </div>
    <div class = "addAnnounce" action = 'adminaddannounce.php'>
    <div id = "add">
        <i id = "plus" class="fa fa-plus" onclick = "openAdd2()"></i>
        <i id = "changeicon" class="fa fa-caret-down" onclick = "closeAdd2()"></i>
    </div>
    </div>
    
</body>
</html>
