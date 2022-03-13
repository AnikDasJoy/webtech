<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style type="text/css">
		.error{
			color: red;
		}
	</style>
</head>
<body>
    <?php

    $usernameErr = $passErr = "";
    $username = $pass = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["username"])) {
          $usernameErr = "username is required";
        } else {
          $username = test_input($_POST["name"]);
          if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $usernameErr = "must contain at least two (2) characters";
            $username = "";
          }
        }

        if (empty($_POST["pass"])) {
            $passErr = "Password must not be less than eight(8) characters";
          } else {
            $pass = test_input($_POST["pass"]);
            if (!filter_var($pass, FILTER_VALIDATE_PASS)) {
              $passErr = " must contain at least one of the special characters (@, #, $,%)";
              $pass="";
            }
        }
    }
    ?>

<?php 
		include 'navbar.php';
	 ?>
	 <p> <a href="http://localhost:81/adv%20php/LabTask%204/Include/">   Home </a>'   <a href="http://localhost:81/adv%20php/LabTask%204/Login/Login.php">    Login </a>    '<a href="http://localhost:81/adv%20php/LabTask%204/Registration/store.php">    Registration </a> </p>
    
   <h2>LOGIN</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    User Name:
    <input type="text" name="username" value="<?php echo $username;?>">
    <span class="error">* <?php echo $usernameErr;?></span>
    <br><br>
    Passowrd:
    <input type="text" name="pass" value="<?php echo $pass;?>">
    <span class="error">* <?php echo $passErr;?></span>
    <br><br>

    <input id="RM" type="checkbox" name="RM" value="RM">
    <label for="RM">Remember Me </label>
    <br><br>

    <input type="submit" name="submit" value="Submit">
    <p> <a href="http://localhost:81/adv%20php/LabTask%204/ForgotPass/ForgotPass.php">Forgot Password? </a></p>


    </form>

    <?php
    echo $username."<br>";
    echo $pass."<br>";
    ?>
</body>
</html>