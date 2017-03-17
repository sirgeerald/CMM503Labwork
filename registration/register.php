
<?php
require('dbConnect.php');
// If the values are posted, insert them into the database.
if (isset($_POST['schoolID']) && isset($_POST['password'])){
    $schoolID = $_POST['schoolID'];
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO `users` (firstname, lastname, schoolID, email, password) VALUES ('$firstname','$lastname', '$schoolID','$email','$password')";

    $result = mysqli_query($link, $query);
    if($result){
        $smsg = "User Created Successfully.";
    }else{
        $fmsg ="User Registration Failed";
    }
}
?>
<html>
<head>
    <title>User Registeration Using PHP & MySQL</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

    <link rel="stylesheet" href="styles.css" >

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <form class="form-signin" method="POST">

        <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
        <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <h2 class="form-signin-heading">Please Register</h2>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input type="text" name="schoolID" class="form-control" placeholder="School ID" required>
        </div>

        <label for="fname" class="sr-only">First Name</label>
        <input type="text" name="fname" id="fname" class="form-control" placeholder="Email address" required autofocus>

        <label for="lname" class="sr-only">Last Name</label>
        <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" required autofocus>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
<!--        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
-->    </form>
</div>

</body>

</html>