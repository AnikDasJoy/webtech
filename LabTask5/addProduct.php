<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   

 <form action="controller/createStudent.php" method="POST" enctype="multipart/form-data">
 <h1>ADD RPODUCT</h1>
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="bprice">Buying Price:</label><br>
  <input type="text" id="bprice" name="bprice"><br>
  <label for="sprice">Selling Price:</label><br>
  <input type="text" id="sprice" name="sprice"><br>

  <input id="RM" type="checkbox" name="RM" value="RM">
  <label for="RM">Display </label><br><br>
  <input type="submit" name = "createStudent" value="SAVE">
   
</form> 

</body>
</html>

