<?php
include ('../registration/dbConnect.php');
if(isset($_FILES['file_upload']))
{
    session_start();
    $userID = $_SESSION['username'];
    $name = $_FILES['file_upload']['name'];
    $size = $_FILES['file_upload']['size'];
    $tmp = $_FILES['file_upload']['tmp_name'];
    $type = $_FILES['file_upload']['type'];

    $folder = 'uploads/'. $_FILES['file_upload']['name'];

    $moved = move_uploaded_file($tmp, $folder);

    if ($moved){
        $add = $link->prepare("insert into tbl_uploads values(?,?,?)");
        $add ->bind_param($name,$tmp,$size);
        if ($add -> execute())
        {
            ?>
            <script> alert(" Upload successful!")</script>

        <?php
        }
        else{
            ?>
            <script> alert(" Upload Failed!")</script>
<?php
        }

    }else{

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
        <input type="file" name="file_upload" />
        <button type="submit" name="btn-upload">upload</button>
    </form>

</div>

</body>
</html>
