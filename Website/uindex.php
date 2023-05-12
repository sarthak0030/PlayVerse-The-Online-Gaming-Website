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
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayVerse: The Online Gameing Website</title>
    <link rel="stylesheet" href="ustyle.css">
    
</head>
<body>
    <header class="header">
        <a href="#"><img src="Images\logo.png" alt="PlayVerse"></a>
        
        <nav class="navbar">
            <ul>
                <li><a class="head active" href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#moregames">More Games</a></li>
                <li><a href="#contact">Contact Us</a></li>
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
                        echo"Welcome, $name";
                    ?>
                </span>
            </p>
        </nav>
        <!--<button class="btn3" onclick="window.location.href = 'index.html';" name="logout">Log Out</button>-->

        <div class="border"> </div>
    </header>
    
    <div id="home" class="container">
        <h2 class="object" data-value="3">Show<br><span>your</span><br>Skills</h2>
        <h3 class="object" data-value="3">Play Games Online<br>Anywhere Anytime....!</h3>
        <button onclick="window.location.href = 'umoregames.php';">Play Now</button>
        <div class="object1">
            <img src="images/1.png" class="object" data-value="-2" alt="" width="180">
        </div>
        <div class="object2">
            <img src="images/2.png" class="object" data-value="6" alt="" width="460">
        </div>
        <div class="object3">
            <img src="images/3.png" class="object" data-value="4" alt="" width="270">
        </div>
        <div class="object4">
            <img src="images/4.png" class="object" data-value="-6" alt="" width="170">
        </div>
        <!--<div class="object5">
            <img src="images/5.png" class="object" data-value="8" alt="">
        </div>
        <div class="object6">
            <img src="images/6.png" class="object" data-value="-4" alt="">
        </div>
        <div class="object7">
            <img src="images/7.png" class="object" data-value="5" alt="">
        </div>
        <div class="object8">
            <img src="images/8.png" class="object" data-value="-9" alt="">
        </div>-->
        <div class="object9">
            <img src="images/9.png" class="object" data-value="-2" alt="" width="1200">
        </div>
        <div class="object10">
            <img src="images/10.png" class="object" data-value="6" alt="" width="1300">
        </div>
        <div class="object11">
            <img src="images/11.png" class="object" data-value="-2" alt="" width="780">
        </div>
    </div>

    <div id="about" class="abt-container">
        <h2 class="abt1">About Us</h2><br>
        <h3 class="abt2">Hello! We are<br><span>Game</span> Designers & Developers</h3>
        <h4 class="abt3">Welcome to PlayVerse! We are passionate about providing an exciting and engaging gaming expierence for players of all ages and skill levels. Our platform offers a wide variety of games, from classic favorites to the latest releases.<br><br> At our core, we believe that gaming should be a fun social exprience that brings people together. Our communityy of gamers is diverse and inckuse, and we strive to foster an environment that encourages camaraderie, sportsmanship, and fair play.</h4>
        <a href="about.html">Learn More</a>
        <img src="images/about1.png" class="object12" alt="about image">
    </div>

    <div id="moregames" class="mor-container">
        <div>
            <h2>More Games</h2>
        </div>
        <div class="card-container">
            <div class="card">
                <img src="images/memoria.png" alt="memoria game">
                <div>
                    <h1>Memoria: The Memory Game</h1>
                    <p>Test your memory with this memory game. In Memoria, you'll put your memory and concentration skills to test. Memoria offers a fun and stimulating expierenceas you train your memory, and strategic thinking abilities.</p>
                </div>
                <button class="mor1" onclick="window.location.href = '../Games/memory game/index.html';">Play Now</button>
            </div>

            <div class="card1">
                <img src="images/ttt.png" alt="memoria game">
                <div>
                    <h1>Tic Tac Toe</h1>
                    <p>Playing Tic Tac Toe on a computer against another player is an interactive and strategic game. It involves looking ahead and trying to figure out what the person playing against you might do next.</p>
                </div>
                <button class="mor1" onclick="window.location.href = '../Games/tic tac toe/index.html';">Play Now</button>
            </div>

            <div class="card2">
                <img src="images/hangman.png" alt="memoria game">
                <div>
                    <h1>Hangman: The Word Game</h1>
                    <p>Playing Hangman on a computer is a fun and challenging word-guessing game. It is great game for improving your vocabulary and spelling.</p>
                </div>
                <button class="mor1" onclick="window.location.href = '../Games/hangman/index.html';">PLay Now</button>
            </div>
        </div>
        <div class="mor2">
            <button class="mor2" onclick="window.location.href = 'umoregames.php';">Load Games</button>
        </div>
    </div>
    
    <div id="contact" class="contactus">
        <h2 class="con1">Contact Us</h2><br>
        <h3 class="con2"><span>Gett</span>ing in touch is easy!</h3>
        <iframe class="mymap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3748.5463849636367!2d73.74202157492678!3d20.027544321412964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeb21173ecd57%3A0x50c7155157f1939b!2sAshoka%20Center%20For%20Business%20And%20Computer%20Studies!5e0!3m2!1sen!2sin!4v1683661465050!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br>
        <p class="link1"><a href="https://goo.gl/maps/K4UP73tAjneLdFZf6">Find us here!</a></p>
        <p class="link2"><a href="mailto:patilsarthak00030@gmail.com"> playverse@gmail.com</a></p>
        <div class="form">
            <form action="contactus.php" method="post">
                <input class="EnquiryName" type="text" name="name" placeholder="Enter Name" required><br>
                <input class="EnquiryEmail" type="text" name="email" placeholder="Enter Email" required><br>
                <textarea class="EnquiryMessage" name="message" id="" cols="30" rows="10" placeholder="Write a message..."></textarea>
                <input class="submit" type="submit" name="submit" value="Submit">
            </form>
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
        <a href="#">Home</a>
        <a href="#about">About</a>
        <a href="#moregames">More Games</a>
        <a href="#contact">Contact us</a>
        <a href="../admin/">Admin</a>
    </div>

    <div class="box2">
        <h3>Follow us</h3>
        <a href="https://www.instagram.com/sarthak._.patil30/">Instagram</a>
        <a href="https://www.facebook.com/tithi.jain.31/">Facebook</a>
        <a href="https://www.github.com/sarthak0030/">GitHub/sarthak</a>
        <a href="https://www.github.com/tithijn02/">GitHub/tithi</a>
    </div>

</div>

<h1 class="credit">© 2023 Sarthak & Tithi. All Rights Reserved | <a href="#">PlayVerse</a> </h1>
<div align="center">
            <img src="https://camo.githubusercontent.com/b867e04377eea646939445ce4e0565253428256abc39c6d32d7b67aab3160d18/68747470733a2f2f63617073756c652d72656e6465722e76657263656c2e6170702f6170693f747970653d776176696e6726636f6c6f723d6772616469656e74266865696768743d3130302673656374696f6e3d666f6f746572" alt="" data-canonical-src="https://capsule-render.vercel.app/api?type=waving&amp;color=gradient&amp;height=100&amp;section=footer" style="width: 100%; background-color: #131313; "></div>

</div>


    <script type="text/javascript">
        document.addEventListener("mousemove", parallax);
        function parallax(e){
            document.querySelectorAll(".object").forEach(function(move){
                var moving_value = move.getAttribute("data-value");
                var x = (e.clientX * moving_value) / 250;
                var y = (e.clientY * moving_value) / 250;
                move.style.transform = "translateX(" + x + "px) translateY(" + y + "px)";
            });
        }
    </script>

</body>
</html>