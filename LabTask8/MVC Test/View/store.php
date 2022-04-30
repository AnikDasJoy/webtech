<?php  

include '../Controller/DataController.php';
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      
           if(file_exists('../data/data.json'))  
           {  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'e-mail'          =>     $_POST["email"],  
                     'username'     =>     $_POST["un"],  
                     'gender'     =>     $_POST["gender"],  
                     'dob'     =>     $_POST["dob"]  
                ); 
                addData($extra);
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Append Data to JSON File using PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

           <style> 
           #example1 {
  background: url(img_tree.gif) left top no-repeat, url(img_flwr.gif) right bottom no-repeat, url(paper.gif) left top repeat;
  padding: 15px;
  background-size: 50px, 130px, auto;
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

      </head> 
      <?php 
		include 'navbar.php';
		
	 ?>
       <p> <a href="http://localhost/final/project/Include/">   HomePage </a>'   <a href="http://localhost/final/project/Login/Login.php">    Login </a>    '<a href="http://localhost/final/project/JSON/store.php">    Registration   '<a href="http://localhost/final/project/Teacher's%20Information/store.php">    Teacher's Information </a> </p>
           <br />   
      <body>  
           <br />  
           <div id="example1" class="container" style="width:500px;">  
                <h3 align="">Add new student</h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Name</label>  
                     <input type="text" name="name" class="form-control" /><br />  
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
                     
                     <input type="submit" name="submit" value="Append" class="btn btn-info" /><br />                      
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