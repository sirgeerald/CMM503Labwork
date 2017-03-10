<?php
include ("dbConnect.php");

/**
 * Created by PhpStorm.
 * User: Sir
 * Date: 10/03/2017
 * Time: 04:58
 */
$sql_query = "SELECT * FROM superheros";

$result = $db ->query($sql_query);

while ($row = $result -> fetch_array()){
    echo "<p>" . $row['sperheroName'] . "</p>";
}

$result -> close();

$db -> close();

?>