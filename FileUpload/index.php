
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
        <input type="submit" name="btn-upload" value="Upload File">
    </form>

</div>

</body>

<?php
include ('../registration/dbConnect.php');

$filename = $_POST['file_upload'];

if (isset($_POST['btn-upload'])){

    $fnm = $_FILES['file_upload']['name'];
    $destination = "./uploads/". $fnm;
    move_uploaded_file($_FILES['file_upload']['tmp_name'], $destination);

    $query = "insert into tbl_uploads(file,type,path) VALUES ('$filename','$fnm', '$destination')";
    $result = mysqli_query($link, $query);

    if($result == true){
        ?>
        <script> alert("File Uploaded"); </script>
<?php
    }
    else{
    ?>
        <script> alert("Error Uploading file"); </script>
        <?php
    }


}



?>

</html>
