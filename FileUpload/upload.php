<?php
include ('../registration/dbConnect.php');




    print_r($_FILES);

    $targetPath = "../FileUpload/uploads/";


    $targetPath = $targetPath. basename($_FILES['file_upload']['name']);

    if ($_FILES['file_upload']['size'] < 2000){
        if (substr($_FILES['file_upload']['name'], -3) == 'txt'){
            if (move_uploaded_file($_FILES['file_upload']['tmp_name'], $targetPath)){

                echo "The file ". basename($_FILES['file_upload']['name']). " has been uploaded to " .$targetPath;




            }else{
                echo "Error uploading file";
            }
        }else{
            echo "You must upload a txt file";

        }
    }else{
        echo "file too big";
    }

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




    echo "<br><a href='$targetPath'> File Uploaded</a>";

                $files = glob("uploads/*.*");

                for ($i=0; $i<count($files); $i++) {
                    $image = $files[$i];
                    print $image ."<br />";

                    echo "<br><a href='$image'> File Uploaded ".$i . "</a>";
                }
    }

}*/

?>


