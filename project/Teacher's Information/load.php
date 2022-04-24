<!DOCTYPE html>  
 <html>  
      <head>  
        <title></title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      </head>  
      <body>  
        <div class="container" style="width:500px;">              
                <div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Teacher's Name</th> 
                               <th>Teacher's ID</th>
                               <th>E-mail</th>  
                               <th>Depertment</th>   
                                 
                          </tr>  
                          <?php   
                          $data = file_get_contents("data.json");  
                          // echo $data;
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {  
                               echo '<tr>
                               <td>'.$row["tname"].'</td>
                               <td>'.$row["tid"].'</td>
                              
                               <td>'.$row["e-mail"].'</td>
                               <td>'.$row["dept"].'</td>
                               </tr>';  
                          }  
                          ?>  
                     </table>  
                   </div>
                 </div>
      </body>  
 </html>  