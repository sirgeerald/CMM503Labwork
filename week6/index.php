<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week 6 Homepage</title>
</head>
<body>

<!-- HEADER START -->
<header>

<h1> Marvel Movies 1.1 </h1>
</header>
<!-- HEADER END -->


<!-- MAIN START -->
<main>

    <?php
      include ("dbConnect.php");

      echo "dbhost - ". $connectstr_dbhost. "<br>";
      echo "dbname - ". $connectstr_dbname. "<br>";
      echo "dbusername - ". $connectstr_dbusername. "<br>";
      echo "dbpassword - ". $connectstr_dbpassword. "<br>";

    ?>

    <a href="displayall.php"> <button type="button">Display All Movies</button></a> <br> <br>

    <a href="displaymarvel.php"> <button type="button">Display All Marvel Movies</button></a> <br> <br>
    <a href="displayafter2010.php"> <button type="button">Display Created after 2010</button></a> <br> <br>
    <a href="displayxmen.php"> <button type="button">Display All X-Men Films</button></a> <br> <br>

    <br>
    <br>


</main>
<!-- MAIN END -->


<!-- FOOTER START -->
<footer>


</footer>
<!-- FOOTER END -->


</body>
</html>