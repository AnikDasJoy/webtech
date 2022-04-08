<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["tname"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }
      if(empty($_POST["tid"]))  
      {  
           $error = "<label class='text-danger'>Enter ID</label>";  
      }
      

      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter an e-mail</label>";  
      }  
      else if(empty($_POST["dept"]))  
      {  
           $error = "<label class='text-danger'>Enter a depertment</label>";  
      }  
       
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                // echo "old data: <br>". $current_data."<br>";
                $array_data = json_decode($current_data, true);  
                $new_data = array(  
                     'tname'               =>     $_POST['tname'], 
                     'tid'               =>     $_POST['tid'], 
                     'e-mail'          =>     $_POST["email"],  
                     'dept'     =>     $_POST["dept"] 
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
      <body>
      <?php 
		include 'navbar.php';
		
	 ?>
      <p> <a href="http://localhost/project/Include/">   HomePage </a>'   <a href="http://localhost/project/Login/Login.php">    Login </a>    '<a href="http://localhost/project/JSON/store.php">    Registration   '<a href="http://localhost/project//Teacher's%20Information/load.php">    Teacher's Information</a> </p> 
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Teacher's Information</h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Teacher's Name</label>  
                     <input type="text" name="tname" class="form-control" /><br />
                     <label>Teacher's ID</label>  
                     <input type="text" name="tid" class="form-control" /><br />
                     
                     <label>E-mail</label>
                     <input type="text" name = "email" class="form-control" /><br />
                     <label>Depertment</label>
                     <input type="text" name = "dept" class="form-control" /><br />
                     
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