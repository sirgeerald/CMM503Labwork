<?php

include ("dbConnect.php");

$superheroID = $_POST["superhero"];
$villan = $_POST["villan"];


$sql = "INSERT INTO battles (superheroID, villanFought) VALUES ('$superheroID','$villan')";

if (mysqli_query($link, $sql)){

}
else{
    echo "Error ". $sql. "<br>". mysqli_error($db);
}

header("location: index.php");

