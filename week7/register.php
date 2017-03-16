<?php
include("dbConnect.php");
/**
 * Created by PhpStorm.
 * User: Sir
 * Date: 16/03/2017
 * Time: 15:54
 */

if (isset($_POST['schoolIDnumber']) && isset($_POST['password'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $schoolID = $_POST['schoolIDnumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO `users` (firstname, lastname, schoolID, email, password) VALUES ('$firstname', '$lastname', '$schoolID','$email','$password')";


    $result = mysqli_query($link, $query);

    if($result){
        header("location: welcome.html"); // Redirecting To another Page
    }else{
        $fmsg ="User Registration Failed";
    }



    $result->close();
    $link->close();

}