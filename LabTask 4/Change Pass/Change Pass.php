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
    $cpassErr = $newpassErr = $retypenewpassErr = "";
    $cpass = $newpass = $retypenewpass = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["cpass"])) {
          $cpassErr = "current password is required";
        }

        if (empty($_POST["newpass"])) {
            $newpassErr = "new password is required";
          }

        if (empty($_POST["retypenewpass"])) {
            $retypenewpassErr = "New Password must match with the Retyped Password";
          }

    }
    ?>

    <?php
    include 'navbar.php';
	 ?>
	 <p> <a href="http://localhost:81/adv%20php/LabTask%204/Include/">   Logout </a> </p>
    <h2>CHANGE PASSWORD</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <?php
    if(isset($error))
    {  
       echo $error;  
    }
    ?>
    Current Password:
    <input type="text" name="cpass" value="<?php echo $cpass;?>">
    <span class="error">* <?php echo $cpassErr;?></span>
    <br><br>
    New Passowrd:
    <input type="text" name="newpass" value="<?php echo $newpass;?>">
    <span class="error">* <?php echo $newpassErr;?></span>
    <br><br>
    Retype New Passowrd:
    <input type="text" name="retypenewpass" value="<?php echo $retypenewpass;?>">
    <span class="error">* <?php echo $retypenewpassErr;?></span>
    <br><br>

    <input type="submit" name="submit" value="Submit">
    </form> 

    <?php
    if(isset($message))  
    {  
         echo $message;  
    }

    echo $cpass."<br>";
    echo $newpass."<br>";
    echo $retypenewpass."<br>";
    ?>   
</body>
</html>