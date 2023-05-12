<?php
include 'config.php';
if (isset($_POST['logout'])) {
    // End the session and redirect the user to the login page
    session_destroy();
    header("Location: index.html");
    exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="uabout.css">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <a href="uindex.php"><img src="Images\logo.png" alt="PlayVerse"></a>
        
        <nav class="navbar">
            <ul>
                <li><a href="uindex.php">Home</a></li>
                <li><a class="head active" href="#">About</a></li>
                <li><a href="umoregames.php">More Games</a></li>
                <li><a href="uindex.php">Contact Us</a></li>
            </ul>
        </nav>
        <button class="btn2" onclick="window.location.href = 'index.html';">Log Out</button>
        <nav class="navbar1">
            <img class="userimg" src="images/usericon.png"/>
            <p>
                <span class= "usertxt">
                    <?php
                        if(isset($_SESSION['username'])) {
                            $query = "SELECT UserFirstName FROM tblusers WHERE UserEmail='{$_SESSION['username']}'";
                            $result = mysqli_query($conn, $query);
                            $row = mysqli_fetch_assoc($result);
                            $name = $row['UserFirstName'];}
                            echo "Welcome, $name";
                    ?>
                </span>
            </p>
        </nav>
        <!--<button class="btn3" onclick="window.location.href = 'index.html';" name="logout">Log Out</button>-->

        <div class="border"> </div>
    </div>

    <div class="aboutpage">
        <h2>About Us</h2>
        <div class="about-container">
            <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome to PlayVerse!
                At PlayVerse, we are passionate about bringing the exhilarating world of online gaming right to your fingertips. Our platform is designed to provide an immersive and thrilling gaming experience for players of all skill levels. Whether you're a seasoned gamer or just starting your gaming journey, we have something for everyone.<br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Here at PLayVerse, we believe that gaming is more than just a hobby; it's a vibrant community where players can connect, compete, and have fun together. One of our primary goals is to create an inclusive gaming environment. We welcome gamers from all walks of life, regardless of their age, gender, or background. We strive to foster a friendly and supportive community where players can share their passion, exchange ideas, and forge lasting friendships. Join us and be a part of this amazing community.<br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;At PlayVerse, your privacy and security are of utmost importance to us. We have implemented robust measures to safeguard your personal information and ensure a safe gaming environment. You can enjoy your gaming sessions with peace of mind, knowing that we prioritize the protection of your data.<br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We are constantly expanding our game library and updating our platform to provide you with the best possible gaming experience. Our team is dedicated to delivering high-quality content, exciting new releases, and innovative features to keep you engaged and entertained.<br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Join us at PLayVerse and embark on an unforgettable gaming journey. Whether you're seeking thrilling adventures, intense competitions, or a place to connect with like-minded gamers, we've got you covered. Get ready to level up your gaming experience with us!
            </h3>
            <img src="images/newabout3.jpg" alt="about">
        </div>
    </div>

<!-- footer section starts  -->

<div class="footer">

    <div class="box-container">
    
        <div class="box box1">
            <h3>Contact info</h3>
            <p> <i class="fas fa-map-marker-alt"></i><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3748.5463849636367!2d73.74202157492678!3d20.027544321412964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeb21173ecd57%3A0x50c7155157f1939b!2sAshoka%20Center%20For%20Business%20And%20Computer%20Studies!5e0!3m2!1sen!2sin!4v1683661465050!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"> Nashik, India 422009 </a></p>
            <p> <i class="fas fa-envelope"></i><a href="mailto:patilsarthak00030@gmail.com"> example@gmail.com </a></p>
            <p> <i class="fas fa-phone"></i><a href="tel:+123-456-7890"> +123-456-7890 </a></p>
            <p> <i class="fas fa-phone"></i><a href="tel:+111-222-3333"> +111-222-3333 </a></p>
        </div>
    
        <div class="box2">
            <h3>Quick links </h3>
            <a href="uindex.html">Home</a>
            <a href="#">About</a>
            <a href="umoregames.php">More Games</a>
            <a href="uindex.php">Contact us</a>
            <a href="../admin/">Admin</a>
        </div>
    
        <div class="box2">
            <h3>Follow us</h3>
            <a href="https://www.instagram.com/sarthak._.patil30">Instagram</a>
            <a href="https://www.facebook.com/tithi.jain.31/">Facebook</a>
            <a href="https://www.github.com/sarthak0030/">GitHub/sarthak</a>
            <a href="https://www.github.com/tithijn02/">GitHub/tithi</a>
        </div>
    
    </div>
    
    <h1 class="credit">© 2023 Sarthak & Tithi. All Rights Reserved | <a href="uindex.html">PlayVerse</a> </h1>
    <div align="center">
            <img src="https://camo.githubusercontent.com/b867e04377eea646939445ce4e0565253428256abc39c6d32d7b67aab3160d18/68747470733a2f2f63617073756c652d72656e6465722e76657263656c2e6170702f6170693f747970653d776176696e6726636f6c6f723d6772616469656e74266865696768743d3130302673656374696f6e3d666f6f746572" alt="" data-canonical-src="https://capsule-render.vercel.app/api?type=waving&amp;color=gradient&amp;height=100&amp;section=footer" style="width: 100%; background-color: #131313; "></div>

    </div>
</body>
</html>