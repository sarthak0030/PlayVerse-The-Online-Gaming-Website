<?php

include 'config.php';

if(isset($_POST['submit'])){
    $firstname = mysqli_real_escape_string($conn, $_POST['UserFirstName']);
    $lastname = mysqli_real_escape_string($conn, $_POST['UserLastName']);
    $age = mysqli_real_escape_string($conn, $_POST['UserAge']);
    $number = mysqli_real_escape_string($conn, $_POST['UserNumber']);
    $email = mysqli_real_escape_string($conn, $_POST['UserEmail']);
    $pass = $_POST['UsersPassword'];

    $select = " SELECT * FROM tblusers WHERE UserFirstName = '$firstname' and UserLastName = '$lastname' and UserEmail = '$email' and UsersPassword = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $error[] = 'user already exist!';
    }else{
        $insert = "INSERT INTO tblusers(UserFirstName, UserLastName, UserAge, UserNumber, UserEmail, UsersPassword) VALUES('".$firstname."', '".$lastname."', '".$age."', '".$number."', '".$email."', '".$pass."')";
        //$c=mysqli_query($conn, $insert);
        if(mysqli_query($conn, $insert))
        {
            echo"success";
        }
        header("location:login.php");
    }
};

?>