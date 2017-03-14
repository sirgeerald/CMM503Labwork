<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8">
      <title>Title</title> 
</head>
 
<body>  

<!-- HEADER START --> 
<header>   

</header>
 <!-- HEADER END -->   

<!-- MAIN START --> 
<main>   
    <section>
        <?php
        include("dbConnect.php");



        echo "dbhost - ". $connectstr_dbhost. "<br>";
        echo "dbname - ". $connectstr_dbname. "<br>";
        echo "dbusername - ". $connectstr_dbusername. "<br>";
        echo "dbpassword - ". $connectstr_dbpassword. "<br>";

        $dbquery = "SELECT * FROM marvelmovies";

        $result = $link->query($dbquery);

        while ($row = $result->fetch_array()) {

            echo "$row[0] - $row[1] - $row[2] - $row[3] - $row[4] <br/> ";
        }

        $result->close();
        $link->close();

        ?>

    </section>
</main>
 <!-- MAIN END -->   


<!-- FOOTER START --> 
<footer>


</footer>
 <!-- FOOTER END -->   
</body>
 
</html>



