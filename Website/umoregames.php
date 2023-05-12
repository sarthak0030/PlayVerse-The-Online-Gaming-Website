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
    <link rel="stylesheet" href="umoregamesstyle.css">
</head>
<body>
    <div class="header">
        <a href="uindex.php"><img src="Images\logo.png" alt="PlayVerse"></a>
        
        <nav class="navbar">
            <ul>
                <li><a href="uindex.php">Home</a></li>
                <li><a href="uabout.php">About</a></li>
                <li><a class="head active" href="#">More Games</a></li>
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
                        echo"Welcome, $name";
                    ?>
                </span>
            </p>
        </nav>
        <!--<button class="btn3" onclick="window.location.href = 'index.html';" name="logout">Log Out</button>-->

        <div class="border"> </div>
    </div>

    <div id="moregames" class="mor-container">
        <div>
            <h2>More Games</h2>
        </div>
        <div class="card-container">
            <div class="card">
                <img class="img1" src="images/memoria2.png" alt="memoria game">
                <img class="img2" src="images/memoria.png" alt="memoria game">
                <img class="img3" src="images/memoria1.png" alt="memoria game">
                <div>
                    <h1>Memoria: The Memory Game</h1>
                    <p>&nbsp;&nbsp;&nbsp;Test your memory with this memory game. In Memoria, you'll put your memory and concentration skills to the test. The game consists of a deck of cards, each containing a unique design or symbol. The cards are shuffled and placed face-down on the table. Your objective is to flip over pairs of cards and match them.
                        On each turn, you'll select two cards to flip over. If they match, they remain face-up, and you earn points. However, if they don't match, they are flipped back face-down, and you must remember their positions for future turns. The key is to memorize the patterns and locations of the cards as you flip them over.<br><br>
                        &nbsp;&nbsp;&nbsp;The game continues until all pairs have been successfully matched or until you exhaust a set number of moves. The challenge lies in completing the game with the fewest moves possible, aiming for a high score.<br><br>
                        &nbsp;&nbsp;&nbsp;Memoria offers a fun and stimulating experience as you train your memory, focus, and strategic thinking abilities. It's a great way to relax, sharpen your mind, and compete against your own past performance or set new records.</p>
                </div>
                <button class="mor1" onclick="window.location.href = '../Games/Memory Game/index.html';">Play Now</button>
            </div>

            <div class="card1">
                <img class="img1" src="images/ttt1.png" alt="Tic-Tac-Toe">
                <img class="img2" src="images/ttt.png" alt="Tic-Tac-Toe">
                <img class="img3" src="images/ttt2.png" alt="Tic-Tac-Toe">
                <div>
                    <h1>Tic Tac Toe</h1>
                    <p>&nbsp;&nbsp;&nbsp;Playing Tic Tac Toe on a computer against another player is an interactive and strategic game. It involves a 3x3 grid where players take turns marking their chosen symbol, typically an "X" or an "O," in an attempt to create a line of three symbols either horizontally, vertically, or diagonally.<br><br>
                        &nbsp;&nbsp;&nbsp;To play, the computer will display the empty grid, and the first player will choose a cell to mark with their symbol. The second player then takes their turn, and the game continues until one player successfully forms a line of three symbols or until the entire grid is filled without a winner, resulting in a tie. <br><br>
                        &nbsp;&nbsp;&nbsp;The game encourages strategic thinking, as players must plan their moves while anticipating and blocking their opponent's attempts to form a line. Each game offers an opportunity to refine tactics and develop winning strategies. <br><br>
                        &nbsp;&nbsp;&nbsp;So gather a friend, launch the game on your computer, and engage in the timeless battle of wits that is Tic Tac Toe. Challenge each other, test your skills, and strive to claim victory in this classic game of strategy. Have fun!</p>
                </div>
                <button class="mor1" onclick="window.location.href = '../Games/Tic Tac Toe/index.html';">Play Now</button>
            </div>

            <div class="card2">
                <img class="img1" src="images/hangman1.png" alt="hangman game">
                <img class="img2" src="images/hangman.png" alt="hangman game">
                <img class="img3" src="images/hangman2.png" alt="hangman game">
                <div>
                    <h1>Hangman: The Word Game</h1>
                    <p>&nbsp;&nbsp;&nbsp;Playing Hangman on a computer is a fun and challenging word-guessing game. It involves one player attempting to guess a hidden word by suggesting letters within a certain number of attempts. The computer serves as the host, generating the word and providing feedback on each guess. <br><br>
                        &nbsp;&nbsp;&nbsp;To play, the computer selects a word from a predetermined list and displays a series of blanks, each representing a letter in the word. The player starts by suggesting a letter they believe is part of the word. If the letter is correct, the computer reveals all instances of that letter in the word. If the letter is incorrect, the computer adds a part to the hangman's gallows drawing.
                        The player continues guessing letters until they either successfully guess the word or the hangman's drawing is complete, resulting in a loss. The challenge lies in guessing the word correctly within the limited number of attempts, while using logic and deduction to narrow down the possibilities. <br><br>
                        &nbsp;&nbsp;&nbsp;The computer facilitates the game by managing the word selection, tracking the player's guesses, updating the displayed blanks, and providing visual feedback on the hangman's progress. <br><br>
                        &nbsp;&nbsp;&nbsp;So fire up your computer, challenge your word-guessing abilities, and try to save the hangman from his fate by unravelling the hidden word in this classic and captivating game.
                        Have fun!</p>
                </div>
                <button class="mor1" onclick="window.location.href = '../Games/Hangman/index.html';">PLay Now</button>
            </div>

            <div class="card3">
                <img class="img1" src="images/hangman.png" alt="hangman game">
                <img class="img2" src="images/hangman.png" alt="hangman game">
                <img class="img3" src="images/hangman.png" alt="hangman game">
                <div>
                    <h1>Connect 4</h1>
                    <p>&nbsp;&nbsp;&nbsp;Playing Connect 4 on a computer is an enjoyable and strategic game of strategy and foresight. The objective is to be the first player to connect four of their coloured discs in a row, either horizontally, vertically, or diagonally on a 6x7 grid. <br><br>
                        &nbsp;&nbsp;&nbsp;To play, the computer presents the empty grid, and players take turns dropping one of their coloured discs into any of the seven columns. The disc will fall to the lowest available position within the chosen column. The game continues as players alternate turns, strategically placing their discs to create a winning connection while also blocking their opponent's attempts. <br><br>
                        &nbsp;&nbsp;&nbsp;The game requires critical thinking, pattern recognition, and planning ahead. Each move carries weight as players strategically position their discs to create opportunities while thwarting their opponent's progress. <br><br>
                        &nbsp;&nbsp;&nbsp;So, get ready to challenge a friend or test your skills against the computer in this engaging and thought-provoking game. Connect 4 on a computer provides a convenient and immersive experience that guarantees hours of entertainment and strategic play.
                        Have fun!</p>
                </div>
                <button class="mor1" onclick="window.location.href = '../Games/Connect 4/index.html';">PLay Now</button>
            </div>

            <div class="card4">
                <img class="img1" src="images/rps1.png" alt="hangman game">
                <img class="img2" src="images/rps2.png" alt="hangman game">
                <img class="img3" src="images/rps3.png" alt="hangman game">
                <div>
                    <h1>Rock Paper Scissor</h1>
                    <p>&nbsp;&nbsp;&nbsp;Playing the classic game of Rock Paper Scissors against a computer opponent is an exciting challenge. The game involves two players, in this case, you and the computer. Each player simultaneously chooses one of three options: rock, paper, or scissors. The objective is to select the winning item based on a set of predetermined rules. <br><br>
                        &nbsp;&nbsp;&nbsp;Rock beats scissors, scissors beat paper, and paper beats rock. If both players choose the same item, it results in a tie. The computer opponent's choice is typically determined randomly. <br><br>
                        &nbsp;&nbsp;&nbsp;To play, you'll make your selection by indicating your choice of rock, paper, or scissors. The computer will then reveal its choice, and the winner is determined based on the established rules. The game continues for a predetermined number of rounds, and the player with the most wins at the end is declared the overall winner. <br><br>
                        &nbsp;&nbsp;&nbsp;Playing against a computer opponent adds an element of unpredictability, as the computer's choices are not influenced by human tendencies. It tests your ability to anticipate and outsmart your digital opponent. Whether you win, lose, or tie, each game provides an opportunity to refine your strategy and try to outwit the computer in subsequent rounds.
                        Have fun!</p>
                </div>
                <button class="mor1" onclick="window.location.href = '../Games/RPS/index.html';">PLay Now</button>
            </div>
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
            <a href="uabout.php">About</a>
            <a href="#">More Games</a>
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
