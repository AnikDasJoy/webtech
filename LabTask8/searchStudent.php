
<!DOCTYPE html>
<html>
<head>
<style>
body {
  color: green;
}

div { 
  box-shadow: 0px 0px 15px currentcolor;
  border: 5px solid currentcolor;
  padding: 15px;
}
</style>
</head>
  <body>
<?php 
    include "nav.php";

?>
    <!-- [SEARCH FORM] -->
    <form method="post" action="controller/findUser.php">
      <h1>SEARCH Students</h1>
      <input type="text" name="user_name" />
      <input type="submit" name="findUser" value="Search"/>
    </form>


 
  </body>
</html>