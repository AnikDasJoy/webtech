<!DOCTYPE html>
<html>
<body>
 <?php  
include 'navbar.php';
 ?>
 <p> <a href="http://localhost:81/adv%20php/LabTask%204/Include/">   Logout </a> </p>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>