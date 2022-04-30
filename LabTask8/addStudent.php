<!DOCTYPE html>
<html>
<head>
	<title></title>
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
body {
  color: green;
}

div { 
  box-shadow: 0px 0px 15px currentcolor;
  border: 5px solid currentcolor;
  padding: 15px;
}
</style>

<body>
<h2>Student List</h2>
<button type="button" onclick="loadDoc()">Request data</button>

<p id="demo"></p>

<h2>The window.print() Method</h2>

<p>Click the button to print the current page.</p>

<button onclick="window.print()">Print this page</button>

<script>
window.alert(5 + 6);
</script>
<button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.</button>

<p id="demo"></p>
    <?php 
        include "nav.php";

     ?> 
     <p> <a href="http://localhost/final/project/Include/">   HomePage </a>'   <a href="http://localhost/final/project/Login/Login.php">    Login </a>    '<a href="http://localhost/final/project/JSON/store.php">    Registration   '<a href="http://localhost/final/project/Teacher's%20Information/store.php">    Teacher's Information </a> '<a href="http://localhost/final/project/addStudent.php">  Add New Students </a> </p>

 <form action="controller/createStudent.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="surname">Surname:</label><br>
  <input type="text" id="surname" name="surname"><br>
  <label for="username">User Name:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>
  <input type="file" name="image"><br><br>
  <input type="submit" name = "createStudent" value="Create">
  <input type="reset"> 
</form> 
<script>

const xhttp = new XMLHttpRequest();
xhttp.onload = function() {
  const xmlDoc = this.responseXML;
  const x = xmlDoc.getElementsByTagName("ARTIST");
  let txt = "";
  for (let i = 0; i < x.length; i++) {
    txt = txt + x[i].childNodes[0].nodeValue + "<br>";
  }
  document.getElementById("demo").innerHTML = txt;
}
xhttp.open("GET", "cd_catalog.xml");
xhttp.send();

function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML = this.responseText;
  }
  xhttp.open("GET", "demo_get2.asp?fname=Henry&lname=Ford");
  xhttp.send();
}
</script>

</body>
</html>

