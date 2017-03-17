
<?php
require('dbConnect.php');
// If the values are posted, insert them into the database.
if (isset($_POST['schoolID']) && isset($_POST['password'])){
    $schoolID = $_POST['schoolID'];
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO `users` (firstname, lastname, schoolID, email, pwd) VALUES ('$firstname','$lastname', '$schoolID','$email','$password')";

    $result = mysqli_query($link, $query);
    if($result){
        $smsg = "User Created Successfully.";
    }else{
        $fmsg ="User Registration Failed". mysqli_error($link);
    }
}
?>
