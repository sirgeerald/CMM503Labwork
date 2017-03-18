
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
                            <?php
                            require ('dbConnect.php');

                            // If form submitted, insert values into the database.

                            if (isset($_REQUEST['schoolIDnumber'])){
                            // removes backslashes
                            $schoolID = stripslashes($_REQUEST['schoolIDnumber']);
                            //escapes special characters in a string
                            $schoolID = mysqli_real_escape_string($link, $username);

                            $firstname = stripslashes($_REQUEST['fname']);
                            $firstname = mysqli_real_escape_string($link, $firstname);

                            $lastname = stripslashes($_REQUEST['lname']);
                            $lastname = mysqli_real_escape_string($link, $lastname);

                            $email = stripslashes($_REQUEST['email']);
                            $email = mysqli_real_escape_string($link, $email);

                            $password = stripslashes($_REQUEST['password']);
                            $password = mysqli_real_escape_string($link, $password);

                            $query = "INSERT into `users` (firstname,lastname, schoolID, email, password) VALUES ('$firstname', '$lastname', '$schoolID', '$email', '".md5($password)."')";
                            $result = mysqli_query($con, $query);

                            if ($result){
                            echo "<div class='form'>
                            <h3>You are registered successfully.</h3>
                                    <br/>Click here to <a href='login.php'>Login</a></div>";
                            }
                            }else{
                            ?>



                                ?>
                            <form  action="" autocomplete="off" method="post">

                                <h1> Sign up </h1>

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
						 <?php } ?>
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>