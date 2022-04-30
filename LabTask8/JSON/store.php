<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }
      if(empty($_POST["id"]))  
      {  
           $error = "<label class='text-danger'>Enter ID</label>";  
      }
      if(empty($_POST["cname"]))  
      {  
           $error = "<label class='text-danger'>Enter CName</label>";  
      }

      if(empty($_POST["regno"]))  
      {  
           $error = "<label class='text-danger'>Enter CName</label>";  
      }
      if(empty($_POST["address"]))  
      {  
           $error = "<label class='text-danger'>Enter Address</label>";  
      }

      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter an e-mail</label>";  
      }  
      else if(empty($_POST["un"]))  
      {  
           $error = "<label class='text-danger'>Enter a username</label>";  
      }  
      else if(empty($_POST["pass"]))  
      {  
           $error = "<label class='text-danger'>Enter a password</label>";  
      }
      else if(empty($_POST["Cpass"]))  
      {  
           $error = "<label class='text-danger'>Confirm password field cannot be empty</label>";  
      } 
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Gender cannot be empty</label>";  
      } 
       
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                // echo "old data: <br>". $current_data."<br>";
                $array_data = json_decode($current_data, true);  
                $new_data = array(  
                     'name'               =>     $_POST['name'], 
                     'id'               =>     $_POST['id'], 
                     'cname'               =>     $_POST['cname'],
                     'regno'               =>     $_POST['regno'],
                     'address'               =>     $_POST['address'],
                     'e-mail'          =>     $_POST["email"],  
                     'username'     =>     $_POST["un"],  
                     'gender'     =>     $_POST["gender"],  
                     'dob'     =>     $_POST["dob"]  
                );  

                // echo "new data:";
                // echo json_encode($new_data);
                $array_data[] = $new_data;  
                $final_data = json_encode($array_data);  

                // echo "final data: <br>". $final_data."<br>";
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Append Data to JSON File using PHP</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      </head>  
      <style>
           body {
  color: green;
}

div { 
  box-shadow: 0px 0px 15px currentcolor;
  border: 5px solid currentcolor;
  padding: 15px;
}
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
      <button onclick="document.getElementById('demo').innerHTML=Date()">The time is?</button>
      <p id="demo"></p>

      <h2>The XMLHttpRequest Object</h2>
      <button type="button" onclick="loadDoc()">Request data</button>
     <p id="demo"></p>

     <script>
     function loadDoc() {
     const xhttp = new XMLHttpRequest();
     xhttp.onload = function() {
     document.getElementById("demo").innerHTML = this.responseText;
     }
  xhttp.open("GET", "demo_get.asp");
  xhttp.send();
}
</script>

      <?php 
		include 'navbar.php';
		
	 ?>
       <p> <a href="http://localhost/final/project/Include/">   HomePage </a>'   <a href="http://localhost/final/project/Login/Login.php">    Login </a>    '<a href="http://localhost/final/project/JSON/store.php">    Registration   '<a href="http://localhost/final/project/Teacher's%20Information/store.php">    Teacher's Information </a> </p>
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">COURSE REGISTRATION</h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Student Name</label>  
                     <input type="text" name="name" class="form-control" /><br />
                     <label>Student ID</label>  
                     <input type="text" name="id" class="form-control" /><br />
                     <label>Course Name</label>  
                     <input type="text" name="cname" class="form-control" /><br />
                     <label>Reg No.</label>  
                     <input type="text" name="regno" class="form-control" /><br />
                     <label>Address</label>  
                     <input type="text" name="address" class="form-control" /><br />
                     
                     <label>E-mail</label>
                     <input type="text" name = "email" class="form-control" /><br />
                     <label>User Name</label>
                     <input type="text" name = "un" class="form-control" /><br />
                     <label>Password</label>
                     <input type="password" name = "pass" class="form-control" /><br />
                     <label>Confirm Password</label>
                     <input type="password" name = "Cpass" class="form-control" /><br />

                    <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label><br>

                     <legend>Date of Birth:</legend>
                     <input type="date" name="dob"> <br><br>
                    </fieldset> 
                     
                     <input type="submit" name="submit" value="Submit" class="btn btn-info" />
                     <input type="reset" name="reset" value="Reset" class="btn btn-info" /><br />                      
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  