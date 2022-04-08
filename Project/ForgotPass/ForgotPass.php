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
    $emailErr = "";
    $email = "";

    if (empty($_POST["email"])) 
    {
      $emailErr = "Cannot be empty";
    } else {
      $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL))
       {
        $emailErr = "Must be a valid";
        $email="";
      }
    }   
    ?>


  <?php 
		include 'navbar.php';
	 ?>
	 <p> <a href="http://localhost/project/Include/">   HomePage </a>'   <a href="http://localhost/project/Login/Login.php">    Login </a>    '<a href="http://localhost/project/JSON/store.php">    Registration  '<a href="http://localhost/project//Teacher's%20Information/load.php">    Teacher's Information </a> </p>

    <h2>FORGOT PASSWORD</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <?php
    if(isset($error))
    {  
       echo $error;  
    }
    ?>
    Enter E-mail:
	<input type="text" name="email" value="<?php echo $email;?>">
	<span class="error">* <?php echo $emailErr;?></span>
	<br><br>

    <input type="submit" name="submit" value="Submit">
    </form> 

    <?php
    if(isset($message))  
    {  
         echo $message;  
    }

    echo $email."<br>";
    ?>   
</body>
</html>