<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
		.error{
			color: red;
		}
	</style>
</head>
<body>
    <?php
    $nameErr = $emailErr = $DateOfBirthErr = $genderErr = $degreeErr = $bloodgroupErr = "";
    $name = $email = $DateOfBirth =  $gender = $degree = $bloodgroup = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $nameErr = "Cannot be empty";
        } else {
          $name = test_input($_POST["name"]);
          if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Can contain a-z, A-Z, period, dash only";
            $name = "";
          }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Cannot be empty";
          } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Must be a valid";
              $email="";
            }
        }

        if (empty($_POST["DateOfBirth"])) {
            $DateOfBirthErr = "Cannot be empty";
          } else {
            $DateOfBirth = test_input($_POST["DateOfBirth"]);
            if (!filter_var($DateOfBirth, FILTER_VALIDATE_DOB)) {
                $DateOfBirthErr = "Must be valid numbers";
                $DateOfBirth="";
            }
          }

        if (empty($_POST["gender"])) {
            $genderErr = "At least one of them must be selected";
          } else {
            $gender = test_input($_POST["gender"]);
          }

        if (empty($_POST["degree"])) {
            $degreeErr = "Cannot be empty";
        } else {
            $degree = test_input($_POST["degree"]);
            if (!filter_var($degree, FILTER_VALIDATE_DEGREE)) {
                $degreeErr = "At least two of them must be selected";
                $degree="";
              }
        }

        
        if (empty($_POST["bloodgroup"])) {
            $bloodgroupErr = "Must be selected";
          } else {
            $bloodgroup = test_input($_POST["bloodgroup"]);
          }
     }

     function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    Name:
    <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail:
	<input type="text" name="email" value="<?php echo $email;?>">
	<span class="error">* <?php echo $emailErr;?></span>
	<br><br>
    Date Of Birth:
	<input type="date" name="Date Of Birth" value="<?php echo $DateOfBirth;?>">
	<span class="error">* <?php echo $DateOfBirth;?></span>
	<br><br>
    Gender:
	<input type="radio" name="gender"
	<?php if (isset($gender) && $gender=="male") echo "checked";?>
	value="male">Male

    <input type="radio" name="gender"
	<?php if (isset($gender) && $gender=="female") echo "checked";?>
	value="female">Female

	<input type="radio" name="gender"
	<?php if (isset($gender) && $gender=="other") echo "checked";?>
	value="other">Other
	<span class="error">* <?php echo $genderErr;?></span>
	<br><br>

    Degree:
    <input id="SSC" type="checkbox" name="SSC" value="SSC">
    <label for="SSC">SSC </label>

    <!-- <input type="checkbox" name="degree"
	<?php if (isset($degree) && $degree=="SSC") echo "checked";?>
	value="SSC">SSC -->

    <input id="HSC" type="checkbox" name="HSC" value="HSC">
    <label for="HSC">HSC </label>


    <!-- <input type="checkbox" name="degree"
	<?php if (isset($degree) && $degree=="HSC") echo "checked";?>
	value="HSC">HSC -->

    <input id="BSC" type="checkbox" name="BSC" value="BSC">
    <label for="BSC">BSC </label>


    <!-- <input type="checkbox" name="degree"
	<?php if (isset($degree) && $degree=="BSC") echo "checked";?>
	value="BSC">BSC -->

    <input id="MSC" type="checkbox" name="MSC" value="MSC">
    <label for="MSC">MSC </label>
    <br><br>


    <!-- <input type="checkbox" name="degree"
	<?php if (isset($degree) && $degree=="MSC") echo "checked";?>
	value="MSC">MSC
    <span class="error">* <?php echo $degreeErr;?></span> -->

    Blood Group:
    <label for="Blood Group"> </label>
    <select name="bloodgroup" id="bloodgroup">
        <option value="">Choose a Blood Group<br></option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <br><br>

    <input type="submit" name="submit" value="Submit">

    </form>

    <h1>Input</h1>
	<?php 
			echo $name."<br>";
			echo $email."<br>";
            echo $DateOfBirth."<br>";
            echo $gender."<br>";
            echo $degree."<br>";
            echo $bloodgroup."<br>";
		
	 ?>
</body>
</html>