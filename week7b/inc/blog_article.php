<?php

include ("scripts/dbconnect.php");

$articleID = $params['blogID'];

echo "<main>  ";


$sql = "SELECT * FROM blogarticles where articleID = '$articleID'";
$result = $db->query($sql);


while ($row = $result-> fetch_array())
{
    $articleID = $row['articleID'];
    $articleName = $row['articleName'];
    $articleAuthor = $row['articleAuthor'];
    $articleText = $row['articleText'];

    echo "
    <article> 
 <h2>{$articleName}</h2> 
 <h3>by {$articleAuthor}</h3> 
 {$articleText} 
  </article>";

}
echo "</main>";

include ("scripts/footer.php");

?>