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
<style>
body {
  background-color: lightblue;
}
h1 {
  color: white;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
  text-align: center;
}
</style>

<body>
<button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.</button>

<p id="demo"></p>
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
<h1>Student Information</h1>
<h1 style="background-color:DodgerBlue;">Hello World</h1>
<?php 
		include 'navbar.php';
	 ?>
	  <p> <a href="http://localhost/final/project/Include/">   HomePage </a>'   <a href="http://localhost/final/project/Login/Login.php">    Login </a>    '<a href="http://localhost/final/project/JSON/store.php">    Registration   '<a href="http://localhost/final/project/Teacher's%20Information/store.php">    Teacher's Information </a> '<a href="http://localhost/final/project/addStudent.php">  Add New Students </a> </p>
    
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
    <p> <a href="http://localhost/project/ForgotPass/ForgotPass.php">Forgot Password? </a></p>



    </form>

    <?php
    echo $username."<br>";
    echo $pass."<br>";
    ?>
</body>
</html>