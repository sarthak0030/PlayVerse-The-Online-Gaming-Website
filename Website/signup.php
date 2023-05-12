

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signupstyle.css">
    <title>PlayVerse-Sign Up</title>
</head>
<body>
        <div class="signup">
            <h1>Welcome to the PlayVerse!</h1>
            <h2>Sign Up</h2>
            <form action="signupp.php" method="post">
                <?php
                    if(isset($error)){
                        foreach($error as $error){
                            echo '<span class="error-msg>'.$error.'</span>';
                        };
                    };
                ?>
                <div class="form-control">
                    <input type="text" name="UserFirstName" required>
                    <label>First Name</label>
                </div>
                <div class="form-control">
                    <input type="text" name="UserLastName" required>
                    <label>Last Name</label>
                </div>

                <div class="container">
                    <div id="age">
                        <input type="text" name="UserAge" required>
                        <label>Age</label>
                    </div>
                    <div id="number">
                        <input type="text" name="UserNumber" required>
                        <label>Contact Number</label>
                    </div>

                </div>
                
                <div class="form-control">
                    <input type="text" name="UserEmail" required>
                    <label>Email</label>
                </div>
    
                <div class="form-control">
                    <input type="password" name="UsersPassword" required>
                    <label>Password</label>
                </div>
                <input type="submit" name="submit" value="Sign Up" class="btn">
    
                <p class="text">Already have an account? <a href="login.php">Login!</a> </p>
            </form>
        </div>
        <div class="signupimage">
            <img src="images/signupimage1.jpg" alt="logingraphic">
        </div>
        <!--<script src="loginscript.js"></script>-->
</body>
</html>