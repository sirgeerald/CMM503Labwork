<?php
/**
 * Created by PhpStorm.
 * User: Sir
 * Date: 16/03/2017
 * Time: 05:47
 */

include("dbConnect.php");



if (empty($_POST["username"]) || empty($_POST["password"])) {
    echo "Both fields are required.";
} else {

    $username = $_POST['username'];
    $password = $_POST['password'];

    //$sql_query = "SELECT marvelMovieID,yearReleased,title,productionStudio,notes FROM marvelmovies where UPPER(productionStudio) like '%FOX%'; ";
    //$result = $link->query($sql_query);

    $sql_query = "SELECT userID FROM users WHERE schoolID ='$username' or email = '$username' and pwd='$password' ; ";
    //$result = $link->query($sql_query);

    //$sql = "SELECT uid FROM users WHERE username='$username' and password='$password'";

    $result = mysqli_query($link, $sql_query);

    while($row = $result->fetch_array()){
        // print out fields from row of data
        echo "<p>".$row ['uid']. "</p>";

    }

    if (mysqli_num_rows($result) == 1) {
        header("location: xmen.php"); // Redirecting To another Page
    } else {
        echo "Incorrect username or password.";
    }

    $result->close();
    $link->close();


}