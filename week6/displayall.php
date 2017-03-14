<?php
include ("dbConnect.php");

/**
 * Created by PhpStorm.
 * User: Sir
 * Date: 10/03/2017
 * Time: 04:58
 */

$dbquery = "SELECT * FROM marvelmovies";

$result=mysqli_query($dbquery);

while ($row = $result -> fetch_array()){

    echo "$row[0] - $row[1] - $row[2] - $row[3] - $row[4] <br/> ";
}


?>
