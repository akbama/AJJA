<!doctype html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Oswald:wght@300&family=Poppins:wght@200;400&display=swap" rel="stylesheet">
  <title>AJJA Apartelle</title>
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
            <a href="#fifthbox">Announcements</a>
            <a href="aboutus.php">About Us</a>
            </div>
            <!-- Right-aligned links -->
            <div class="topnav-right">
            <a href="../Log in/login.php">Log In</a>
            <a href="../Rooms/roomdetails.php">Room Rates</a>
            </div>
          </div>
    </nav>

    <div class="firstblock">
        <div class="f1con">
        </div>
        <h2>Modern Amenities.</h2>
        <h2>Urban Location.</h2>
        <h2>Sophisticated Style.</h2>
        <p>This is the place to experience that perfect city life.</p>
        <form action="aboutus.php">
            <input type="submit" value="Learn More" class="btnmore"/>
        </form>

    </div>
    
    <div class="secblock">
    <img src= "ajjalogo.png" alt="AJJA Logo" class="img2">
    <P>Love where you live.</P>
    </div>

    <div class="thirdblock">
    <h2>Your convenience is prioritized.</h2>
    <p>Located in the heart of the city of </p>
    <P>Davao, different establishments </p>
    <P>are at arm's reach to cater your </p>
    <p>every need.</p>
    <img src= "img3.png" alt="AJJA Logo" class="img3" width="600" height="600">
    </div>
    </div>

    <div class="fourthblock">
        <div class="f4con"></div>
        <h2>Upscale but not uptight.</h2>
        <p>Experience premium living without</p>
        <p>emptying your life savings. It is </p>
        <p>time to invest in yourself by</p>
        <p>investing in your home.</p>
        <form action="../Rooms/roomdetails.php">
            <input type="submit" value="Room Rates" class="btnrooms"/>
        </form>
        </div>
    </div>
    
     <br>
    <div id="fifthbox" class="fifthblock">
    <br>
    <h2>Announcements</h2>
        <?php include ('../Admin/connectadmin.php'); ?>
                <table class = "table">
                    <tr>
                        <th>Subject</th>
                        <th>Content</th>
                        <th>Date </th>
                        <th>Time </th>
                    </tr>
                <?php 
                    while($row = $result1->fetch_assoc()) { ?>
                        <td><?php echo $row['subject']; ?> </td>
                        <td><?php echo $row['content']; ?> </td>
                        <td><?php echo $row['date']; ?> </td>
                        <td><?php echo $row['time']; ?> </td></tr>
                    <?php } ?>
                </table>
    </div>

    <footer>
        <div>
            <div class="footerlogo"></div>
            <h2>AJJA</h2>
            <h3>APARTELLE</h3>
            <p>2021 © AJJA Apartelle</p>
            <p>All rights reserved.</p>
            <div class="links">
                <a href="homepage.php">Home</a>
                <a href="roomrates.php">Pricing</a>
                <a href="aboutus.php">About Us</a>
                <a href="#facebook">Facebook</a>
                <a href="#instagram">Instagram</a>
                <a href="#twitter">Twitter</a>
                <a href="#pp">Privacy Policy</a>
                <a href="#tos">Terms of Service</a>   
            </div>
        </div>
    </footer>
    </div>    
    </div>
</body>
</html>