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
    <h2> Display all Battles</h2>
    <p><a href="index.php"> Return to home .. </a></p>

</header>
<!-- HEADER END -->


<!-- MAIN START -->
<main>

    <?php
    include("dbConnect.php");

    if (isset($_GET['id'])){
        $superheroID = $_GET['id'];
        $sql_query = "SELECT * FROM superherobattles WHERE superheroID ='$superheroID'";
    }

    else{
        $sql_query = "SELECT * FROM superherobattles";
    }

    $result = $link->query($sql_query);

    while ($row = $result->fetch_array()) {
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $mainSuperpower = $row['mainSuperPower'];
        $villanFought = $row['villanFought'];
        echo "<article>
            
            <p> This superhero known as <strong>{$firstname} {$lastname} </strong> recently fought <strong>{$villanFought}</strong> using <strong>{$mainSuperpower}</strong></p>
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