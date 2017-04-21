<?php
include ('../registration/dbConnect.php');
if(isset($_POST['btn_upload']))
{
    session_start();

    $name = $_FILES['file_upload']['name'];
    $size = $_FILES['file_upload']['size'];
    $tmp = $_FILES['file_upload']['tmp_name'];
    $type = $_FILES['file_upload']['type'];


    if ($name){

        $location = "uploads/$name";
        move_uploaded_file($tmp, $location);

        $link -> query("INSERT INTO tbl_uploads (file,type,size) VALUES('$location','$type','$size')");
        header('location: index.php');

    }else{
        die("Please select a file ");
    }

}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>File Uploading With PHP and MySql</title>
    <!--<link rel="stylesheet" href="style.css" type="text/css" />-->
</head>
<body>
<div id="header">
    <label>File Uploading With PHP and MySql</label> <br>

</div>
<div id="body">
    <form method="post" enctype="multipart/form-data">
        <br>  <input type="file" name="file_upload" />
        <button type="submit" name="btn-upload">upload</button>
    </form>

</div>

</body>
</html>


