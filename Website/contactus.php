<?php

include 'config.php';

if(isset($_POST['submit'])){
    $EnquiryName = $_POST['EnquiryName'];
    $EnquiryEmail = $_POST['EnquiryEmail'];
    $enquiryMessage = $_POST['EnquiryMessage'];

    $select = " INSERT INTO tblenquiry(`EnquiryName`, `EnquiryEmail`, `EnquiryMessage`) VALUES('$EnquiryName', '$EnquiryEmail', '$enquiryMessage')";

    $result = mysqli_query($conn, $select);

    //if(mysqli_num_rows($result)  > 0){
        //$insert = "INSERT INTO tblenquiry(EnquiryName, EnquiryEmail, EnquiryMessage) VALUES('".$EnquiryName."', '".$EnquiryEmail."', '".$enquiryMessage."')";
        //$c=mysqli_query($conn, $insert);
        if(mysqli_query($conn, $select))
        {
            header("location:index.html#contact");
        }
    };

?>