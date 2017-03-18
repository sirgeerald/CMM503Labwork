
<?php
require('dbConnect.php');
// If the values are posted, insert them into the database.
if (isset($_POST['signupsubmit'])){
    $schoolID = $_POST['schoolID'];
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO `users` (firstname, lastname, schoolID, email, pwd) VALUES ('$firstname','$lastname', '$schoolID','$email','$password')";

    define('DB_SERVER', $connectstr_dbhost);
    define('DB_USERNAME', $connectstr_dbname);
    define('DB_PASSWORD', $connectstr_dbusername);
    define('DB_DATABASE', $connectstr_dbpassword);


    $result = mysqli_query($link, $query);
    if($result){
        $smsg = "User Created Successfully.";


        echo "dbhost - ". $connectstr_dbhost. "<br>";
        echo "dbname - ". $connectstr_dbname. "<br>";
        echo "dbusername - ". $connectstr_dbusername. "<br>";
        echo "dbpassword - ". $connectstr_dbpassword. "<br>";

        header("location: index.php");

    }else{
        $fmsg ="User Registration Failed". mysqli_error($link);
    }
}
?>
