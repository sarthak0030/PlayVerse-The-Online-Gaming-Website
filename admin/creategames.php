<?php

include 'config1.php';

if(isset($_POST['submit'])){
    $GameName = $_POST['packagename'];
    $GameRule = $_POST['packagetype'];
    $GameAbout = $_POST['packagedetails'];

    $select = " INSERT INTO tblgames(`packagename`, `packagetype`, `packagedetails`) VALUES('$GameName', '$GameRule', '$GameAbout')";

    $result = mysqli_query($conn, $select);

    //if(mysqli_num_rows($result)  > 0){
        //$insert = "INSERT INTO tblenquiry(EnquiryName, EnquiryEmail, EnquiryMessage) VALUES('".$EnquiryName."', '".$EnquiryEmail."', '".$enquiryMessage."')";
        //$c=mysqli_query($conn, $insert);
        if(mysqli_query($conn, $select))
        {
            header("location:create-packages.php");
        }
    };

?>