<?php
include ('../registration/dbConnect.php');

$sql = "SELECT * FROM tbl_uploads";

$res = mysqli_query($link, $sql);

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>File Uploading With PHP and MySql</title>
    <!--<link rel="stylesheet" href="style.css" type="text/css" />-->
</head>
<body>
<div id="header">
    <a href="upload.php"> Add new docs</a>

    <?php
     while ($row = mysqli_fetch_array($res))
     {
         $id = $row['id'];
         $file = $row['file'];
         $type = $row['type'];
         $size = $row['size'];

         echo $id . " " . $file. "";
     }
    ?>
</div>

</body>
</html>
