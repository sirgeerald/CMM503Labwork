<?php
include("dbConnect.php");


if (isset($_POST['schoolIDnumber']) && isset($_POST['password'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $schoolID = $_POST['schoolIDnumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO `users` (firstname, lastname, schoolID, email, password) VALUES ('$firstname', '$lastname', '$schoolID','$email','$password')";


    $result = mysqli_query($link, $query);

    if($result){
        $smsg = "User Created Successfully.";
    }else{
        $fmsg ="User Registration Failed";
    }


    /*if (mysqli_num_rows($result) == 1) {

    } else {
        echo "Incorrect username or password.";
    }

    $result->close();
    $link->close();*/

}