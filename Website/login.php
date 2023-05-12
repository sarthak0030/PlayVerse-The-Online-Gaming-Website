<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
    <title>PlayVerse-Login</title>
</head>
<body>
        <div class="login">
            <img src="images/logo.png" alt="playverse">
            <h2>Welcome back!</h2>
            <form action="logincheck.php" method="post">
                <div class="form-control">
                    <input type="text" name="email" required>
                    <label>Email</label>
                </div>
    
                <div class="form-control">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
    
                <input type="submit" name="submit" value="Log In" class="btn">
    
                <p class="text">Don't have an account? <a href="signup.php">Sign Up!</a> </p>
            </form>
        </div>
        <div class="loginimage">
            <img src="images/loginimage1.jpg" alt="logingraphic">
        </div>
        <script src="loginscript.js"></script>
</body>
</html>