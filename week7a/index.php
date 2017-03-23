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
    <h2> Superhero Home page</h2>

</header>
<!-- HEADER END -->


<!-- MAIN START -->
<main>
    <p>What will you like to do?</p>

    <ul>
        <li><a href="insertSuperhero.php"> Insert a superhero</a></li>
        <li><a href="displaySuperheros.php"> Display all superheros</a></li>
        <li><a href="battle.php"> Insert a battle</a></li>
        <li><a href="displayBattles.php">Display all battles</a></li>
        <ul>
            <?php
            include ("dbConnect.php");

            $sql_query = "SELECT * FROM superheros";
            $result = $link -> query($sql_query);

            while($row = $result->fetch_array())
            {
                $firstname = $row['firstName'];
                $lastname = $row['lastName'];
                $id = $row['superheroID'];
                echo "<li> <a href='displayBattles.php?id={$id}'> Battles for {$firstname} {$lastname} </a> </li>";
            }
            ?>
        </ul>
    </ul>

</main>
<!-- MAIN END -->


<!-- FOOTER START -->
<footer>


</footer>
<!-- FOOTER END -->


</body>
</html>