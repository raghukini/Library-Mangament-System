<?php  
 $connect = mysqli_connect("localhost", "root", "", "library");  
 $query ="SELECT * FROM users ORDER BY usn ASC";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  

      <head>  
          
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
             <style>
           body
            {background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjRGtz4eT9Yjcn6Qbxxsh6PVczDXTriw1LMA&usqp=CAU');
            }
            table
            {
            	background-color: white;
            }
           </style>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3 align="center">View Books
                </h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>USN</td>  
                                    <td>User Name</td>  
                                    <td>Email</td> 
                                    <td>Phone Number</td>  
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["usn"].'</td>  
                                    <td>'.$row["uname"].'</td>  
                                    <td>'.$row["email"].'</td>  
                                    <td>'.$row["phone"].'</td>                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>