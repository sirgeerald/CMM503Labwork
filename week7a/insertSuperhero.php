<?php

include ("dbConnect.php");

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$superpower = $_POST["superpower"];

$sql = "INSERT INTO superheros(firstName, lastName, mainSuperpower) VALUES ('$firstname', '$lastname', '$superpower')";

if (mysqli_query($link, $sql)){

}
else{
    echo "Error ". $sql. "<br>". mysqli_error($db);
}

header("location: index.php");

