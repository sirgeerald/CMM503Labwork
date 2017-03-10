<?php
include ("dbConnect.php");

/**
 * Created by PhpStorm.
 * User: Sir
 * Date: 10/03/2017
 * Time: 04:58
 */
$mysqli_query = "SELECT * FROM marvelmovies";




while ($result = mysqli_fetch_array($mysqli_query, MYSQLI_ASSOC)){
    echo "<p>" . $result[''] . "</p>";
}

?>
