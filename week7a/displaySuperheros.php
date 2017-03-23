<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Superhero System</title>
</head>
<body>

<!-- HEADER START -->
<header>
   <h1> Superhero system</h1>
    <h2> Display all Superhero </h2>
    <p><a href="index.php"> Return to home .. </a></p>

</header>
<!-- HEADER END -->


<!-- MAIN START -->
<main>

    <?php
    include("dbConnect.php");

    $sql_query = "SELECT * FROM superheros";
    $result = $link->query($sql_query);

    while ($row = $result->fetch_array()) {
        $firstname = $row['firstName'];
        $lastname = $row['lastName'];
        $mainSuperpower = $row['mainSuperpower'];
        echo "<article>
            <h3> {$firstname} {$lastname} </h3>
            <p> This superheros main power is <strong>{$mainSuperpower}</strong></p>
              </article>";
    }
    ?>

</main>
<!-- MAIN END -->


<!-- FOOTER START -->
<footer>


</footer>
<!-- FOOTER END -->


</body>
</html>