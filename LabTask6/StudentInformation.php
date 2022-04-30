<!DOCTYPE html>
<html>
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
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

<h2>Student Information</h2>

<button type="button" onclick="loadDoc()">Get all student</button>
<br><br>
<table id="demo"></table>

<h2>Find Student</h2>
<h3>Start typing a name in the input field below:</h3>

<p>Suggestions: <span id="txtHint"></span></p> 
<p>First name: <input type="text" id="txt1" onkeyup="showHint(this.value)"></p>


<form action=""> 
  <select name="customers" onchange="showCustomer(this.value)">
    <option value="">Select a customer:</option>
    <option value="ALFKI">Alfreds Futterkiste</option>
    <option value="NORTS ">North/South</option>
    <option value="WOLZA">Wolski Zajazd</option>
  </select>
</form>
<br>
<div id="txtHint">Student info will be listed here...</div>


<script>
function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    myFunction(this);
  }
  xhttp.open("GET", "cd_catalog.xml");
  xhttp.send();
}
function myFunction(xml) {
  const xmlDoc = xml.responseXML;
  const x = xmlDoc.getElementsByTagName("CD");
  let table="<tr><th>Artist</th><th>Title</th></tr>";
  for (let i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
}

function showHint(str) {
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "gethint.php?q="+str);
  xhttp.send();   
}

function showCustomer(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML = this.responseText;
  }
  xhttp.open("GET", "getcustomer.php?q="+str);
  xhttp.send();
}
</script>

</body>
</html>
