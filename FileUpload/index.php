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
    <form method="post" action="upload.php" enctype="multipart/form-data">
        <br>  <input type="file" name="file_upload" />
        <button type="submit" name="btn-upload">upload</button>
    </form>

</div>

</body>
</html>
