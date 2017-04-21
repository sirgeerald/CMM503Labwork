<?php
include ('../registration/dbConnect.php');

if(isset($_POST['btn_upload'])) {


    print_r($_FILES);

    /*$name = $_FILES['file_upload']['name'];
    $size = $_FILES['file_upload']['size'];
    $tmp = $_FILES['file_upload']['tmp_name'];
    $type = $_FILES['file_upload']['type'];


    if ($name){

        $location = "/uploads/$name";
        move_uploaded_file($tmp, $location);

        $link -> query("INSERT INTO tbl_uploads (file,type,size) VALUES('$location','$type','$size')");
        header('location: index.php');

    }else{
        die("Please select a file ");
    }

}*/
}
?>


