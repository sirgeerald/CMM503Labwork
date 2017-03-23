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
    <form action="insertBattle.php" method="post">
    <p>What will you like to do?</p>
    <select name="superhero">

        <?php
        include ("dbConnect.php");

        $sql_query = "SELECT * FROM superheros";
        $result = $link -> query($sql_query);

        while($row = $result->fetch_array())
        {
            $firstname = $row['firstName'];
            $lastname = $row['lastName'];
            $superheroID = $row['superheroID'];
            echo "<option value=' {$superheroID}'> {$firstname} {$lastname}</option> ";
        }
        ?>
    </select> <br>

    <input type="text" name="villan" placeholder="Villan Fought"> <br>
    <input type="submit" text="Record Battle">
    </form>

</main>
<!-- MAIN END -->


<!-- FOOTER START -->
<footer>


</footer>
<!-- FOOTER END -->


</body>
</html>