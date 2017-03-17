<?php


 ob_start();
 session_start();
 if( isset($_SESSION['user'])!="" ){
     header("Location: login.php");
 }
 include_once ('dbConnect.php');

 $error = false;

 if ( isset($_POST['btn-signup']) ) {

     // clean user inputs to prevent sql injections
     $firstname = trim($_POST['fname']);
     $firstname = strip_tags($firstname);
     $firstname = htmlspecialchars($firstname);

     $lastname = trim($_POST['lname']);
     $lastname = strip_tags($lastname);
     $lastname = htmlspecialchars($lastname);

     $schoolID = trim($_POST['schoolID']);
     $schoolID = strip_tags($schoolID);
     $schoolID = htmlspecialchars($schoolID);

     $email = trim($_POST['email']);
     $email = strip_tags($email);
     $email = htmlspecialchars($email);

     $pass = trim($_POST['pass']);
     $pass = strip_tags($pass);
     $pass = htmlspecialchars($pass);

     // basic name validation
     /*if (empty($name)) {
         $error = true;
         $nameError = "Please enter your full name.";
     } else if (strlen($name) < 3) {
         $error = true;
         $nameError = "Name must have atleat 3 characters.";
     } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
         $error = true;
         $nameError = "Name must contain alphabets and space.";
     }*/

     //basic email validation
     if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
         $error = true;
         $emailError = "Please enter valid email address.";
     } else {
         // check email exist or not
         $query = "SELECT email FROM users WHERE email='$email'";
         $result = mysqli_query($query);
         $count = mysqli_num_rows($result);
         if($count!=0){
             $error = true;
             $emailError = "Provided Email is already in use.";
         }
     }
     // password validation
     if (empty($pass)){
         $error = true;
         $passError = "Please enter password.";
     } else if(strlen($pass) < 6) {
         $error = true;
         $passError = "Password must have atleast 6 characters.";
     }

     // password encrypt using SHA256();
     $password = hash('sha256', $pass);

     // if there's no error, continue to signup
     if( !$error ) {

         $query = "INSERT INTO users(firstname,lastname, schoolID,email,pwd) VALUES('$firstname','$lastname','$schoolID','$email','$pass')";
         $res = mysqli_query($query);

         if ($res) {
             $errTyp = "success";
             $errMSG = "Successfully registered, you may login now";
             unset($name);
             unset($email);
             unset($pass);
         } else {
             $errTyp = "danger";
             $errMSG = "Something went wrong, try again later...".mysqli_error($link);
         }

     }


 }
?>



<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->


    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form " />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">

            <header>
                <h1>Login and Registration Form </h1>

            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="login.php" autocomplete="on" method="post">
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>

                                <div class="error"> <?php //echo $error;?><?php //echo $username; echo $password;?> </div>

                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>

                                <p class="login button"> 
                                    <input type="submit" value="Login" name="submit" />
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>



                        <div id="register" class="animate form">

                            <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="on" method="post">

                                <h1> Sign up </h1>

                                <?php
                                if ( isset($errMSG) ) {

                                ?>

                                <p> 
                                    <label for="fname" class="uname" data-icon="u">First name</label>
                                    <input id="fname" name="fname" required="required" type="text" placeholder="mysuperusername690" />
                                </p>

                                <p>
                                    <label for="lname" class="uname" data-icon="u">Last name</label>
                                    <input id="lname" name="lname" required="required" type="text" placeholder="mysuperusername690" />
                                </p>

                                <p>
                                    <label for="schoolID" class="uname" data-icon="u">School ID No: </label>
                                    <input id="schoolID" name="schoolIDnumber" required="required" type="text" placeholder="17389103" />
                                </p>

                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="mysupermail@rgu.ac.uk"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>


                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>